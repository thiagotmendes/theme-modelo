module.exports   = function(grunt){
    // inicia as configurações
    grunt.initConfig({
      // COMPILA E MINIFICA SASS
      sass: {
        options: {
          sourceMap: true,
          outputStyle: 'compressed'
        },
        dist: {
          files: {
          'assets/css/estilo.min.css': 'global/css/main.scss'
          }
        }
      },

      // MINIFICA O CSS
      cssmin: {
        options: {
          sourceMap: true,
          mergeIntoShorthands: false,
          roundingPrecision: -1
        },
        target: {
          files: {
            'assets/css/main.min.css':
              [
                'bower_components/bootstrap/dist/css/bootstrap.css',
                'bower_components/font-awesome/css/font-awesome.css',
                'bower_components/animate.css/animate.css',
                'bower_components/slick-carousel/slick/slick.css',
                'bower_components/slick-carousel/slick/slick-theme.css',
                'bower_components/bxslider-4/src/css/jquery.bxslider.css',
              ]
          }
        }
      },

      // COMPRIME/OTIMIZA AS IMAGENS
      smushit: {
        mygroup: {
          src: ['assets/images/*'],
          dest: 'assets/images'
        }
      },

      // CONCATENA E MINIFICA ARQUIVOS JS
      uglify: {
        my_target: {
          files: {
            'assets/js/main.min.js':
            [
              'bower_components/bootstrap/dist/js/bootstrap.js',
              'bower_components/slick-carousel/slick/slick.js',
              'bower_components/wow/dist/wow.js',
              'bower_components/isotope/dist/isotope.pkgd.js',
              'bower_components/bxslider-4/src/js/jquery.bxslider.js'
            ],
            'assets/js/funcoes.min.js': ['global/js/funcoes.js'],
          }
        }
      },

      // COPIA OS ARQUIVOS
      copy: {
        main: {
          files: [
            {expand: true,flatten: true, src: ['bower_components/font-awesome/fonts/*'], dest: 'assets/fonts/'},
            {expand: true,flatten: true, src: ['bower_components/bootstrap/fonts/*'], dest: 'assets/fonts/'},
            {expand: true,flatten: true, src: ['bower_components/slick-carousel/slick/fonts/*'], dest: 'assets/fonts/'},
            {expand: true,flatten: true, src: ['bower_components/slick-carousel/slick/ajax-loader.gif'], dest: 'assets/images'},
            {expand: true,flatten: true, src: ['bower_components/bxslider-4/src/images/*'], dest: 'assets/images'},
          ],
        },
      },

      // watch - acompanha as modificações nos arquivos deforma altomatica
       watch: {
         options:{
           livereload: true
         },
         sass: {
           files: 'global/css/*.scss',
           tasks: 'sass'
         },
         js: {
           files:'global/js/funcoes.js',
           tasks: 'uglify'
         }
       }
    });

    // carrega os plugins
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-smushit');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // registra as tasks
    grunt.registerTask('site', ['smushit','copy','cssmin', 'sass', 'uglify']);
    grunt.registerTask('live', ['watch']);
}
