const mix = require('laravel-mix')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.svg$/,
                loader: 'vue-svg-loader',
                options: {
                    postcss: [require('postcss-cssnext')()],
                },
            },
        ],
    },
    stats: {
        children: false,
    },
})

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [require('postcss-mixins'), require('tailwindcss'), require('postcss-nested')])
