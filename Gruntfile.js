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
			}
		},
		
		imagemin: {
			dynamic: {
				files: [{
					expand: true,
					cwd: 'images/',
					src: ['**/*.{png,jpg,gif}'],
					dest: 'app/images/build/'
				}]
			}
		}

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-imagemin');

    grunt.registerTask('default', ['concat', 'uglify', 'imagemin']);

};