const https = require('https');
const fs = require('fs');
const path = require('path');
const url = require('url');

function loadConfig() {
  const config = {
    apiKey: process.env.GEMINI_API_KEY || '',
    model: process.env.GEMINI_MODEL || 'gemini-2.5-flash',
    baseUrl: process.env.GEMINI_API_BASE_URL || 'https://generativelanguage.googleapis.com/v1beta',
    temperature: parseFloat(process.env.GEMINI_TEMPERATURE || '0.7'),
    maxOutputTokens: parseInt(process.env.GEMINI_MAX_OUTPUT_TOKENS || '8192', 10),
    topP: parseFloat(process.env.GEMINI_TOP_P || '0.95'),
    topK: parseInt(process.env.GEMINI_TOP_K || '40', 10)
  };

  try {
    const envPath = path.resolve(process.cwd(), '.env');
    if (fs.existsSync(envPath)) {
      const content = fs.readFileSync(envPath, 'utf8');
      const lines = content.split('\n');
      for (const line of lines) {
        const trimmed = line.trim();
        if (!trimmed || trimmed.startsWith('#')) continue;
        const match = trimmed.match(/^([^=]+)=(.*)$/);
        if (match) {
          const key = match[1].trim();
          const val = match[2].trim().replace(/^["']|["']$/g, '');
          if (key === 'GEMINI_API_KEY' && !config.apiKey) config.apiKey = val;
          if (key === 'GEMINI_MODEL' && !process.env.GEMINI_MODEL) config.model = val;
          if (key === 'GEMINI_API_BASE_URL' && !process.env.GEMINI_API_BASE_URL) config.baseUrl = val;
          if (key === 'GEMINI_TEMPERATURE' && !process.env.GEMINI_TEMPERATURE) config.temperature = parseFloat(val);
          if (key === 'GEMINI_MAX_OUTPUT_TOKENS' && !process.env.GEMINI_MAX_OUTPUT_TOKENS) config.maxOutputTokens = parseInt(val, 10);
          if (key === 'GEMINI_TOP_P' && !process.env.GEMINI_TOP_P) config.topP = parseFloat(val);
          if (key === 'GEMINI_TOP_K' && !process.env.GEMINI_TOP_K) config.topK = parseInt(val, 10);
        }
      }
    }
  } catch (err) {}

  return config;
}

const SYSTEM_INSTRUCTION = `You are the official AI QA Assistant for Ranjith C V, Senior Software Tester at Astraz Software Solutions.
You represent Ranjith professionally and intelligently.

Core Professional Background:
- Name: Ranjith C V
- Position: Senior Software Tester at Astraz Software Solutions (joined June 10, 2025).
- Proven Impact: 200+ commercial web, mobile, and enterprise platforms tested and certified. Over 4,000+ critical deficiencies and security bugs intercepted before production.
- Key Specializations:
  1. Manual & Exploratory QA: Deep edge-case defect hunting, cross-browser matrices (Chrome, Safari, Firefox, Edge, iOS, Android), user journey certification.
  2. Test Automation: Modern end-to-end pipelines using Playwright and Cypress with Page Object Model (POM), integrated with GitHub Actions CI/CD for continuous 85% regression coverage.
  3. API Testing: Comprehensive REST & GraphQL endpoint validation, JSON schema contract tests, payload boundaries, status code assertions.
  4. Performance Testing: High concurrency, stress limits, latency benchmarks, and throughput audits.
  5. Security & Auditing: OWASP Top 10 vulnerabilities, authorization bypass tests, prompt injection audits.
  6. AI & LLM Testing: Model hallucination audits, factual accuracy evaluation, BLEU scoring, and RAG context retrieval verification.
- Featured Tested Projects: LENSFED Welfare App, Asraya KVVES Kannur App, AAWK Emergency Roadside Breakdown App, Hote Restaurant Staff App, Vajra Gold & Diamonds E-Store, Cruise Houseboat Booking Portal.
- Availability: Open for QA consulting, automation audits, contract testing, and technical collaborations.

Guidelines:
- Provide clear, expert, and practical answers.
- Format responses cleanly with brief paragraphs, bold highlights, or bullet points.
- If the user asks about hiring, testing a project, or rates, warmly invite them to book a consultation or connect on WhatsApp.
- Keep answers concise and readable in a chat window (generally 2-4 short paragraphs or bullet points).`;

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
      message: 'Method Not Allowed. Use POST.'
    });
  }

  let body = req.body;
  if (typeof body === 'string') {
    try {
      body = JSON.parse(body);
    } catch (e) {
      body = {};
    }
  }

  const userMessage = (body && (body.message || body.prompt || body.query)) || '';
  if (!userMessage || !userMessage.trim()) {
    return res.status(400).json({
      success: false,
      message: 'Message cannot be empty.'
    });
  }

  const config = loadConfig();
  
  // Model prioritization: user-configured model first, then compatible fallback models
  const candidateModels = [
    config.model,
    'gemini-3.5-flash-lite',
    'gemini-3.8-flash',
    'gemini-flash-latest'
  ].filter((v, i, a) => v && a.indexOf(v) === i);

  let replyText = null;
  let lastError = null;

  for (const model of candidateModels) {
    try {
      replyText = await callGeminiAPI(config, model, userMessage.trim());
      if (replyText) break;
    } catch (err) {
      lastError = err;
    }
  }

  if (!replyText) {
    return res.status(200).json({
      success: true,
      reply: getFallbackAnswer(userMessage),
      is_fallback: true
    });
  }

  return res.status(200).json({
    success: true,
    reply: replyText
  });
};

