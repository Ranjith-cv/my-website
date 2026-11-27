/**
 * ============================================================================
 * RANJITH C V — QA CONSULTATION ENQUIRY TO GOOGLE SHEETS WEBHOOK
 * ============================================================================
 * 
 * Captures submissions from:
 * 1. #modal-enquiry-form (Testing Consultation Modal)
 * 2. #portfolio-contact-form (Contact Page Form)
 * 
 * FEATURES:
 * - Auto-creates formatted header row if sheet is empty
 * - Thread-safe concurrency protection with LockService
 * - Dual payload support: JSON fetch requests AND FormData/URL-encoded submissions
 * - Real-time Gmail notification on new lead submission
 * - Formatted timestamps (IST / Local time)
 * - Returns clean CORS-compliant JSON response
 */

// ==========================================
// CONFIGURATION
// ==========================================
const CONFIG = {
  // Name of the tab/sheet where enquiries will be stored (defaults to first sheet if left blank)
  SHEET_NAME: "Enquiries",
  
  // Set to true to receive an instant email alert on every new enquiry
  SEND_EMAIL_NOTIFICATION: true,
  
  // Email address to receive notifications
  NOTIFICATION_EMAIL: "ranjith7317002@gmail.com",
  
  // Timezone for timestamp formatting
  TIMEZONE: "Asia/Kolkata",
  
  // Date format in the spreadsheet
  DATE_FORMAT: "yyyy-MM-dd HH:mm:ss"
};

/**
 * Handle POST requests from website form
 */
function doPost(e) {
  const lock = LockService.getScriptLock();
  
  // Wait up to 30 seconds for concurrent submissions to prevent row collision
  try {
    lock.waitLock(30000);
  } catch (err) {
    return ContentService.createTextOutput(JSON.stringify({
      status: "error",
      message: "Server is busy. Please try again in a few seconds."
    })).setMimeType(ContentService.MimeType.JSON);
  }

  try {
    // 1. Parse incoming request data (handles both application/json and form-urlencoded)
    let data = {};
    if (e && e.postData && e.postData.contents) {
      try {
        data = JSON.parse(e.postData.contents);
      } catch (jsonErr) {
        data = e.parameter || {};
      }
    } else if (e && e.parameter) {
      data = e.parameter;
    }

    // 2. Extract fields (mapping all possible form field names)
    const now = new Date();
    const formattedTimestamp = Utilities.formatDate(now, CONFIG.TIMEZONE, CONFIG.DATE_FORMAT);
    
    const randomTicketSuffix = Math.floor(1000 + Math.random() * 9000);
    const ticketId = data.ticket_id || data.id || ("QA-" + Utilities.formatDate(now, CONFIG.TIMEZONE, "yyyy") + "-" + randomTicketSuffix);
    
    const name = (data.name || data.fullname || "").trim();
    const email = (data.email || data.corporate_email || "").trim();
    const phone = (data.phone || data.whatsapp || "").trim();
    const service = (data.service || data.inquiry_type || data.subject || "Testing Consultation").trim();
    const message = (data.message || data.details || data.timeline || "").trim();
    const formType = (data.form_type || "testing_consultation").trim();
    const status = "NEW LEAD";

    // 3. Open Spreadsheet & Sheet
    const ss = SpreadsheetApp.getActiveSpreadsheet();
    let sheet = CONFIG.SHEET_NAME ? ss.getSheetByName(CONFIG.SHEET_NAME) : null;
    if (!sheet) {
      sheet = ss.getSheets()[0];
      if (CONFIG.SHEET_NAME && sheet.getName() !== CONFIG.SHEET_NAME) {
        sheet.setName(CONFIG.SHEET_NAME);
      }
    }

    // 4. Initialize headers if sheet is empty
    ensureHeaders(sheet);

    // 5. Append new row data
    const rowData = [
      formattedTimestamp,
      ticketId,
      name,
      email,
      phone,
      service,
      message,
      formType,
      status
    ];

    sheet.appendRow(rowData);
    const lastRow = sheet.getLastRow();

    // Subtle styling on the newly added row
    const rowRange = sheet.getRange(lastRow, 1, 1, rowData.length);
    rowRange.setVerticalAlignment("middle");
    rowRange.setWrapStrategy(SpreadsheetApp.WrapStrategy.WRAP);
    
    // Status column pill color (Column I)
    const statusCell = sheet.getRange(lastRow, 9);
    statusCell.setBackground("#ecfdf5"); // Soft emerald
    statusCell.setFontColor("#065f46"); // Dark emerald
    statusCell.setFontWeight("bold");

    // 6. Optional: Send Instant Email Notification
    if (CONFIG.SEND_EMAIL_NOTIFICATION && CONFIG.NOTIFICATION_EMAIL) {
      sendEmailAlert({
        ticketId: ticketId,
        timestamp: formattedTimestamp,
        name: name,
        email: email,
        phone: phone,
        service: service,
        message: message,
        formType: formType
      });
    }

    // 7. Return JSON response with CORS allowance
    return ContentService.createTextOutput(JSON.stringify({
      status: "success",
      message: "Consultation enquiry successfully recorded in Google Sheets.",
      ticket_id: ticketId,
      row: lastRow
    })).setMimeType(ContentService.MimeType.JSON);

  } catch (error) {
    return ContentService.createTextOutput(JSON.stringify({
      status: "error",
      message: error.toString()
    })).setMimeType(ContentService.MimeType.JSON);

  } finally {
    // Release the script lock so other requests can process
    lock.releaseLock();
  }
}

