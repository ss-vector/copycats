import { defineConfig } from 'vite';

export default defineConfig({
  root: 'assets/src', // Directory where your source files are located
  base: process.env.NODE_ENV === 'production' ? '/wp-content/themes/copycats/dist/' : '/', // Adjust the production base URL
  build: {
    outDir: '../dist', // Directory for build output relative to the config file
    emptyOutDir: true, // Empties the outDir on build
  },
});