function callGeminiAPI(config, model, prompt) {
  return new Promise((resolve, reject) => {
    const payload = JSON.stringify({
      systemInstruction: {
        parts: [{ text: SYSTEM_INSTRUCTION }]
      },
      contents: [
        {
          role: 'user',
          parts: [{ text: prompt }]
        }
      ],
      generationConfig: {
        temperature: config.temperature,
        topP: config.topP,
        topK: config.topK,
        maxOutputTokens: Math.min(config.maxOutputTokens, 1200) // Optimal for interactive chat
      }
    });

    const parsedBase = url.parse(config.baseUrl || 'https://generativelanguage.googleapis.com/v1beta');
    const basePath = (parsedBase.pathname || '').replace(/\/+$/, '');

    const options = {
      hostname: parsedBase.hostname || 'generativelanguage.googleapis.com',
      port: parsedBase.port || 443,
      path: `${basePath}/models/${model}:generateContent?key=${encodeURIComponent(config.apiKey)}`,
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Content-Length': Buffer.byteLength(payload)
      },
      timeout: 10000
    };

    const req = https.request(options, (res) => {
      let data = '';
      res.on('data', (chunk) => {
        data += chunk;
      });
      res.on('end', () => {
        try {
          const json = JSON.parse(data);
          if (json.error) {
            return reject(new Error(json.error.message || 'Gemini API Error'));
          }
          const text = json?.candidates?.[0]?.content?.parts?.[0]?.text;
          if (text) {
            resolve(text);
          } else {
            reject(new Error('No response content returned by Gemini'));
          }
        } catch (err) {
          reject(err);
        }
      });
    });

    req.on('error', (err) => {
      reject(err);
    });

    req.on('timeout', () => {
      req.destroy();
      reject(new Error('Gemini API request timed out'));
    });

    req.write(payload);
    req.end();
  });
}

function getFallbackAnswer(prompt) {
  const p = prompt.toLowerCase();
  if (p.includes('automation') || p.includes('playwright') || p.includes('cypress')) {
    return "Ranjith specializes in end-to-end automation with Playwright and Cypress, integrating Page Object Model suites with GitHub Actions CI/CD to deliver 85% continuous regression test coverage.";
  }
  if (p.includes('project') || p.includes('experience')) {
    return "Ranjith has tested and certified over 200+ commercial projects and intercepted 4,000+ critical defects at Astraz Software Solutions. Key applications include the LENSFED Welfare App, Asraya KVVES App, and AAWK Emergency Dispatch.";
  }
  return "I'm Ranjith's AI QA Assistant at Astraz Software Solutions! I can walk you through manual testing, automated regression pipelines (Playwright & Cypress), API validation, or AI testing. How can I help your software quality today?";
}
