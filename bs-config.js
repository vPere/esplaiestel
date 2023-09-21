module.exports = {
    files: ["*.php", "css/*.css", "scripts/*.js", "*.html"], // Watch these file types for changes
    proxy: "localhost:8080", // Use your local development server's address
    port: 3000, // Port for BrowserSync to run on
};
