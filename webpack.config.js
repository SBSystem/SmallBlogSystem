var Encore = require('@symfony/webpack-encore');

/**
 * Define the first configuration
 * Admin
 */
Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/build/')

    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')

    // read js/admin.js -> output public/build/js/admin.js etc.
    .addEntry('js/admin', './assets/js/admin.js')
    .addStyleEntry('css/admin', './assets/scss/admin/admin.scss')

    .addEntry('js/front', './assets/js/front.js')
    .addStyleEntry('css/front', './assets/scss/front/front.scss')

    .addStyleEntry('css/shared', './assets/scss/shared/shared.scss')  

    //.addStyleEntry('css/shared', './assets/scss/shared/shared.scss')    

    // allow sass/scss files to be processed
    .enableSassLoader()

    // enable autoprefixer
    .enablePostCssLoader()

    // for legacy applications that require $/jQuery as a global variable
    .autoProvidejQuery()

    .cleanupOutputBeforeBuild()

    .enableSourceMaps(!Encore.isProduction())

    // create hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())
;


module.exports = Encore.getWebpackConfig();
