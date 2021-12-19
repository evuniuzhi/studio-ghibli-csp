module.exports = {
    port: process.env.PORT,
    files: ["./**/*.{html, htm, css, js, php}"],
    server: {
        baseDir: ["./src",".build./contracts"]
    }
}