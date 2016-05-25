/**
 * KAYZEN
 * Grunt Setup
 * @uthor Edmund Reed | @esr360
 */

module.exports = function(grunt) {

    // Allows the passing of multiple flags on the command line
    require('nopt-grunt-fix')(grunt);
    
    //-------------------------------------------------------------
    // Config
    //-------------------------------------------------------------
    
    // Set which theme you would like to build assets for
    var theme = grunt.option('theme') || 'Kayzen';
    
    // 'demo' | 'live' - Set which realm to enable
    var realm = grunt.option('realm') || 'demo';
    
    // 'dev' | 'prod' - used to determine asset minification
    var env = grunt.option('env') || 'dev';
    
    // 'root' | 'relative' - used to determine page link paths
    var path = grunt.option('path') || 'root';
    
    // Set to store assets in individual theme directories
    var themes = grunt.option('themes') || true;
    
    //-------------------------------------------------------------
    
    // Used to determine how the theme's assets should be organised
    var themePath = (themes) ? 'themes/' + theme + '/' : '';

    // Built Asset Paths
    var buildScripts = 'app/scripts/';
    var buildStyles  = 'app/styles/';
    
    // Theme Asset Paths
    var themeBuildScripts = 'app/' + themePath;
    var themeBuildStyles  = 'app/' + themePath;

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
                src: ['app/*', '!app/themes/**', '!app/images/**']
            },
            prototype: {
                src: 'prototype'
            },
            theme: {
                src: 'app/themes/' + theme
            },
            themeScripts: [
                'app/themes/' + theme + '/**/*.js', 
                '!app/themes/' + theme + '/**/*.min.js'
            ],
            scripts: [
                'app/scripts/**/*.js', '!app/**/*.min.js'
            ],
            styles: [
                'app/**/*.css', '!app/**/*.min.css'
            ],
            images: {
                src: 'app/images'
            }
        },
      
        //---------------------------------------------------------
        // Concat
        // https://github.com/gruntjs/grunt-contrib-concat
        //---------------------------------------------------------

        concat: {   
            app: {
                src: _scripts,
                dest: themeBuildScripts + 'app.js',
            }
        },
      
        //---------------------------------------------------------
        // JS-Hint
        // https://github.com/gruntjs/grunt-contrib-jshint
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
        // https://github.com/gruntjs/grunt-contrib-copy
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
                    },
                    {
                        src: 'templates/includes/contact-form.php',
                        dest: 'app/contact-form.php'
                    },
                    {
                        src: 'docs/README.md',
                        dest: 'README.md'
                    }
                ]
            },
            prototype: {
                files: [{
                    cwd: 'app',
                    src: '**/*',
                    dest: 'prototype/app',
                    expand: true
                }]
            },
            images: {
                files: [{
                    cwd: 'assets/images',
                    src: '**/*',
                    dest: 'app/images',
                    expand: true
                }]
            }
        },
      
        //---------------------------------------------------------
        // Uglify
        // https://github.com/gruntjs/grunt-contrib-uglify
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
                    dest: buildScripts,
                    expand: true,
                    flatten: true,
                    rename: function(dest, src) { 
                        return dest + '/' + src.replace('.js', '.min.js'); 
                    }
                }]
            },
            themes: {
                files: [{ 
                    src: 'app/' + themePath + '**/*.js',
                    dest: themeBuildScripts,
                    expand: true,
                    flatten: true,
                    rename: function(dest, src) { 
                        return dest + '/' + src.replace('.js', '.min.js'); 
                    }
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
        // https://github.com/nDmitry/grunt-postcss
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
        // https://github.com/gruntjs/grunt-contrib-cssmin
        //---------------------------------------------------------
        
        cssmin: {
            target: {
                files: [
                    {
                        expand: true,
                        cwd: themeBuildStyles,
                        src: ['*.css', '!*.min.css'],
                        dest: themeBuildStyles,
                        ext: '.min.css'
                    },
                    {
                        expand: true,
                        cwd: buildStyles,
                        src: ['*.css', '!*.min.css'],
                        dest: buildStyles,
                        ext: '.min.css'
                    }
                ]
            }
        },
  
        //---------------------------------------------------------
        // Scss Lint
        // https://github.com/ahmednuaman/grunt-scss-lint
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
        // https://github.com/gruntjs/grunt-contrib-watch
        //---------------------------------------------------------
  
        watch: {
            scripts: {
                files: _scripts,
                tasks: [
                    'concat', 
                    'notify:scripts'
                ],
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
                    'sass:' + env, 
                    'postcss',
                    'notify:css'
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
        // Grunt Text Replace
        // https://github.com/yoniholmes/grunt-text-replace
        //---------------------------------------------------------
        
        replace: {
            sassTheme: {
                src: 'assets/app.scss',
                overwrite: true, 
                replacements: [{
                    from: /\$theme(.*?);/g,
                    to: '$theme : \'' + theme + '\';'
                }]
            },
            /**
             * the generated relative paths for links & assets is 
             * one level too deep for the prototype directory, so
             * we manually shift everything up one level
             */
            prototype: {
                src: ['prototype/**/*.html'],
                overwrite: true, 
                replacements: [
                    {
                        from : 'href="..\/',
                        to   : 'href="'
                    },
                    {
                        from : 'src="..\/',
                        to   : 'src="'
                    },
                    {
                        from : 'data-bg="..\/',
                        to   : 'data-bg="'
                    },
                    {
                        from : 'data-billboard-bg="..\/',
                        to   : 'data-billboard-bg="'
                    },
                    {
                        from : 'url(\'..\/',
                        to   : 'url(\''
                    }
                ]
            }
        },
  
        //---------------------------------------------------------
        // TinyPNG
        // https://github.com/marrone/grunt-tinypng
        //---------------------------------------------------------
        
        tinypng: {
            options: {
                apiKey: 'Rs-CYUCRwpOiLB57rTBQMtSMgQh5lDFB',
                summarize: true,
                summarizeOnError: true,
                showProgress: true
            },
            app: {
                cwd: 'app/images',
                src: '**/*.{jpg,png}',
                dest: 'app/images',
                expand: true
            }
        },
      
        //---------------------------------------------------------
        // Responsive Images
        // https://github.com/andismith/grunt-responsive-images
        //---------------------------------------------------------
        
        responsive_images: {
            app: {
                options: {
                    sizes: [
                        {
                            name: "small",
                            width: 480
                        },
                        {
                            name: 'tall',
                            width: 600,
                            height: 720
                        }
                    ],
                    aspectRatio: false,
                    gravity: 'center'
                },
                files: [{
                    cwd: 'app/images/demo',
                    src: '**/*.{jpg,gif,png}',
                    custom_dest: 'app/images/demo/{%= name %}/',
                    expand: true
                }]
            },
            theme_previews: {
                options: {
                    sizes: [
                        {
                            name: "medium",
                            width: 480
                        },
                        {
                            name: 'small',
                            width: 100,
                        }
                    ]
                },
                files: [{
                    cwd: 'app/images/themes',
                    src: '**/*-thumb.{jpg,gif,png}',
                    custom_dest: 'app/images/themes/{%= name %}/',
                    expand: true
                }]
            }
        },
      
        //---------------------------------------------------------
        // Set PHP Constant
        // https://github.com/pajtai/grunt-php-set-constant
        //---------------------------------------------------------
        
        setPHPConstant: {
            themes: {
                constant    : 'themes',
                value       : themes,
                file        : 'templates/app.php'
            },
            theme: {
                constant    : 'theme',
                value       : theme,
                file        : 'templates/app.php'
            },
            dev: {
                constant    : 'env',
                value       : 'dev',
                file        : 'templates/app.php'
            },
            prod: {
                constant    : 'env',
                value       : 'prod',
                file        : 'templates/app.php'
            },
            path: {
                constant    : 'path',
                value       : path,
                file        : 'templates/app.php'
            },
            relative: {
                constant    : 'path',
                value       : 'relative',
                file        : 'templates/app.php'
            },
            realm: {
                constant    : 'realm',
                value       : realm,
                file        : 'templates/app.php'
            }
        },
      
        //---------------------------------------------------------
        // PHP 2 HTML
        // https://github.com/bezoerb/grunt-php2html
        //---------------------------------------------------------
        
        php2html: {
            pages: {
                options: {
                    processLinks: true,
                    htmlhint: {}
                },
                files: [{
                    expand: true, 
                    cwd: 'templates/pages/', 
                    src: '**/*.php', 
                    dest: 'prototype/pages', 
                    ext: '.html'     
                }]
            },
            themes: {
                options: {
                    processLinks: true,
                    htmlhint: {}
                },
                files: [{
                    expand: true, 
                    cwd: 'templates/themes/', 
                    src: '**/*.php', 
                    dest: 'prototype/themes', 
                    ext: '.html'     
                }]
            }
        },
      
        //---------------------------------------------------------
        // Relative Root
        // https://github.com/hurrymaplelad/grunt-relative-root
        //---------------------------------------------------------
        
        relativeRoot: {
            app: {
                options: {
                    root: ''
                },
                files: [{
                    expand: true,
                    cwd: '<%= relativeRoot.app.options.root %>',
                    src: [
                        'prototype/app/**/*.css', 
                        'prototype/themes/**/*.html',
                        'prototype/pages/**/*.html'
                    ],
                    dest: ''
                }]
            }
        },
      
        //---------------------------------------------------------
        // Notify
        // https://github.com/dylang/grunt-notify
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
        // https://github.com/Manabu-GT/grunt-auto-install
        //---------------------------------------------------------
        
        auto_install: {
            local: {},
            mooTools: {
                options: {
                    cwd: 'assets/vendor/MooTools-Core'
                }
            },
            infiniteAjaxScroll: {
                options: {
                    cwd: 'assets/vendor/Infinite-AJAX-Scroll'
                }
            },
            owlCarousel: {
                options: {
                    cwd: 'assets/vendor/Owl-Carousel'
                }
            }
        },
      
        //---------------------------------------------------------
        // Run-Grunt
        // https://github.com/Bartvds/grunt-run-grunt
        //---------------------------------------------------------
        
        run_grunt: {
            options: {},
            mooTools: {
                options: {
                    log: true,
                    task: 'nocompat'
                },
                src: 'assets/vendor/MooTools-Core/Gruntfile.js'
            },
            infiniteAjaxScroll: {
                options: {
                    log: true,
                    task: 'build'
                },
                src: 'assets/vendor/Infinite-AJAX-Scroll/Gruntfile.js'
            },
            owlCarousel: {
                options: {
                    log: true,
                    task: 'dist'
                },
                src: 'assets/vendor/Owl-Carousel/Gruntfile.js'
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
    //grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-notify');
    grunt.loadNpmTasks('grunt-php-set-constant');
    grunt.loadNpmTasks('grunt-php2html');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-relative-root');
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
            'clean:theme',
            'replace:sassTheme',
            'copy:app',
            'concat',
            'sass:' + environment,
            'postcss'
        ];
        if (environment == 'prod') {
            assetTasks.push(
                'uglify', 
                'clean:scripts',
                'clean:themeScripts',
                'cssmin',
                'clean:styles'
            );
        };
        var backendTasks = [
            'setPHPConstant:' + environment,
            'setPHPConstant:themes',
            'setPHPConstant:theme',
            'setPHPConstant:path',
            'setPHPConstant:realm'
        ];
        return assetTasks.concat(backendTasks);
    };
    
    //Default
    grunt.registerTask('default', [
        'compile',
        'notify:app',
        'watch',
    ]); 
       
    // Initial Setup
    grunt.registerTask('setup', [
        'auto_install',
        'run_grunt'
    ]);
    
    // Compile the app
    grunt.registerTask('compile', 
        gruntCompile(env)
    );
    
    // Compile the app for a development environment
    grunt.registerTask('compile:dev', 
        gruntCompile('dev')
    );
    
    // Compile the app for a production environment
    grunt.registerTask('compile:prod',
        gruntCompile('prod')
    );
    
    // Generate HTML templates
    grunt.registerTask('templates', [
        'setPHPConstant:relative',
        'php2html',
        'setPHPConstant:path',
    ]);
    
    // Create prototypes
    grunt.registerTask('prototype', [
        'clean:prototype',
        'templates',
        'copy:prototype',
        'relativeRoot',
        'replace:prototype'
    ]);
    
    // Package the app
    grunt.registerTask('package', [
        'compile',
        'clean:images',
        'copy:images',
        'responsive_images',
        'prototype'
    ]);
    
    // Run asset linting and tests
    grunt.registerTask('test', [
        'jshint',
        'scsslint'
    ]);
    
    // Run asset linting and tests
    grunt.registerTask('ship', [
        'package',
        'test',
        'compress:images'
    ]);
    
    /**
     * Compress Images
     * 
     * The TinyPNG API only allows us so many compressions, so use 
     * liberally. Warning: This is a fairly heafty task
     */
    grunt.registerTask('compress:images', [
        'tinypng'
    ]);

}; // function(grunt)