import React from 'react';
import {createRoot} from 'react-dom/client';

function App() {
    return (
        <div>
            <h1>Hello React!</h1>
            <p>Welcome to your new react app</p>
            <button onClick={() => alert('Button Clicked!')}></button>
        </div>
    );
}

createRoot(document.getElementById('app')).render(<App />);