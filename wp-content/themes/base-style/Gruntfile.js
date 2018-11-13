module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    jshint: {
      files: ['Gruntfile.js', 'src/**/*.js'],
      options: {
        globals: {
          jQuery: true,
          console: true,
          module: true,
          document: true
        }
      }
    },    

    // Convert Sass to CSS
    sass: {
      options: {
        sourceMap: true
      },

      dist: {
        options: { 
          noCache: true,
          lineNumbers: true
        },

        files: {
          'library/css/main.css': 'library/scss/main.scss'
        }
      }
    },    

    // Concatenate JS files
    concat: {
      options: {
        separator: ';',
      },

      dev: {
        src: ['library/js/_dev/**/*.js'],
        dest: 'library/js/dev.js',
      },

      vendor: {
        src: ['library/js/_vendor/**/*.js'],
        dest: 'library/js/vendor.js',
      }
    },

    // Minify JS
    uglify: {
      my_target: {
        files: {
          'library/js/dev.min.js' : 'library/js/dev.js',
          'library/js/vendor.min.js' : 'library/js/vendor.js'
        }
      }
    },

    // If a file changes run these functions
    watch: {

      css: {
        files: '**/*.scss',
        tasks: [
          'sass',
          'postcss'
        ],
        options: {
          livereload: true,
        },
      },

      jsDev: {
        files: 
          'library/js/_dev/**/*.js',
        tasks: [
          'concat:dev',
          'uglify'
        ],
        options: {
          livereload: true,
        },
      },

      jsVendor: {
        files: 
          'library/js/_vendor/**/*.js',
        tasks: [
          'concat:vendor',
          'uglify'
        ],
        options: {
          livereload: true,
        },
      }
    },

    // Run Autoprefixer and minify
    postcss: { 
      options: {
        map: true, // inline sourcemaps

        processors: [
          require('pixrem')(), // add fallbacks for rem units
          require('autoprefixer')({browsers: 'last 5 versions', grid: 'true'}), // add vendor prefixes
          require('cssnano')() // minify the result
        ]
      },

      dist: {
        src: 'library/css/main.css',
        dest: 'library/css/main.min.css'
      }
 
    }

  });

  grunt.loadNpmTasks('grunt-contrib-jshint');  
  grunt.loadNpmTasks('grunt-sass');  
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-postcss');

  grunt.registerTask('default', [
    'jshint',
    'sass',
    'concat',
    'uglify',
    'postcss',
    'watch'
  ]);
};
