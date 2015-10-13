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
    }
});

// Plugin loading
grunt.loadNpmTasks('grunt-contrib-compass');
grunt.loadNpmTasks('grunt-contrib-sass');
// Task definition

};
