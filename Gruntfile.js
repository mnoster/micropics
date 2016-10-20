module.exports = function(grunt) {
    //Grunt is built with Underscore.js so much of the syntax is similar
    grunt.initConfig({
        // get the configuration info from package.json ----------------------------
        // this way we can use things like name and version (pkg.name)
        pkg: grunt.file.readJSON('package.json'),
    
        // all configurations
        // configation for uglify to minify js files -------------------------------------
        uglify: {
            options: {
                banner: '/*\n <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> \n*/\n'
            },
            build: {
                files: {
                    'builds/js/main.min.js': 'src/js/main.js'
                }
            }
        },
        //LESS
        less: {
            build: {
                files: {
                    'builds/css/style.css': 'src/css/pre-style.less'
                }
            }
        },
        // configuration cssmin to minify css files ------------------------------------
        cssmin: {
            options: {
                banner: '/*\n <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> \n*/\n'
            },
            build: {
                files: {
                    'builds/css/style.min.css': 'src/css/style.css'
                }
            }
        },
        // configure jshint to validate js files -----------------------------------
        jshint: {
            options: {
                reporter: require('jshint-stylish') // use jshint-stylish to make our errors look and read good
            },

            // when this task is run, lint the Gruntfile and all js files in src
            build: ['Gruntfile.js', 'src/**/*.js']
        },
        //KARMA ANGULAR UNIT TESTING
        karma: {
            unit: {
                configFile: 'karma.conf.js'
            }
        }
    });
    //DEFAULT TASKS
    // ============= // CREATE TASKS ========== //
    grunt.registerTask('default', ['jshint', 'uglify', 'cssmin', 'less','karma']);

    // LOAD GRUNT PLUGINS ========================================================
    // we can only load these if they are in our package.json
    // make sure you have run npm install so our app can find these
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-karma');
};

