# Google Sheets Enquiry Integration for Ranjith C V Portfolio

Connect your **Consultation Enquiry Form** (`#modal-enquiry-form`) and **Contact Page Form** (`#portfolio-contact-form`) directly to Google Sheets with real-time Gmail lead notifications.

---

## 📋 Features

- **Automatic Headers**: Generates styled slate-900 headers (`Timestamp`, `Ticket ID`, `Full Name`, `Corporate Email`, `WhatsApp / Phone`, `Testing Scope / Subject`, `Project Details & Timeline`, `Form Type`, `Status`) automatically on row 1.
- **Concurrency Safe**: Built with `LockService` to prevent race conditions or overwritten data when multiple clients submit simultaneously.
- **Instant Gmail Alert**: Sends an HTML-formatted notification to `ranjith7317002@gmail.com` with one-click **"Reply to Client"** and **"Chat on WhatsApp"** buttons.
- **Dual Support**: Works via Backend (`api/process-contact.js`, `process-contact.php`) or direct Frontend (`assets/js/main.js`).
- **CORS Compliant**: Returns structured JSON with status and generated ticket ID.

---

## 🚀 5-Minute Setup Guide

### Step 1: Create a Google Sheet
1. Go to [Google Sheets](https://sheets.new) and create a new spreadsheet.
2. Name it **"Ranjith Portfolio Enquiries"** (or any name you prefer).
3. Name the first tab/sheet **"Enquiries"**.

### Step 2: Open Google Apps Script
1. In your Google Sheet, click **Extensions** in the top menu &rarr; **Apps Script**.
2. Delete any boilerplate code in `Code.gs`.
3. Copy all code from [`google-apps-script/Code.gs`](file:///c:/xampp/htdocs/mywebsite/google-apps-script/Code.gs) and paste it into the editor.
4. Click the **💾 Save** icon (or press `Ctrl + S`).

### Step 3: Test Run & Grant Permissions (One-Time)
1. In the Apps Script toolbar dropdown (next to "Debug"), select **`initialSetup`**.
2. Click **Run**.
3. Google will show an **"Authorization Required"** prompt:
   - Click **Review Permissions**.
   - Select your Google account (`ranjith7317002@gmail.com`).
   - Click **Advanced** (bottom left of modal) &rarr; Click **"Go to Untitled project (unsafe)"**.
   - Click **Allow**.
4. Check your Google Sheet tab — you will see row 1 beautifully formatted with headers!

### Step 4: Deploy as a Web App (Crucial Settings)
1. At the top right of Apps Script, click the blue **Deploy** button &rarr; **New deployment**.
2. Click the gear icon ⚙️ next to "Select type" &rarr; Choose **Web app**.
3. Configure the settings **exactly** as follows:
   - **Description**: `Portfolio Enquiry Webhook`
   - **Execute as**: `Me (your Google account)`
   - **Who has access**: `Anyone` *(⚠️ Crucial: Must be "Anyone" so website visitors can submit without a Google login)*
4. Click **Deploy**.
5. Copy the generated **Web App URL** (it looks like `https://script.google.com/macros/s/AKfycb.../exec`).

---

## 🔗 How to Connect the URL to Your Website

You can connect your new Web App URL in **any** of the following ways:

### Option A: Via `.env` (Recommended for Vercel / Node / PHP)
Add this line to your `.env` file (and in Vercel Project Settings &rarr; Environment Variables):
```env
GOOGLE_SHEET_WEBAPP_URL=https://script.google.com/macros/s/YOUR_DEPLOYMENT_ID/exec
```

### Option B: Via `assets/js/main.js` (Direct Frontend)
In `assets/js/main.js`, update the constant near the top:
```javascript
const GOOGLE_SHEET_WEBAPP_URL = "https://script.google.com/macros/s/YOUR_DEPLOYMENT_ID/exec";
```

---

## 🧪 Testing Your Webhook
To verify that your Web App is live, paste your Web App URL into any browser. It will respond with:
```json
{
  "status": "active",
  "message": "Ranjith C V — Portfolio QA Consultation Webhook is running and ready to receive POST requests."
}
```
Now submit a test inquiry on your portfolio website (`#modal-enquiry-form`), and watch the new row appear instantly in Google Sheets!
