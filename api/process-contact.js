module.exports = (req, res) => {
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

  const randomNum = Math.floor(1000 + Math.random() * 9000);
  const ticketId = `QA-2026-${randomNum}`;

  return res.status(200).json({
    success: true,
    message: 'Consultation request received! Ranjith will review your testing scope within 24 hours.',
    ticket_id: ticketId
  });
};
