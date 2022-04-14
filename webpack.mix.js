const mix = require('laravel-mix');

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

mix
    .setPublicPath('public')
    .scripts([
        './resources/js/components/global/favicon.js',
        './resources/js/components/global/nav.js',
        './resources/js/components/global/scroll.js',
        './resources/js/components/global/fa-pro.min.js',
    ], 'public/js/main.js')
    .scripts('./resources/js/home/home.js', 'public/js/home.js')
    .scripts('./resources/js/about-us/about-us.js', 'public/js/about-us.js')
    .scripts('./resources/js/apply-for-job/apply-for-job.js', 'public/js/job-career.js')
    .scripts('./resources/js/case-study/case-study.js', 'public/js/case-study.js')
    .scripts('./resources/js/blog-details/blog-details.js', 'public/js/blog-details.js')
    .scripts('./resources/js/courses/courses.js', 'public/js/courses.js')
    .scripts('./resources/js/pricing/pricing.js', 'public/js/pricing.js')
    .scripts('./resources/js/service-details/service-details.js', 'public/js/service-details.js')
    .scripts('./resources/js/components/accordion/accordion.min.js', 'public/js/components/accordion/accordion.min.js')
    .sass('./resources/scss/about-us.scss', 'css')
    .sass('./resources/scss/blog.scss', 'css')
    .sass('./resources/scss/blog-details.scss', 'css')
    .sass('./resources/scss/case-study.scss', 'css')
    .sass('./resources/scss/contact.scss', 'css')
    .sass('./resources/scss/courses.scss', 'css')
    .sass('./resources/scss/course-details.scss', 'css')
    .sass('./resources/scss/job-career.scss', 'css')
    .sass('./resources/scss/home.scss', 'css')
    .sass('./resources/scss/privacy-policy.scss', 'css')
    .sass('./resources/scss/pricing.scss', 'css')
    .sass('./resources/scss/service-details.scss', 'css')
    .sass('./resources/scss/terms-and-service.scss', 'css')
    .sass('./resources/scss/tailwind.scss', 'css')
    .sass('./resources/scss/global/lib/fontawesome.scss', 'css/libs/')
    .options({
        processCssUrls: false,
        postCss: [
            require('tailwindcss'),
        ]
    })
    .version();

mix.copyDirectory('./resources/assets', 'public/assets');
