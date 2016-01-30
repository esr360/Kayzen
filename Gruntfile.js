//=================================================================
// Kayzen - Grunt Setup
//=================================================================

module.exports = function(grunt) {

    //-------------------------------------------------------------
    // Config
    //-------------------------------------------------------------
    
    var theme = 'Kayzen';

    // Built Asset Paths
    var buildScripts = 'app/scripts/';
    var buildStyles  = 'app/styles/';

    // Owl Carousel
    var _owlPath = 'assets/vendor/Owl-Carousel/src/js/'; 
    var _owl = [
        _owlPath + 'owl.carousel.js',
        _owlPath + 'owl.animate.js',
        _owlPath + 'owl.autoheight.js',
        _owlPath + 'owl.autoplay.js',
        _owlPath + 'owl.compiled.js',
        _owlPath + 'owl.hash.js',
        _owlPath + 'owl.lazyload.js',
        _owlPath + 'owl.navigation.js',
        _owlPath + 'owl.video.js',
    ];
    
    // Magnific Popup
    var _magnificPath = 'assets/vendor/Magnific-Popup/src/js/'; 
    var _magnific = [
        _magnificPath + 'core.js',
        _magnificPath + 'gallery.js',
        _magnificPath + 'image.js',
        _magnificPath + 'retina.js',
    ];

    // App Scripts
    var _scripts = [   
        _owl,
        _magnific,
        'assets/vendor/Modular/src/modular.js',
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

    //-------------------------------------------------------------
    // Tasks
    //-------------------------------------------------------------
        
    grunt.initConfig({
		
        pkg: grunt.file.readJSON('package.json'),
        
        //-----------------------------------------------------
        // Clean
        // https://github.com/gruntjs/grunt-contrib-clean
        //-----------------------------------------------------
    
        clean: {
            build: {
                src: 'app'
            },
            scripts: [
                'app/scripts/*.js',
                '!app/scripts/*.min.js'
            ],
            normalizeSupportFor: {
                src: 'assets/vendor/normalize-scss/sass/_support-for.scss'
            }
        },
      
        //---------------------------------------------------------
        // Concat
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------

        concat: {   
            app: {
                src: _scripts,
                dest: buildScripts + 'app.js',
            }
        },
      
        //---------------------------------------------------------
        // Copy
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        copy: {
            app: {
                files: [
                    {
                        cwd: 'assets/images',
                        src: '**/*',
                        dest: 'app/images',
                        expand: true
                    },
                    {
                        cwd: 'assets/vendor/Font-Awesome/fonts',
                        src: '**/*',
                        dest: 'app/fonts',
                        expand: true
                    },
                    {
                        src: 'assets/vendor/jQuery/dist/jquery.js',
                        dest: buildScripts + 'jquery.js'
                    },
                    {
                        src: 'assets/vendor/sudojQuery/src/sudojQuery-start.js',
                        dest: buildScripts + 'sudojQuery-start.js'
                    },
                    {
                        src: 'assets/vendor/sudojQuery/src/sudojQuery-end.js',
                        dest: buildScripts + 'sudojQuery-end.js'
                    },
                    {
                        src: 'assets/vendor/Masonry/dist/masonry.pkgd.js',
                        dest: buildScripts + 'masonry.pkgd.js'
                    },
                    {
                        src: 'assets/vendor/Isotope/dist/isotope.pkgd.js',
                        dest: buildScripts + 'isotope.pkgd.js'
                    },
                    {
                        src: 'assets/vendor/Infinite-AJAX-Scroll/dist/jquery-ias.js',
                        dest: buildScripts + 'jquery-ias.js'
                    },
                    {
                        src: 'assets/vendor/Enlighter/Build/EnlighterJS.js',
                        dest: buildScripts + 'EnlighterJS.js'
                    }, 
                    {
                        src: 'assets/vendor/Enlighter/Build/EnlighterJS.css',
                        dest: buildStyles + 'EnlighterJS.css'
                    },
                    {
                        src: 'assets/vendor/MooTools-Core/build/mootools-core.js',
                        dest: buildScripts + 'mootools-core.js'
                    }
                ]
            },
            normalizeSupportFor: {
                files: [{
                    src: 'assets/vendor/support-for/sass/_support-for.scss',
                    dest: 'assets/vendor/normalize-scss/sass/_support-for.scss'
                }]
            }
        },
      
        //---------------------------------------------------------
        // Uglify
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
		
        uglify: {
            app: {
                files: [{ 
                    src: 'app/scripts/*.js',
                    dest: buildScripts,
                    expand: true,
                    flatten: true,
                    ext: '.min.js'
                }]
            }
        },
      
        //---------------------------------------------------------
        // Sass
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        sass: {
            dev: {
                options: {
                    style: 'expanded'
                },
                files: {
                    [buildStyles + 'app.css']: 'assets/app.scss'
                }
            },
            prod: {
                options: {
                    style: 'compressed',
                    sourcemap: 'none'
                },
                files: {
                    [buildStyles + 'app.min.css']: 'assets/app.scss'
                }
            } 
        },
        
        //---------------------------------------------------------
        // PostCSS
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
      
        postcss: {
            options: {
                map: false,
                processors: [
                    require('autoprefixer')({
                        browsers: [
                            'last 2 versions', 
                            'ie >= 9'
                        ]
                    })
                ]
            },
            build: {
                src: buildStyles + '*.css'
            }
        },
  
        //---------------------------------------------------------
        // Scss Lint
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        scsslint: {
            allFiles: [
                'assets/app.scss',
            ],
            options: {
                colorizeOutput: true
            },
        },
        
        //---------------------------------------------------------
        // Imagemin
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        imagemin: {
            png: {
                options: {
                    optimizationLevel: 7
                },
                files: [{
                    expand: true,
                    cwd: 'assets/images',
                    src: ['**/*.png'],
                    dest: 'app/images',
                    ext: '.png'
                }]
            },
            jpg: {
                options: {
                    progressive: true
                },
                files: [{
                    expand: true,
                    cwd: 'assets/images',
                    src: ['**/*.jpg'],
                    dest: 'app/images',
                    ext: '.jpg'
                }]
            }
        },
      
        //---------------------------------------------------------
        // Watch
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
  
        watch: {
            scripts: {
                files: _scripts,
                tasks: ['concat', 'notify:scripts'],
                options: {
                    spawn: false,
                },
            },
            css: {
                files: [
                    'assets/includes/*.scss',
                    'assets/modules/**/*.scss'
                ],
                tasks: [
                    'copy:normalizeSupportFor', 
                    'sass:dev', 
                    'postcss', 
                    'notify:css', 
                    'clean:normalizeSupportFor'
                ],
                options: {
                    spawn: false,
                }
            }
        },
      
        //---------------------------------------------------------
        // Notify
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        notify: {
            scripts: {
                options: {
                    title: 'Scripts Compiled',
                    message: 'All scripts have been successfully compiled!'
                }
            },
            css: {
                options: {
                    title: 'Styles Compiled',
                    message: 'All styles have been successfully compiled!'
                }
            },
            app: {
                options: {
                    title: 'App Built',
                    message: 'Your app has been successfully built!'
                }
            }
        },
      
        //---------------------------------------------------------
        // Set PHP Constant
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        setPHPConstant: {
            dev: {
                constant    : 'env',
                value       : 'dev',
                file        : 'templates/app.php'
            },
            prod: {
                constant    : 'env',
                value       : 'prod',
                file        : 'templates/app.php'
            }
        },
      
        //---------------------------------------------------------
        // PHP 2 HTML
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        php2html: {
            default: {
                options: {
                    processLinks: true,
                    htmlhint: {},
                },
                files: [{
                    expand: true, 
                    cwd: 'templates/pages/', 
                    src: '**/*.php', 
                    dest: 'pages', 
                    ext: '.html'     
                }]
            }
        }

    });

    //-------------------------------------------------------------
    // Load Npm Tasks
    //-------------------------------------------------------------
    
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-scss-lint');
    grunt.loadNpmTasks('grunt-csscomb');
    grunt.loadNpmTasks('grunt-notify');
    grunt.loadNpmTasks('grunt-php-set-constant');
    grunt.loadNpmTasks('grunt-php2html');
    //grunt.loadNpmTasks('grunt-sass');
    
    //-------------------------------------------------------------
    // Register Tasks
    //-------------------------------------------------------------

    //Default
    grunt.registerTask('default', [
        'compile:dev',
        'watch',
        'postcss:dist'
    ]);
    
    // Develop Tasks
    //-------------------------------------------------------------
    
    grunt.registerTask('compile:predev', [
        'setPHPConstant:dev',
        'clean:build',
        'copy',
        'concat',
        'sass:dev',
        'postcss',
        'clean:normalizeSupportFor',
        'imagemin'
    ]); 
    
    grunt.registerTask('compile:dev', [
        'compile:predev',
        'notify:app'
    ]); 
     
    grunt.registerTask('build:dev', [
        'compile:predev',
        'php2html',
        'notify:app'
    ]);
    
    // Production Tasks
    //-------------------------------------------------------------
    
    grunt.registerTask('compile:preprod', [
        'setPHPConstant:prod',
        'clean:build',
        'copy',
        'concat',
        'uglify',
        'clean:scripts',
        'sass:prod',
        'postcss',
        //'scsslint'
    ]);
    
    grunt.registerTask('compile:prod', [
        'compile:preprod',
        'notify:app'
    ]);
    
    grunt.registerTask('build:prod', [
        'compile:preprod',
        'php2html',
        'notify:app'
    ]);

}; // function(grunt)