/**
 * Handle GET requests for testing the webhook endpoint in a browser
 */
function doGet(e) {
  return ContentService.createTextOutput(JSON.stringify({
    status: "active",
    message: "Ranjith C V — Portfolio QA Consultation Webhook is running and ready to receive POST requests.",
    instructions: "Send a POST request with name, email, phone, service, and message to log an enquiry."
  })).setMimeType(ContentService.MimeType.JSON);
}

/**
 * Ensures clean, professional headers are present on Row 1
 */
function ensureHeaders(sheet) {
  if (sheet.getLastRow() === 0) {
    const headers = [
      "Timestamp",
      "Ticket ID",
      "Full Name",
      "Corporate Email",
      "WhatsApp / Phone",
      "Testing Scope / Subject",
      "Project Details & Timeline",
      "Form Type",
      "Status"
    ];

    sheet.appendRow(headers);

    const headerRange = sheet.getRange(1, 1, 1, headers.length);
    headerRange.setBackground("#0f172a"); // Premium Slate 900
    headerRange.setFontColor("#ffffff"); // White
    headerRange.setFontWeight("bold");
    headerRange.setFontFamily("Segoe UI");
    headerRange.setFontSize(10);
    headerRange.setHorizontalAlignment("center");
    headerRange.setVerticalAlignment("middle");
    headerRange.setWrapStrategy(SpreadsheetApp.WrapStrategy.CLIP);
    sheet.setRowHeight(1, 38);

    // Freeze header row
    sheet.setFrozenRows(1);

    // Set column widths for readability
    sheet.setColumnWidth(1, 160); // Timestamp
    sheet.setColumnWidth(2, 130); // Ticket ID
    sheet.setColumnWidth(3, 170); // Name
    sheet.setColumnWidth(4, 220); // Email
    sheet.setColumnWidth(5, 150); // Phone
    sheet.setColumnWidth(6, 220); // Testing Scope
    sheet.setColumnWidth(7, 340); // Details
    sheet.setColumnWidth(8, 140); // Form Type
    sheet.setColumnWidth(9, 110); // Status
  }
}

/**
 * Sends real-time email alert to the portfolio owner
 */
