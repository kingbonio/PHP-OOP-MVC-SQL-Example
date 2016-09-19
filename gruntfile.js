module.exports = function(grunt) {
  // time
  require('time-grunt')(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        // If you can't get source maps to work, run the following command in your terminal:
        // $ sass scss/foundation.scss:css/foundation.css --sourcemap
        // (see this link for details: http://thesassway.com/intermediate/using-source-maps-with-sass )
        sourceMap: true
      },
      dist: {
        options: {
          outputStyle: 'expanded'
        },
        files: {
          'css/styles.css' : 'scss/styles.scss'
        }
      }
    },
    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          'css/styles.min.css': ['css/styles.css']
        }
      }
    },
    watch: {
      sass: {
        files: 'scss/*.scss',
        tasks: ['sass']
      },
      css: {
        files: 'css/styles.css',
        tasks: ['cssmin']
      },
       all: {
        files: '**/*.*'
      }
    }
  });
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['sass','cssmin','watch']);

}