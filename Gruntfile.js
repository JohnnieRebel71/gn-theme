module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.initConfig({ pkg: grunt.file.readJSON('package.json'),
  less: {
    development : {
      options: {
      paths: 'stylesheets/less',
      yuicompress: true
      },
  files: {
  'stylesheets/layout.css': 'stylesheets/layout.less'
  }
  }
  },
  watch: {
    less: {
    files: 'stylesheets/*.less',
    tasks: 'less'
    }
  }
 });
}
