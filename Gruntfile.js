module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		watch: {
			options: {
        		livereload: true,
    		},
			compass: {
				files: ['sass/**/*.scss'],
				tasks: ['compass:dev']
		 },
		 	js: {
				files: ['public_html/js/**/*.js'],
				tasks: ['uglify']
			}
		},
		compass: {
			dev: {
				options: {
					require: 'susy',              
					sassDir: 'sass',
					cssDir: 'public_html/css'
				}
			},
			prod: {
				options: {
					require: 'susy',                            
					sassDir: 'sass',
					cssDir: 'public_html/css',
					environment: 'production',
					outputStyle: 'compressed',
					relativeAssets: true
				}
		 	}
		},
		uglify: {
 			all: {
 				files: {
         		'public_html/js/build/style.min.js':     //output
         		['public_html/js/libs/jquery.js', 
         		'public_html/js/main.js']
     			}
 			}
 		},
 		autoprefixer: {
		    no_dest: {
      			src: 'public_html/css/style.css'
		 	}
		},
  		pixrem: {
    		options: {
      			rootvalue: '1rem'
    		},
    		dist: {
     			src: 'public_html/css/style.css',
      			dest: 'public_html/css/style.css'
    		}
    	},
    	cssmin: {	
    		files: {
      			'public_html/css/style.css': ['public_html/css/style.css']
    		}
  		}
	});

	// Load the plugin that provides the tasks.
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-pixrem');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-cssmin');



	// Default tasks.
	grunt.registerTask('default', ['uglify', 'compass:dev', 'watch']);

	// PROD BUILD
 	grunt.registerTask('prod', ['compass:prod', 'pixrem', 'autoprefixer','cssmin']);

};