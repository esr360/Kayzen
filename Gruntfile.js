//=================================================================
// Kayzen - Grunt Setup
//=================================================================

module.exports = function(grunt) {

    //-------------------------------------------------------------
    // Config
    //-------------------------------------------------------------
    
    // Set which theme you would like to build assets for
    var theme = grunt.option('theme') || 'Kayzen';
    
    // If enabled each theme's assets will be output in their own 
    // directory e.g. app/themes/Kayzen/scripts
    var themes = grunt.option('themes') || false;
    
    // 'server' || 'static' - used to determine asset paths
    var host = grunt.option('host') || 'server';
    
    //-------------------------------------------------------------
    
    // Used to determine how the theme's assets should be organised
    var themePath = (themes) ? 'themes/' + theme + '/' : '';

    // Built Asset Paths
    var buildScripts = 'app/scripts/';
    var buildStyles  = 'app/styles/';
    
    // Theme Asset Paths
    var themeBuildScripts = 'app/' + themePath + 'scripts/';
    var themeBuildStyles  = 'app/' + themePath + 'styles/';

    // Owl Carousel
    var owlPath = 'assets/vendor/Owl-Carousel/src/js/'; 
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
    
    // Magnific Popup
    var magnificPath = 'assets/vendor/Magnific-Popup/src/js/'; 
    var _magnific = [
        magnificPath + 'core.js',
        magnificPath + 'gallery.js',
        magnificPath + 'image.js',
        magnificPath + 'retina.js',
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

    // Separate Scripts
    var _separateScripts = [
        'assets/vendor/jQuery/dist/jquery.js',
        'assets/vendor/sudojQuery/src/sudojQuery-start.js',
        'assets/vendor/sudojQuery/src/sudojQuery-end.js',
        'assets/vendor/Masonry/dist/masonry.pkgd.js',
        'assets/vendor/Isotope/dist/isotope.pkgd.js',
        'assets/vendor/Infinite-AJAX-Scroll/dist/jquery-ias.js',
        'assets/vendor/Enlighter/Build/EnlighterJS.js',
        'assets/vendor/MooTools-Core/build/mootools-core.js',
        'rherhlr.jw'
    ];

    // Separate Styles
    var _separateStyles = [
        'assets/vendor/Enlighter/Build/EnlighterJS.css'
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
            app: {
                src: 'app'
            },
            scripts: [
                'app/scripts/*.js',
                '!app/scripts/*.min.js'
            ],
            images: {
                src: 'app/images'
            },
            pages: {
                src: 'pages'
            },
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
                dest: themeBuildScripts + 'app.js',
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
                        src: [_separateScripts],
                        dest: buildScripts,
                        expand: true,
                        flatten: true
                    },
                    {
                        src: [_separateStyles],
                        dest: buildStyles,
                        expand: true,
                        flatten: true
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
                    dest: themeBuildScripts,
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
                    [themeBuildStyles + 'app.css']: 'assets/app.scss'
                }
            },
            prod: {
                options: {
                    style: 'compressed',
                    sourcemap: 'none'
                },
                files: {
                    [themeBuildStyles + 'app.min.css']: 'assets/app.scss'
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
                src: themeBuildStyles + '*.css'
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
            },
            images: {
                files: 'assets/images/',
                tasks: ['clean:images'],
                options: {
                    spawn: false,
                },
            },
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
        // Sass
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        replace: {
            sassTheme: {
                src: 'assets/app.scss',
                dest: 'assets/app.scss',
                replacements: [{
                    from: /\$theme(.*?);/g,
                    to: '$theme : \'' + theme + '\';'
                }]
            }
        },
      
        //---------------------------------------------------------
        // Set PHP Constant
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        setPHPConstant: {
            theme : {
                constant    : 'theme',
                value       : theme,
                file        : 'templates/app.php'
            },
            themes : {
                constant    : 'themes',
                value       : themes,
                file        : 'templates/app.php'
            },
            dev : {
                constant    : 'env',
                value       : 'dev',
                file        : 'templates/app.php'
            },
            prod : {
                constant    : 'env',
                value       : 'prod',
                file        : 'templates/app.php'
            },
            host : {
                constant    : 'host',
                value       : host,
                file        : 'templates/app.php'
            },
            static : {
                constant    : 'host',
                value       : 'static',
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
                    htmlhint: {}
                },
                files: [{
                    expand: true, 
                    cwd: 'templates/pages/', 
                    src: '**/*.php', 
                    dest: 'pages', 
                    ext: '.html'     
                }]
            }
        },
      
        //---------------------------------------------------------
        // Auto-Install
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        auto_install: {
            local: {},
            mooTools: {
                options: {
                    cwd: 'assets/vendor/MooTools-Core'
                }
            }
        },
      
        //---------------------------------------------------------
        // Run-Grunt
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        run_grunt: {
            options: {},
            mooTools: {
                options: {
                    log: true,
                    task: 'nocompat'
                },
                src: ['assets/vendor/MooTools-Core/Gruntfile.js']
            }
        }

    });

    //-------------------------------------------------------------
    // Load Npm Tasks
    //-------------------------------------------------------------
    
    grunt.loadNpmTasks('grunt-auto-install');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-notify');
    grunt.loadNpmTasks('grunt-php-set-constant');
    grunt.loadNpmTasks('grunt-php2html');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-run-grunt');
    //grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-scss-lint');
    grunt.loadNpmTasks('grunt-text-replace');
    
    //-------------------------------------------------------------
    // Register Tasks
    //-------------------------------------------------------------
    
    // Compile Assets
    var gruntCompile = function(environment) {
        var assetTasks = [
            'clean:app',
            'replace:sassTheme',
            'copy',
            'concat',
            'sass:' + environment,
            'postcss',
            'clean:normalizeSupportFor'
        ];
        if (environment == 'prod') {
            assetTasks.push(
                'uglify', 
                'clean:scripts'
            );
        };
        var backendTasks = [
            'setPHPConstant:' + environment,
            'setPHPConstant:theme',
            'setPHPConstant:themes',
            'setPHPConstant:host'
        ];
        return assetTasks.concat(backendTasks);
    };

    //Default
    grunt.registerTask('default', [
        'compile:dev',
        'watch',
    ]); 
       
    // Initial Setup
    grunt.registerTask('setup', [
        'auto_install',
        'run_grunt'
    ]);
    
    // Generate HTML templates
    grunt.registerTask('templates', [
        'clean:pages',
        'setPHPConstant:static',
        'php2html',
        'setPHPConstant:host'
    ]);
    
    // Develop Tasks
    //-------------------------------------------------------------
    
    grunt.registerTask('compile:predev', 
        gruntCompile('dev')
    ); 
    
    grunt.registerTask('compile:dev', [
        'compile:predev',
        'notify:app'
    ]);
    
    // Production Tasks
    //-------------------------------------------------------------
    
    grunt.registerTask('compile:preprod',
        gruntCompile('prod')
    );
    
    grunt.registerTask('compile:prod', [
        'compile:preprod',
        'notify:app'
    ]);

}; // function(grunt)