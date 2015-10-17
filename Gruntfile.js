module.exports = function(grunt) {

    grunt.initConfig({
		
        pkg: grunt.file.readJSON('package.json'),

        concat: {   
            dist: {
                src: [
                    // Vendor					
                    'app/vendor/Modular/src/modular.js',
                    'app/vendor/Owl-Carousel/src/js/owl.carousel.js',
                    'app/vendor/Owl-Carousel/src/js/owl.animate.js',
                    'app/vendor/Owl-Carousel/src/js/owl.autoheight.js',
                    'app/vendor/Owl-Carousel/src/js/owl.autoplay.js',
                    'app/vendor/Owl-Carousel/src/js/owl.compiled.js',
                    'app/vendor/Owl-Carousel/src/js/owl.hash.js',
                    'app/vendor/Owl-Carousel/src/js/owl.lazyload.js',
                    'app/vendor/Owl-Carousel/src/js/owl.navigation.js',
                    'app/vendor/Owl-Carousel/src/js/owl.video.js',
                    
                    // Plugins					
                    'app/plugins/*.js',
                    
                    // Includes
                    'app/includes/*.js',
                    
                    // Elements
                    'app/modules/elements/**/*.js',
                    
                    // Objects					
                    ['app/modules/objects/**/*.js', '!app/modules/objects/google-map/google-map.js']
                    
                    // Themes
                ],
                dest: 'app/build/scripts/app.js',
            }
        },
		
        uglify: {
            build: {
                src: 'app/build/scripts/app.js',
                dest: 'app/build/scripts/app.min.js'
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
        
        copy: {
            jQuery: {
              files: [{
                  src: 'app/vendor/jQuery/dist/jquery.min.js',
                  dest: 'app/build/scripts/jquery.min.js'
              }]  
            },
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
            }
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
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-scss-lint');

    grunt.registerTask('default', [
        'concat',
        'uglify',
        'sass',
        'watch'
    ]);

};