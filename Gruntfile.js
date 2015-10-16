module.exports = function(grunt) {

    grunt.initConfig({
		
        pkg: grunt.file.readJSON('package.json'),

        concat: {   
            dist: {
                src: [
                    // Vendor					
                    'app/vendor/Modular/modular.js',
                    'app/vendor/Owl-Carousel/js/owl.carousel.js',
                    'app/vendor/Owl-Carousel/js/owl.animate.js',
                    'app/vendor/Owl-Carousel/js/owl.autoheight.js',
                    'app/vendor/Owl-Carousel/js/owl.autoplay.js',
                    'app/vendor/Owl-Carousel/js/owl.compiled.js',
                    'app/vendor/Owl-Carousel/js/owl.hash.js',
                    'app/vendor/Owl-Carousel/js/owl.lazyload.js',
                    'app/vendor/Owl-Carousel/js/owl.navigation.js',
                    'app/vendor/Owl-Carousel/js/owl.video.js',
                    
                    // Plugins					
                    'app/plugins/*.js',
                    
                    // Includes
                    'app/includes/*.js',
                    
                    // Elements
                    'app/modules/elements/**/*.js',
                    
                    // Objects					
                    'app/modules/objects/**/*.js'
                    
                    // Themes
                ],
                dest: 'app/build/scripts/app.js',
            }
        },

        modernizr: {
            dist: {
                "uglify" : false,
                "dest" : "app/build/scripts/modernizr.js"
            }
        },
		
        uglify: {
            build: {
                src: 'app/build/scripts/app.js',
                dest: 'app/build/scripts/app.min.js'
            },
            Modernizr: {
                src: 'app/build/scripts/modernizr.js',
                dest: 'app/build/scripts/modernizr.min.js'
            },
            sudojQueryStart: {
                src: 'app/vendor/sudojQuery/sudojQuery-start.js',
                dest: 'app/build/scripts/sudojQuery-start.min.js'
            },
            sudojQueryEnd: {
                src: 'app/vendor/sudojQuery/sudojQuery-end.js',
                dest: 'app/build/scripts/sudojQuery-end.min.js'
            }
        },
        
        sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'app/build/styles/app.css': 'app/app.scss'
                }
            },
            compressed: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'app/build/styles/app.min.css': 'app/app.scss'
                }
            } 
        },
        
        scsslint: {
            allFiles: [
                'app/app.scss',
            ],
            options: {
                colorizeOutput: true
            },
        },
  
        watch: {
            scripts: {
                files: ['**/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            },
            css: {
                files: ['**/*.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false,
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-scss-lint');
    grunt.loadNpmTasks("grunt-modernizr");

    grunt.registerTask('default', [
        'concat',
        'uglify',
        'sass',
        'watch'
    ]);

};