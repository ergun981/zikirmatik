module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		sass: {
			dist: {
				options: {
					style: 'nested'
				},
				files: {
                    //'css/help/bootstrap.css': 'css/help/bootstrap/bootstrap.scss',
        			'css/main.css': 'css/main.scss'
      			}
			}
		},

		autoprefixer: {
			options: {
				browsers: ['last 2 version']
			},
			css: {
				src: 'css/main.css',
				dest: 'css/main.css'
			}
		},

		cssmin: {
			options: {
				report: 'min'
			},
			combine: {
				files: {
					'css/main.min.css': 'css/main.min.css'
				}
			}
		},

		concat: {
			js: {
				src: ['js/plugin/**/*.js'],
				dest: 'js/plugin.min.js'
			},
			css: {
				files: {
                    'css/main.min.css': ['css/help/bootstrap.css', 'css/help/font-awesome.css', 'css/main.css']
				}
			}
		},

		uglify: {
			options: {
				report: 'min'
			},
			build: {
				files: {
					'js/plugin.min.js': 'js/plugin.min.js',
					'js/main.min.js': 'js/main.js'
				}
			}
		},

		watch: {
			options: {
				livereload: true
			},
			js: {
				files: ['js/**/*.js'],
				tasks: ['concat:js', 'uglify'],
				options: {
					spawn: false
				}
			},
			css: {
				files: ['css/**/*.scss'],
				tasks: ['sass', 'autoprefixer', 'concat:css'],
				options: {
					spawn: false
				}
			},
			html:{
			    files: ['./**/*.html', './**/*.php'],
			    tasks: [],
			    options: {
			      	spawn: false
			    }
		  	}
		}

	});

	require('load-grunt-tasks')(grunt);

	grunt.registerTask('zip', ['sass', 'autoprefixer', 'concat', 'cssmin', 'uglify']);
	grunt.registerTask('default', ['watch']);

};