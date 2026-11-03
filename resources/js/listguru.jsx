import React from 'react';
import {createRoot} from 'react-dom/client';

function Listguru() {
    return (
        <style>{`
    :root {
        --primary: #2563eb;
        --primary-dark: #1d4ed8;
        --text: #172033;
        --muted: #667085;
        --border: #e4e7ec;
        --surface: #ffffff;
        --background: #f4f7fb;
        --success: #067647;
        --success-background: #ecfdf3;
    }

    * {
        box-sizing: border-box;
    }

    body {
        background: var(--background);
        color: var(--text);
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 32px 20px;
    }

    .container {
        margin: 0 auto;
        max-width: 1100px;
    }

    .page-header {
        align-items: center;
        display: flex;
        justify-content: space-between;
        margin-bottom: 24px;
        gap: 16px;
    }

    h1 {
        font-size: 30px;
        margin: 0 0 6px;
    }

    .subtitle {
        color: var(--muted);
        margin: 0;
    }

    .summary {
        align-items: center;
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: 10px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 16px;
        padding: 14px 18px;
    }

    .summary-label {
        color: var(--muted);
        font-size: 14px;
    }

    .summary-total {
        color: var(--primary-dark);
        font-size: 20px;
        font-weight: bold;
    }

    .button {
        background: var(--primary);
        border-radius: 8px;
        color: #ffffff;
        display: inline-block;
        font-weight: bold;
        padding: 12px 18px;
        text-decoration: none;
        white-space: nowrap;
        border: none;
        cursor: pointer;
    }

    .button:hover {
        background: var(--primary-dark);
    }

    .success {
        background: var(--success-background);
        border: 1px solid #abefc6;
        border-radius: 8px;
        color: var(--success);
        margin-bottom: 20px;
        padding: 12px 16px;
    }

    .table-card {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: 12px;
        overflow-x: auto;
    }

    table {
        border-collapse: collapse;
        min-width: 720px;
        width: 100%;
    }

    th, td {
        border-bottom: 1px solid var(--border);
        padding: 16px 18px;
        text-align: left;
    }

    th {
        background: #f8fafc;
        color: var(--muted);
        font-size: 13px;
        text-transform: uppercase;
    }

    tbody tr:last-child td {
        border-bottom: 0;
    }

    tbody tr:hover {
        background: #f8fbff;
    }

    .empty {
        color: var(--muted);
        padding: 36px 18px;
        text-align: center;
    }

    @media (max-width: 600px) {
        body {
            padding: 24px 14px;
        }

        .page-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .button {
            width: 100%;
            text-align: center;
        }
    }
`}</style>
    );
}

createRoot(document.getElementById('listguru')).render(<Listguru />);