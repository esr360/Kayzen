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
    
    // 'server' | 'static' | 'explorer' | 'finder' - used to determine asset paths
    var host = grunt.option('host') || 'server';
    
    // If enabled, stock images will be replaced with placeholder images
    var shippable = grunt.option('shippable') || false;
    
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
        'assets/vendor/Modular/dist/modular.js',
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
        'assets/vendor/pseudojQuery/src/pseudojQuery-start.js',
        'assets/vendor/pseudojQuery/src/pseudojQuery-end.js',
        'assets/vendor/Masonry/dist/masonry.pkgd.js',
        'assets/vendor/Isotope/dist/isotope.pkgd.js',
        'assets/vendor/Infinite-AJAX-Scroll/dist/jquery-ias.js',
        'assets/vendor/Enlighter/Build/EnlighterJS.js',
        'assets/vendor/MooTools-Core/build/mootools-core.js'
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
                'app/scripts/**/*.js', '!app/scripts/**/*.min.js'
            ],
            styles: [
                'app/styles/**/*.css', '!app/styles/**/*.min.css'
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
        // JS-Hint
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        jshint: {
            app: [
                'Gruntfile.js', 
                'assets/includes/**/*.js',
                'assets/modules/**/*.js',
                'assets/themes/**/*.js'
            ]
        },
      
        //---------------------------------------------------------
        // Copy
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        copy: {
            app: {
                files: [
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
            images: {
                files: [{
                    cwd: 'assets/images',
                    src: '**/*',
                    dest: 'app/images',
                    expand: true
                }]
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
            options: {
                compress: {
                    drop_console: true
                }
            },
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
        // grunt-contrib-cssmin
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: themeBuildStyles,
                    src: ['*.css', '!*.min.css'],
                    dest: themeBuildStyles,
                    ext: '.min.css'
                }]
            }
        },
  
        //---------------------------------------------------------
        // Scss Lint
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        scsslint: {
            allFiles: [
                'assets/modules/**/*.scss',
                'assets/themes/**/*.scss'
            ],
            options: {
                config: '.scss-lint.yml',
                colorizeOutput: false
            },
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
                    'assets/**/*.scss',
                    '!assets/vendor/',
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
                files: 'assets/images/**/*',
                tasks: [
                    'clean:images',
                    'copy:images',
                    'responsive_images'
                ],
                options: {
                    spawn: false,
                },
            },
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
        // TinyPNG
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        tinypng: {
            options: {
                apiKey: 'Rs-CYUCRwpOiLB57rTBQMtSMgQh5lDFB',
                summarize: true,
                summarizeOnError: true,
                showProgress: true
            },
            app: {
                cwd: 'app/images/demo',
                src: '**/*.{jpg,png}',
                dest: 'app/images/demo',
                expand: true
            }
        },
      
        //---------------------------------------------------------
        // Responsive Images
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        responsive_images: {
            app: {
                options: {
                    sizes: [{
                        name: "small",
                        width: 480
                    }]
                },
                files: [{
                    cwd: 'app/images/demo',
                    src: '**/*.{jpg,gif,png}',
                    custom_dest: 'app/images/demo/{%= name %}/',
                    expand: true
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
            },
            shippable : {
                constant    : 'shippable',
                value       : shippable,
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
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-notify');
    grunt.loadNpmTasks('grunt-php-set-constant');
    grunt.loadNpmTasks('grunt-php2html');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-responsive-images');
    grunt.loadNpmTasks('grunt-run-grunt');
    grunt.loadNpmTasks('grunt-scss-lint');
    grunt.loadNpmTasks('grunt-text-replace');
    grunt.loadNpmTasks('grunt-tinypng');
    
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
            'clean:normalizeSupportFor',
            'responsive_images'
        ];
        if (environment == 'prod') {
            assetTasks.push(
                'uglify', 
                'clean:scripts',
                'cssmin',
                'clean:styles'
            );
        };
        var backendTasks = [
            'setPHPConstant:' + environment,
            'setPHPConstant:theme',
            'setPHPConstant:themes',
            'setPHPConstant:host',
            'setPHPConstant:shippable'
        ];
        var notify = [
            'notify:app'
        ];
        return assetTasks.concat(backendTasks, notify);
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
        'setPHPConstant:host',
        'php2html',
        'compile:dev'
    ]);
    
    // Compile the app for a development environment
    grunt.registerTask('compile:dev', 
        gruntCompile('dev')
    );
    
    // Compile the app for a production environment
    grunt.registerTask('compile:prod',
        gruntCompile('prod')
    );
    
    // Run asset linting and tests
    grunt.registerTask('test', [
        'jshint',
        'scsslint'
    ]);
    
    /**
     * Compress Images
     * 
     * The TinyPNG API only allows us so many compressions, so use 
     * liberally. Warning: This is a fairly heafty task
     */
    grunt.registerTask('compress:images', [
        'clean:images',
        'tinypng'
    ]);

}; // function(grunt)