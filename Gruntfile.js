//=================================================================
// Kayzen - Grunt Setup
//=================================================================

module.exports = function(grunt) {

    //-------------------------------------------------------------
    // Config
    //-------------------------------------------------------------

    // Built Asset Paths
    var buildScripts = 'app/build/scripts/';
    var buildStyles  = 'app/build/styles/';

    // Owl Carousel
    var _owlPath = 'app/vendor/Owl-Carousel/src/js/'; 
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

    // App Scripts
    var _scripts = [   
        _owl,
        'app/vendor/Modular/src/modular.js',
        'app/vendor/jquery-animateNumber/jquery.animateNumber.js',
        'app/vendor/Kayzen.ScrollSpy/Kayzen.ScrollSpy.js',
        'app/vendor/ScrollTrigger/src/ScrollTrigger.js',
        'app/vendor/Stellar/src/jquery.stellar.js',
        'app/vendor/TweeCool/src/tweecool.js',
        'app/includes/*.js',
        'app/modules/elements/**/*.js',
        ['app/modules/objects/**/*.js', '!app/modules/objects/google-map/google-map.js'],
        'app/themes/**/*.js'
    ];

    //-------------------------------------------------------------
    // Tasks
    //-------------------------------------------------------------
        
    grunt.initConfig({
		
        pkg: grunt.file.readJSON('package.json'),
      
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
        // Uglify
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
		
        uglify: {
            app: {
                src: _scripts,
                dest: buildScripts + 'app.min.js'
            },
            sudojQueryStart: {
                src: 'app/vendor/sudojQuery/src/sudojQuery-start.js',
                dest: buildScripts + 'sudojQuery-start.min.js'
            },
            sudojQueryEnd: {
                src: 'app/vendor/sudojQuery/src/sudojQuery-end.js',
                dest: buildScripts + 'sudojQuery-end.min.js'
            },
            Masonry: {
                src: 'app/vendor/Masonry/dist/masonry.pkgd.js',
                dest: buildScripts + 'masonry.pkgd.min.js'
            },
            infiniteScroll: {
                src: 'app/vendor/Infinite-AJAX-Scroll/dist/jquery-ias.js',
                dest: buildScripts + 'jquery-ias.min.js'
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
                    [buildStyles + 'app.css']: 'app/app.scss'
                }
            },
            prod: {
                options: {
                    style: 'compressed',
                    sourcemap: 'none'
                },
                files: {
                    [buildStyles + 'app.min.css']: 'app/app.scss'
                }
            } 
        },
        
        //---------------------------------------------------------
        // PostCSS
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
      
        postcss: {
            options: {
                map: true,
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
                'app/app.scss',
            ],
            options: {
                colorizeOutput: true
            },
        },
      
        //---------------------------------------------------------
        // Copy
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
        
        copy: {
            fontAwesome: {
                files: [{
                    cwd: 'app/vendor/Font-Awesome/fonts',
                    src: '**/*',
                    dest: 'app/build/fonts',
                    expand: true
                }]
            },
            dev: {
                files: [
                    {
                        src: 'app/vendor/jQuery/dist/jquery.js',
                        dest: buildScripts + 'jquery.js'
                    },
                    {
                        src: 'app/vendor/sudojQuery/src/sudojQuery-start.js',
                        dest: buildScripts + 'sudojQuery-start.js'
                    },
                    {
                        src: 'app/vendor/sudojQuery/src/sudojQuery-end.js',
                        dest: buildScripts + 'sudojQuery-end.js'
                    },
                    {
                        src: 'app/vendor/Masonry/dist/masonry.pkgd.js',
                        dest: buildScripts + 'masonry.pkgd.js'
                    },
                    {
                        src: 'app/vendor/Infinite-AJAX-Scroll/dist/jquery-ias.js',
                        dest: buildScripts + 'jquery-ias.js'
                    }
                ]
            },
            prod: {
                files: [
                    {
                        src: 'app/vendor/jQuery/dist/jquery.min.js',
                        dest: buildScripts + 'jquery.min.js'
                    }
                ]
            }
        },
        
        //-----------------------------------------------------
        // Clean
        // https://github.com/gruntjs/grunt-contrib-clean
        //-----------------------------------------------------
    
        clean: {
            build: {
                src: 'app/build'
            }
        },
      
        //---------------------------------------------------------
        // Watch
        // https://github.com/sindresorhus/grunt-sass
        //---------------------------------------------------------
  
        watch: {
            scripts: {
                files: _scripts,
                tasks: ['concat', 'uglify', 'notify:scripts'],
                options: {
                    spawn: false,
                },
            },
            css: {
                files: [
                    'app/includes/*.scss',
                    'app/modules/**/*.scss'
                ],
                tasks: ['sass', 'postcss', 'notify:css'],
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
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-scss-lint');
    grunt.loadNpmTasks('grunt-notify');
    grunt.loadNpmTasks('grunt-php-set-constant');
    
    //-------------------------------------------------------------
    // Register Tasks
    //-------------------------------------------------------------
    
    grunt.registerTask('compile:dev', [
        'setPHPConstant:dev',
        'clean',
        'copy:fontAwesome',
        'concat',
        'sass:dev',
        'postcss',
        'copy:dev',
        'notify:app'
    ]);
    
    grunt.registerTask('compile:prod', [
        'setPHPConstant:prod',
        'clean',
        'copy:fontAwesome',
        'uglify',
        'sass:prod',
        'postcss',
        'copy:prod',
        //'scsslint',
        'notify:app'
    ]);

    grunt.registerTask('default', [
        'compile:dev',
        'watch',
        'postcss:dist'
    ]);

}; // function(grunt)