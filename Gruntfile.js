//Gruntfile
module.exports = function(grunt) {

//Initializing the configuration object
grunt.initConfig({

    // Paths variables
    paths: {
      // Development where put SASS files, etc
      assets: {
        css: './public/assets/stylesheets/',
        js: './public/assets/javascripts/',
        vendor: './public/assets/vendor/'
      },
      // Production where Grunt output the files
      css: './public/css/',
      js: './public/js/'

    },

    concat: {
      options: {
          separator: ';',
      },
      js_header: {
          src: [
              '<%= paths.assets.vendor %>modernizr/modernizr.js',
              '<%= paths.assets.js %>custom.js'
          ],
          dest: '<%= paths.js %>expanded/scripts_header.js',
      },
      js_footer: {
          src: [
              '<%= paths.assets.vendor %>jquery/dist/jquery.js',
              '<%= paths.assets.vendor %>jquery.cookie/jquery.cookie.js',
              '<%= paths.assets.vendor %>jquery.placeholder/jquery.placeholder.js',
              '<%= paths.assets.vendor %>fastclick/lib/fastclick.js',
              '<%= paths.assets.vendor %>foundation/js/foundation.js'
          ],
          dest: '<%= paths.js %>expanded/scripts_footer.js',
      }
  },
    // Task configuration
    sass: {
      css: {
        options: {
            style: 'compressed',
            compass: true
        },
        // This will get all the scss files in /public/assets/stylesheets
        files: [{
            expand: true,
            cwd: '<%= paths.assets.css %>',
            src: '**/*.scss',
            dest: '<%= paths.css %>',
            ext: '.css'
        }]
      }
    },

    uglify: {
      options: {
          // Grunt can replace variables names, but may not be a good idea for you, I leave
          // this option as false
          mangle: false
      },
      js: {
          // Grunt will search for "**/*.js" when the "minify" task
          // runs and build the appropriate src-dest file mappings then, so you
          // don't need to update the Gruntfile when files are added or removed.
          files: [{
              expand: true,
              cwd: '<%= paths.js %>',
              src: '**/*.js',
              dest: '<%= paths.js %>min',
              ext: '.min.js',
          }],
      }
  },

    phpunit: {
        classes: {
            dir: 'tests'   //location of the tests
        },
        options: {
            bin: 'vendor/bin/phpunit',
            colors: true
        }
    }

});


// Plugin loading
grunt.loadNpmTasks('grunt-contrib-compass');
grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-contrib-concat');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-phpunit');
// Task definition

grunt.registerTask('default', ['sass', 'concat', 'uglify', 'phpunit']);
};
