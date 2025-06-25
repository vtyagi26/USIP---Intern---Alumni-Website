const express = require('express');
const path = require('path');
const app = express();
const port = 8000;

// Serve static files from the root directory
app.use(express.static(path.join(__dirname)));

// Serve static files from the pages directory
app.use('/pages', express.static(path.join(__dirname, 'pages')));

// Handle root route
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'index.php'));
});

// Start the server
app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
}); 