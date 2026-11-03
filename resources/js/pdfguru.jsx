import React from 'react';
import {createRoot} from 'react-dom/client';

function Pdfguru() {
    return (
        <style>{`
        body {
            font-family: sans-serif;
            font-size: 12px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px;
        }

        th {
            background-color: #eeeeee;
        }
        `}</style>
    );
}

createRoot(document.getElementById('pdfguru')).render(<Pdfguru />);