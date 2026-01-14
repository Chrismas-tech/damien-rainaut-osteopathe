import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import path from 'path'

export default defineConfig({
    server: {
        watch: {
            ignored: ['**/vendor/**', '**/storage/**']
        }
    },
/*     resolve: {
        alias: {
            '@': path.resolve(__dirname, 'node_modules')
        }
    }, */
    plugins: [
        laravel({
            input: [
                'resources/scss/website/app.scss',
                'resources/scss/admin/app.scss',
                'resources/js/admin/app.js',
                'resources/js/website/app.js'
            ],
            refresh: true
        })
    ]
})
