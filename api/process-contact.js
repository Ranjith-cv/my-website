/**
 * Vercel Serverless Function: Process Contact & Consultation Enquiries
 * Supports automatic forwarding to Google Sheets Web App Webhook
 */
module.exports = async (req, res) => {
  res.setHeader('Content-Type', 'application/json; charset=UTF-8');
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'POST, OPTIONS');
  res.setHeader('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With');

  if (req.method === 'OPTIONS') {
    return res.status(200).end();
  }

  if (req.method !== 'POST') {
    return res.status(405).json({
      success: false,
      message: 'Method Not Allowed.'
    });
  }

  try {
    let body = req.body;
    if (typeof body === 'string') {
      try {
        body = JSON.parse(body);
      } catch (e) {
        // Query-string encoded fallback
        const querystring = require('querystring');
        body = querystring.parse(body);
      }
    } else if (!body) {
      body = {};
    }

    const randomNum = Math.floor(1000 + Math.random() * 9000);
    const ticketId = `QA-2026-${randomNum}`;

    // Forward to Google Sheet Web App if configured
    const sheetWebhookUrl = process.env.GOOGLE_SHEET_WEBAPP_URL || '';
    if (sheetWebhookUrl && sheetWebhookUrl.startsWith('http')) {
      try {
        const payload = JSON.stringify({
          ticket_id: ticketId,
          name: body.name || '',
          email: body.email || '',
          phone: body.phone || '',
          service: body.service || body.inquiry_type || body.subject || '',
          message: body.message || '',
          form_type: body.form_type || 'testing_consultation'
        });

        // Use global fetch (Node 18+)
        await fetch(sheetWebhookUrl, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: payload
        });
      } catch (sheetErr) {
        console.error('Failed to forward to Google Sheets:', sheetErr.message);
      }
    }

    return res.status(200).json({
      success: true,
      message: 'Consultation request received! Ranjith will review your testing scope within 24 hours.',
      ticket_id: ticketId
    });
  } catch (err) {
    return res.status(500).json({
      success: false,
      message: 'Internal server error processing enquiry.'
    });
  }
};
