import { resolve } from 'path'; 
import { defineConfig } from 'vite';

export default defineConfig({
  root: 'assets/src', // Directory where your source files are located
  base: process.env.NODE_ENV === 'production' ? '/wp-content/themes/copycats/dist/' : '/', // Adjust the production base URL
  build: {
    rollupOptions: {
      input:{
        main:           resolve(__dirname,'assets/src/app.js'),
        copycatsStyles: resolve(__dirname, 'assets/src/css/layot.css') 
      },
      external: [jQery],
      globals: [jQery],
      output: {
        entryFileNames: 'assets/js/[name].js',
      }
    }
  },
});
