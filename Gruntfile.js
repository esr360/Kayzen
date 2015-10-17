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
        'app/plugins/*.js',
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
                dest: 'app/build/scripts/sudojQuery-start.min.js'
            },
            sudojQueryEnd: {
                src: 'app/vendor/sudojQuery/src/sudojQuery-end.js',
                dest: 'app/build/scripts/sudojQuery-end.min.js'
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
                    style: 'compressed'
                },
                files: {
                    [buildStyles + 'app.min.css']: 'app/app.scss'
                }
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
            normalize: {
                files: [{
                    expand: true,
                    cwd: 'app/vendor/Normalize/',
                    src: ['normalize.css'],
                    dest: 'app/includes/',
                    rename: function(dest, src) {
                        return dest + src.replace(/\.css$/, ".scss");
                    }
                }]
            },
            dev: {
                files: [
                    {
                        src: 'app/vendor/jQuery/dist/jquery.js',
                        dest: 'app/build/scripts/jquery.js'
                    },
                    {
                        src: 'app/vendor/sudojQuery/src/sudojQuery-start.js',
                        dest: 'app/build/scripts/sudojQuery-start.js'
                    },
                    {
                        src: 'app/vendor/sudojQuery/src/sudojQuery-end.js',
                        dest: 'app/build/scripts/sudojQuery-end.js'
                    }
                ]
            },
            prod: {
                files: [
                    {
                        src: 'app/vendor/jQuery/dist/jquery.min.js',
                        dest: 'app/build/scripts/jquery.min.js'
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
                files: [
                    'app/modules/**/*.js'
                ],
                tasks: ['concat', 'uglify', 'notify:scripts'],
                options: {
                    spawn: false,
                },
            },
            css: {
                files: [
                    'app/modules/**/*.scss'
                ],
                tasks: ['sass', 'notify:css'],
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
    grunt.loadNpmTasks('grunt-notify');
    grunt.loadNpmTasks('grunt-scss-lint');
    
    //-------------------------------------------------------------
    // Register Tasks
    //-------------------------------------------------------------
    
    grunt.registerTask('compile:dev', [
        'clean',
        'concat',
        'copy:normalize',
        'sass:dev',
        'copy:dev'
    ]);
    
    grunt.registerTask('compile:prod', [
        'clean',
        'uglify', 
        'copy:normalize',
        'sass:prod',
        'copy:prod'
    ]);

    grunt.registerTask('default', [
        'compile:dev',
        'watch'
    ]);

}; // function(grunt)