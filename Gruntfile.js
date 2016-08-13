/******************************************************************
 * Kayzen
 * Grunt Setup
 * @uthor Edmund Reed | @esr360
 ******************************************************************/

module.exports = function(grunt) {

    // Allows the passing of multiple flags on the command line
    require('nopt-grunt-fix')(grunt);
    
    /**************************************************************
     * Config
     *************************************************************/

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
    
    /**************************************************************
     * Packages
     *************************************************************/
        
    grunt.initConfig({
		
        pkg: grunt.file.readJSON('package.json'),

        /**
         * Clean
         * @see https://github.com/gruntjs/grunt-contrib-clean
         */
        clean: {
            options: { 
                force: true 
            },
            app: {
                src: [
                    'app/*', 
                    '!app/themes/**', 
                    '!app/images/**'
                ]
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
            },
            release: {
                src: '../releases/' + version
            },
            stockAssets: [
                '../releases/' + version + '/dev/assets/images/demo',
                '../releases/' + version + '/prod/app/images/demo',
            ]
        },
        
        /**
         * Copy
         * @see https://github.com/gruntjs/grunt-contrib-copy
         */
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
            },
            release: {
                files: [
                    {
                        cwd: 'assets',
                        src: ['**/*', '!vendor/**'],
                        dest: '../releases/' + version + '/dev/assets',
                        expand: true
                    },
                    {
                        cwd: 'builder/dist',
                        src: '**/*',
                        dest: '../releases/' + version + '/dev/builder/dist',
                        expand: true
                    },
                    {
                        cwd: 'templates',
                        src: '**/*',
                        dest: '../releases/' + version + '/dev/templates',
                        expand: true
                    },
                    {
                        src: [
                            'Gruntfile.js', 
                            'package.json'
                        ],
                        dest: '../releases/' + version + '/dev',
                        expand: true,
                        flatten: true
                    },
                    {
                        cwd: 'prototype',
                        src: '**/*',
                        dest: '../releases/' + version + '/prod',
                        expand: true
                    },
                    {
                        cwd: 'docs',
                        src: [
                            'assets/**', 
                            'index.html',
                            'changelog.html'
                        ],
                        dest: '../releases/' + version + '/docs',
                        expand: true
                    },
                    {
                        src: 'version.md',
                        dest: '../releases/' + version + '/'
                    }
                ]
            }
        },

        /**
         * Sass
         * @see https://github.com/sindresorhus/grunt-sass
         */
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

        /**
         * PostCSS
         * @see https://github.com/nDmitry/grunt-postcss
         */
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

        /**
         * CSS Min
         * @see https://github.com/gruntjs/grunt-contrib-cssmin
         */
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

        /**
         * Concat
         * @see https://github.com/gruntjs/grunt-contrib-concat
         */
        concat: {   
            app: {
                src: _scripts,
                dest: themeBuildScripts + 'app.js',
            }
        },
        
        /**
         * Uglify
         * @see https://github.com/gruntjs/grunt-contrib-uglify
         */
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
        
        /**
         * Scss Lint
         * @see https://github.com/ahmednuaman/grunt-scss-lint
         */
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
        
        /**
         * JS-Hint
         * @see https://github.com/gruntjs/grunt-contrib-jshint
         */
        jshint: {
            app: [
                'Gruntfile.js', 
                'assets/includes/**/*.js',
                'assets/modules/**/*.js',
                'assets/themes/**/*.js'
            ]
        },
        
        /**
         * TinyPNG
         * @see https://github.com/marrone/grunt-tinypng
         */
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

        /**
         * Responsive Images
         * @see https://github.com/andismith/grunt-responsive-images
         */
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
      
        /**
         * Text Replace
         * @see https://github.com/yoniholmes/grunt-text-replace
         */
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
            },
            /**
             * On windows, one of the Grunt tasks fails due to the 
             * configuration, so we fix the value
             * @see https://git.io/v6uQI
             */
            mooTools_windows: {
                src: 'assets/vendor/MooTools-Core/.eslintrc',
                overwrite: true, 
                replacements: [{
                    from: 'linebreak-style: [2, unix]',
                    to:   'linebreak-style: [2, windows]'
                }]
            },
            mooTools_reset: {
                src: 'assets/vendor/MooTools-Core/.eslintrc',
                overwrite: true, 
                replacements: [{
                    from: 'linebreak-style: [2, windows]',
                    to:   'linebreak-style: [2, unix]'
                }]
            }
        },
        
        /**
         * Watch
         * @see https://github.com/gruntjs/grunt-contrib-watch
         */
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
        
        /**
         * Set PHP Constant
         * @see https://github.com/pajtai/grunt-php-set-constant
         */
        setPHPConstant: {
            multiThemes: {
                constant    : 'multiThemes',
                value       : multiThemes,
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

        /**
         * PHP 2 HTML
         * @see https://github.com/bezoerb/grunt-php2html
         */
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

        /**
         * Relative Root
         * @see https://github.com/hurrymaplelad/grunt-relative-root
         */
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

        /**
         * Notify
         * @see https://github.com/dylang/grunt-notify
         */
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

        /**
         * Auto-Install
         * @see https://github.com/Manabu-GT/grunt-auto-install
         */
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

        /**
         * Run-Grunt
         * @see https://github.com/Bartvds/grunt-run-grunt
         */
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
    
    /**************************************************************
     * Load NPM Tasks
     *************************************************************/
    
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
    grunt.loadNpmTasks('grunt-relative-root');
    grunt.loadNpmTasks('grunt-responsive-images');
    grunt.loadNpmTasks('grunt-run-grunt');
    grunt.loadNpmTasks('grunt-scss-lint');
    grunt.loadNpmTasks('grunt-text-replace');
    grunt.loadNpmTasks('grunt-tinypng');
    
    /**************************************************************
     * Tasks
     *************************************************************/

    /* Task Helpers
     *************************************************************/

    // Setup Project
    var gruntSetup = function() {
        var assetTasks = [];
        if (process.platform === 'win32') {
             assetTasks.push('replace:mooTools_windows');
        };
        assetTasks.push(
            'auto_install',
            'run_grunt'
        );
        if (process.platform === 'win32') {
             assetTasks.push('replace:mooTools_reset');
        };
        return assetTasks;
    };
    
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
            'setPHPConstant:multiThemes',
            'setPHPConstant:theme',
            'setPHPConstant:path',
            'setPHPConstant:realm'
        ];
        return assetTasks.concat(backendTasks);
    };

    /*Register Tasks
     *************************************************************/
    
    //Default
    grunt.registerTask('default', [
        'compile',
        'notify:app',
        'watch',
    ]);
       
    // Initial Setup
    grunt.registerTask('setup',
        gruntSetup()
    );
    
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
        'setPHPConstant:realm',
        'templates',
        'copy:prototype',
        'relativeRoot',
        'replace:prototype'
    ]);
    
    // Package the app
    grunt.registerTask('package', [
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
    
    // Create a new release
    grunt.registerTask('release', [
        'setPHPConstant:dev',
        'clean:release',
        'copy:release',
        'clean:stockAssets'
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

    /**
     * Build and release kayzen:
     * 
     * $ for theme in Agenda Arndale Blizzard Coffee Dart Gaucho Hollywood Kayzen Lily Mall Nexus Tempus ; do grunt compile --env=dev --theme=$theme ; done
     * $ grunt prototype --realm=live
     * $ grunt release --tag=1.2.0
     */

};