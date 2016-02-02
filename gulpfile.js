var gulp = require('gulp');
var rename = require('gulp-rename');
var minifyCss = require('gulp-minify-css');
var merge = require('merge-stream');
//var livereload = require('gulp-livereload');

var project = "./*";
var bootstrap = "./bower_components/bootstrap/less/bootstrap.css";
var main = "./assets/css/main.css";
var less = "./assets/css/*.less";


gulp.task('minify-css', function() {
    var miniBootstrap = gulp.src(bootstrap)
        .pipe(rename('bootstrap.min.css'))
        .pipe(minifyCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('./assets/css'));

    var miniMain = gulp.src(main)
        .pipe(rename('main.min.css'))
        .pipe(minifyCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('./assets/css'));

    return merge(miniBootstrap, miniMain);
});

gulp.task('default', function(){
    gulp.watch(project, ['minify-css']);
    gulp.watch(less, ['minify-css']);
});