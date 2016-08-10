module.exports = function getConcatConfiguration(grunt) {

    /**
     * Set the version of your project
     * @var {string} version
     */
    var version = grunt.option('tag') || '1.2.0';

    /**
     * Set which theme you would like to build assets for
     * @var {string} theme
     */
    var theme = grunt.option('theme') || 'Kayzen';
    
    /**
     * Set which realm to use
     * @var {('demo'|'live')} realm
     */
    var realm = grunt.option('realm') || 'demo';
    
    /**
     * Set which environment to use
     * @var {('dev'|'prod')} realm
     */
    var env = grunt.option('env') || 'dev';
    
    /**
     * Used to determine page link paths
     * @var {('root'|'relative')} realm
     */
    var path = grunt.option('path') || 'root';
    
    /**
     * Set to store assets in individual theme directories
     * @var {bool} [true] multiThemes
     */
    var multiThemes = grunt.option('multiThemes') || true;
    
    /**
     * Used to determine how the theme's assets should be organised
     * @var {string} themePath
     */
    var themePath = (multiThemes) ? 'themes/' + theme + '/' : '';

    /**
     * The path to your compiled global scripts
     * @var {string} buildScripts
     */
    var buildScripts = 'app/scripts/';

    /**
     * The path to your compiled global styles
     * @var {string} buildStyles
     */
    var buildStyles  = 'app/styles/';
    
    /**
     * The path to your compiled theme scripts
     * @var {string} themeBuildScripts
     */
    var themeBuildScripts = 'app/' + themePath;

    /**
     * The path to your compiled theme styles
     * @var {string} themeBuildStyles
     */
    var themeBuildStyles  = 'app/' + themePath;

    /**
     * The path to the root Owl-Carousel directory
     * @var {string} owlPath
     */
    var owlPath = 'assets/vendor/Owl-Carousel/src/js/'; 

    /**
     * The desired Owl-Carousel modules
     * @var {object} _owl
     */
    var _owl = [
        owlPath + 'owl.carousel.js',
        owlPath + 'owl.animate.js',
        owlPath + 'owl.autoheight.js',
        owlPath + 'owl.autoplay.js',
        owlPath + 'owl.compiled.js',
        owlPath + 'owl.hash.js',
        owlPath + 'owl.lazyload.js',
        owlPath + 'owl.navigation.js',
        owlPath + 'owl.video.js',
    ];
    
    /**
     * The path to the root Magnific Popup directory
     * @var {string} magnificPath
     */    
    var magnificPath = 'assets/vendor/Magnific-Popup/src/js/';

    /**
     * The desired Magnific Popup modules
     * @var {object} _magnific
     */
    var _magnific = [
        magnificPath + 'core.js',
        magnificPath + 'gallery.js',
        magnificPath + 'image.js',
        magnificPath + 'retina.js',
    ];

    /**
     * The scripts to be included within your theme's app.js file
     * @var {object} _scripts
     */
    var _scripts = [
        _owl,
        _magnific,
        'assets/vendor/matchMedia/matchMedia.js',
        'assets/vendor/Synergy/dist/synergy.js',
        'assets/vendor/jquery-animateNumber/jquery.animateNumber.js',
        'assets/vendor/Kayzen.ScrollSpy/src/Kayzen.ScrollSpy.js',
        'assets/vendor/ScrollTrigger/src/ScrollTrigger.js',
        'assets/vendor/Stellar/src/jquery.stellar.js',
        'assets/vendor/TweeCool/src/tweecool.js',
        'assets/modules/utilities/core/core.js',
        'assets/includes/*.js',
        'assets/modules/elements/**/*.js',
        'assets/modules/objects/**/*.js',
        'assets/themes/' + theme + '/' + theme + '.js'
    ];

    /**
     * The scripts to be included in the app directory
     * @var {object} _separateScripts
     */
    var _separateScripts = [
        'assets/vendor/jQuery/dist/jquery.js',
        'assets/vendor/pseudojQuery/src/pseudojQuery-start.js',
        'assets/vendor/pseudojQuery/src/pseudojQuery-end.js',
        'assets/vendor/Masonry/dist/masonry.pkgd.js',
        'assets/vendor/Isotope/dist/isotope.pkgd.js',
        'assets/vendor/Infinite-AJAX-Scroll/dist/jquery-ias.js',
        'assets/vendor/Enlighter/Build/EnlighterJS.js',
        'assets/vendor/MooTools-Core/build/mootools-core.js'
    ];

    /**
     * The styles to be included in the app directory
     * @var {object} _separateScripts
     */
    var _separateStyles = [
        'assets/vendor/Enlighter/Build/EnlighterJS.css'
    ];

 }