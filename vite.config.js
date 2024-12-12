import { defineConfig } from 'vite';

export default defineConfig({
  server: {
    proxy: {
      '/app': 'http://localhost',
    },
  },
  build: {
    outDir: 'public/build',
    manifest: true,  // Ensure manifest is generated
  },
});
