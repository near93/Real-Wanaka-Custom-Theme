module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      dist: {
        files: {
          'css/style.css' : 'scss/style.scss'
        }
      }
    },

    compass: {
      dist: {
        options: {
          config: 'config.rb',
          outputStyle: 'compact'

        }
      }
    },

    uglify: {
      my_target: {
        files: {
          'js/main.min.js': ['js/main.js']
        }
      }
    },

    watch: {
      css: {
        files: ['*.php', 'scss/*.scss', 'template-parts/*.php'],
        tasks: ['sass', 'compass', 'uglify']
      },
       scripts: {
        files: ['js/*.js']
      }
    }

  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  //grunt.registerTask('dev', ['sass', 'watch']);

};