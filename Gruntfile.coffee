module.exports = (grunt) ->

  # make sure bower config is tip top
  grunt.file.write ".bowerrc", '{"directory": "assets/_vendor"}'

  # load modules
  grunt.loadNpmTasks "grunt-contrib-less"
  grunt.loadNpmTasks "grunt-contrib-watch"
  grunt.loadNpmTasks "grunt-svg2png"
  grunt.loadNpmTasks "grunt-contrib-imagemin"
  # grunt.loadNpmTasks "grunt-grunticon"
  # grunt.loadNpmTasks "grunt-ftp-deploy"

  
  # Set tasks
  grunt.registerTask "default", ["less", "watch"]
  grunt.registerTask "sprite", ["imagemin:sprite","grunticon","less"]
  # grunt.registerTask 'deploy', ['ftp-deploy:production_quick']
  # grunt.registerTask 'fulldeploy', ['ftp-deploy:production_full']

  # Config
  grunt.initConfig

    pkg: grunt.file.readJSON "package.json"

    less:
      cssmin:
        options:
          cleancss: true
          compress: true
          sourceMap: true
          sourceMapFilename: "main.min.css.map"
          sourceMapRootpath: "/"
        files:
          "assets/css/main.min.css": [
            "assets/_source/less/main.less"
          ]

#    grunticon:
#      options:
#        template: 'assets/_source/sprite/grunticon/template.hbs'
#        cssprefix: '.sprite-'
#        datasvgcss: '../_source/less/sprite/data.svg.less';
#        datapngcss: '../_source/less/sprite/data.png.less';
#      sprite:
#        files: [
#          expand: true,
#          cwd: 'assets/_source/sprite/src'
#          src: ['*.svg','*.png']
#          dest: "assets/sprite"
#        ]

    imagemin:
      img:
        files: [
          expand: true
          cwd: 'assets/images/'
          src: ['**/*.{png,jpg,gif,svg}']
          dest: 'assets/images/'
        ]
#      sprite:
#        files: [
#          expand: true
#          cwd: 'assets/_source/sprite/src'
#          src: ['*.{png,svg}']
#          dest: 'assets/_source/sprite/src'
#        ]

    svg2png:
      img:
        files: [ 
          src: ['assets/images/**/*.svg']
        ]

    watch:
      css:
        files: ['assets/_source/less/**/*.less']
        tasks: ['less']
      imgsvgs:
        files: ["assets/images/**/*.svg"]
        tasks: ["svg2png:img",'imagemin:img']
#      sprite:
#        f#iles: ['assets/_source/sprite/src/*.svg']
#        tasks: ['sprite']

#    'ftp-deploy':
#      production_full:
#        forceVerbose: true
#        auth:
#          host: 'ftp.stynta.com'
#          port: 21
#          authKey: 'aafw'
#        src: './',
#        dest: '/www',
#        exclusions: [
#          '.DS_Store*'
#          './.bowerrc'
#          './.ftppass'
#          './.gitignore'
#          './.git'
#          './.gitmodules'
#          './bower.json'
#          './Gruntfile.coffee'
#          './package.json'
#          './panel/.git'
#          './kirby/.git'
#          './kirby/test'
#          './content/*'
#          './thumbs/*'
#          './assets/_source'
#          './assets/_vendor'
#          './node_modules'
#        ]
#      production_quick:
#        forceVerbose: true
#        auth:
#          host: 'ftp.stynta.com'
#          port: 21
#          authKey: 'aafw'
#        src: './',
#        dest: '/www',
#        exclusions: [
#          '.DS_Store*'
#          './.bowerrc'
#          './.ftppass'
#          './.gitignore'
#          './.git'
#          './.gitmodules'
#          './bower.json'
#          './Gruntfile.coffee'
#          './package.json'
#          './panel/.git'
#          './kirby/.git'
#          './kirby/test'
#          './content/*'
#          './thumbs/*'
#          './assets/_source'
#          './assets/_vendor'
#          './node_modules'
#          './kirby'
#          './panel'
#        ]
#