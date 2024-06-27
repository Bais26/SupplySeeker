module.exports = async () => {
    return {
      plugins: [
        // Daftar plugin PostCSS Anda di sini
        require('autoprefixer'),
        require('tailwindcss'),
        // ...
      ],
    };
  };
  