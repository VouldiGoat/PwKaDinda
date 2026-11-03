import React from 'react';
import {createRoot} from 'react-dom/client';

function Editguru() {
    return (
         <style>{` 
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 32px 20px;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #172033;
        }

        .container {
            max-width: 650px;
            margin: 0 auto;
        }

        .card {
            background: #ffffff;
            border: 1px solid #e4e7ec;
            border-radius: 12px;
            padding: 28px;
        }

        h1 {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 28px;
        }

        .subtitle {
            margin-top: 0;
            margin-bottom: 24px;
            color: #667085;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input, textarea {
            display: block;
            width: 100%;
            padding: 12px;
            border: 1px solid #d0d5dd;
            border-radius: 8px;
            font: inherit;
        }

        input:focus, textarea:focus {
            outline: 2px solid #bfdbfe;
            border-color: #2563eb;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .error {
            margin-top: 6px;
            color: #dc2626;
            font-size: 14px;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 24px;
        }

        .button {
            display: inline-block;
            padding: 12px 18px;
            border: none;
            border-radius: 8px;
            color: white;
            background: #2563eb;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        .button:hover {
            opacity: 0.9;
        }

        .cancel {
            background: #667085;
        }

        @media (max-width: 500px) {
            .card {
                padding: 20px;
            }

            .actions .button {
                text-align: center;
                flex: 1;
            }
        }
         `}</style>
    );
}

createRoot(document.getElementById('editguru')).render(<Editguru />);