module.exports = function(grunt) {

  // load all grunt tasks
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  grunt.initConfig({

    uglify: {
      my_target: {
         files: {
          'public/resources/js/base.min.js': ['public/resources/js/dir/*.js']
        }
      }
    },
    
    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'compressed'
        },
        files: {                         // Dictionary of files
          'public/resources/css/base.min.css': 'public/resources/css/sass/master-home.scss', 
          'public/resources/css/overview.min.css': 'public/resources/css/sass/master-overview.scss',
          'public/resources/css/404.min.css': 'public/resources/css/sass/404.scss',
        }
      }
    },

    watch: {
      sass: {
        files: ['public/resources/css/sass/*.scss'],
        tasks: ['sass']
      },
      /* watch and see if our javascript files change, or new packages are installed */
      js: {
        files: ['public/resources/js/dir/*.js'],
        tasks: ['uglify']
      },
    }

  });

  grunt.registerTask('default', ['watch']);

}