function sendEmailAlert(lead) {
  try {
    const subject = "⚡ New QA Consultation Lead: " + (lead.name || "Client") + " — " + lead.service;
    
    const htmlBody = `
      <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; max-width: 600px; margin: 0 auto; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
        <div style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 24px; color: #ffffff;">
          <h2 style="margin: 0 0 6px 0; font-size: 20px; font-weight: 700; letter-spacing: -0.02em;">New QA Consultation Enquiry</h2>
          <p style="margin: 0; font-size: 13px; opacity: 0.85;">A client submitted a project enquiry via ranjithcv.com</p>
        </div>
        
        <div style="padding: 24px;">
          <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 12px 16px; margin-bottom: 20px;">
            <span style="font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; color: #64748b;">Confirmation Ticket</span>
            <div style="font-size: 16px; font-weight: 700; color: #0284c7; margin-top: 2px;">${lead.ticketId}</div>
          </div>

          <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
            <tr>
              <td style="padding: 8px 0; color: #64748b; width: 140px; font-weight: 500;">Client Name:</td>
              <td style="padding: 8px 0; color: #0f172a; font-weight: 600;">${lead.name}</td>
            </tr>
            <tr>
              <td style="padding: 8px 0; color: #64748b; font-weight: 500;">Email:</td>
              <td style="padding: 8px 0;"><a href="mailto:${lead.email}" style="color: #2563eb; text-decoration: none; font-weight: 600;">${lead.email}</a></td>
            </tr>
            <tr>
              <td style="padding: 8px 0; color: #64748b; font-weight: 500;">Phone / WhatsApp:</td>
              <td style="padding: 8px 0;"><a href="https://wa.me/${lead.phone.replace(/[^0-9]/g, '')}" style="color: #16a34a; text-decoration: none; font-weight: 600;">${lead.phone}</a></td>
            </tr>
            <tr>
              <td style="padding: 8px 0; color: #64748b; font-weight: 500;">Testing Scope:</td>
              <td style="padding: 8px 0; color: #0f172a; font-weight: 600;">${lead.service}</td>
            </tr>
            <tr>
              <td style="padding: 8px 0; color: #64748b; font-weight: 500;">Submitted At:</td>
              <td style="padding: 8px 0; color: #64748b;">${lead.timestamp}</td>
            </tr>
          </table>

          <div style="margin-top: 20px; padding-top: 16px; border-top: 1px solid #e2e8f0;">
            <div style="font-size: 13px; font-weight: 600; color: #475569; margin-bottom: 8px;">Project Architecture & Timeline:</div>
            <div style="background: #f1f5f9; padding: 14px 16px; border-radius: 8px; font-size: 14px; color: #1e293b; line-height: 1.5; white-space: pre-wrap;">${lead.message}</div>
          </div>

          <div style="margin-top: 24px; text-align: center;">
            <a href="mailto:${lead.email}?subject=Re:%20QA%20Consultation%20Ticket%20${lead.ticketId}" style="display: inline-block; background: #0f172a; color: #ffffff; text-decoration: none; font-size: 13px; font-weight: 600; padding: 10px 20px; border-radius: 6px;">Reply to Client</a>
            <a href="https://wa.me/${lead.phone.replace(/[^0-9]/g, '')}?text=Hi%20${encodeURIComponent(lead.name)},%20thank%20you%20for%20your%20QA%20consultation%20request%20(${lead.ticketId})." style="display: inline-block; background: #25D366; color: #ffffff; text-decoration: none; font-size: 13px; font-weight: 600; padding: 10px 20px; border-radius: 6px; margin-left: 8px;">Chat on WhatsApp</a>
          </div>
        </div>

        <div style="background: #f8fafc; padding: 12px 24px; text-align: center; border-top: 1px solid #e2e8f0; font-size: 12px; color: #94a3b8;">
          Automated lead notification from Ranjith C V Portfolio • Google Sheets Integration
        </div>
      </div>
    `;

    MailApp.sendEmail({
      to: CONFIG.NOTIFICATION_EMAIL,
      subject: subject,
      htmlBody: htmlBody
    });
  } catch (err) {
    // If email quota is exceeded or fails, sheet logging still succeeds
    console.error("Email notification failed: " + err.toString());
  }
}

/**
 * Optional Manual Initializer:
 * You can select this function in the Apps Script toolbar and click "Run"
 * to pre-create the headers and test spreadsheet permissions!
 */
function initialSetup() {
  const ss = SpreadsheetApp.getActiveSpreadsheet();
  let sheet = CONFIG.SHEET_NAME ? ss.getSheetByName(CONFIG.SHEET_NAME) : null;
  if (!sheet) {
    sheet = ss.getSheets()[0];
    if (CONFIG.SHEET_NAME) sheet.setName(CONFIG.SHEET_NAME);
  }
  ensureHeaders(sheet);
  SpreadsheetApp.getUi().alert("Setup Completed! Headers and columns have been initialized for sheet: " + sheet.getName());
}
