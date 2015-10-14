module.exports = function(grunt) {

    grunt.initConfig({
		
        pkg: grunt.file.readJSON('package.json'),

        concat: {   
            dist: {
                src: [
                    // Vendor					
                    'app/vendor/Modular/modular.js',
                    'app/vendor/Owl-Carousel/owl-carousel.js',
                    
                    // Plugins					
                    'app/plugins/*.js',
                    
                    // Includes
                    'app/includes/*.js',
                    
                    // Elements
                    'app/modules/elements/*/*.js',
                    
                    // Objects					
                    'app/modules/objects/*/*.js'
                    
                    // Themes
                ],
                dest: 'app/compiled/scripts/app.js',
            }
        },
		
        uglify: {
            build: {
                src: 'app/compiled/scripts/app.js',
                dest: 'app/compiled/scripts/app.min.js'
            },
            Modernizr: {
                src: 'app/vendor/Modernizr/modernizr.js',
                dest: 'app/compiled/scripts/modernizr.min.js'
            }
        },
        
        sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'app/compiled/styles/app.css': 'app/app.scss'
                }
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
        },
        
        run_grunt: {
            Modernizr: {
                //task: ['clean', 'jshint:strictTarget', 'mocha:subTarget'],
                //src: ['app/vendor/Modernizr/Gruntfile.js']
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks("grunt-modernizr");
    grunt.loadNpmTasks('grunt-run-grunt');

    grunt.registerTask('default', ['concat', 'uglify', 'sass', 'watch']);

};