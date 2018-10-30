var gulp = require('gulp');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var sass = require('gulp-sass');

// browser-sync tarea para lanzar el server .
gulp.task('browser-sync', function() {
    //watch files
    var files = [
        'CSS/base.css',
    ];

    //initialize browsersync
    browserSync.init(files, {
        //browsersync with a php server
        proxy: "localhost/Muestrario/index.html",
        notify: false
    });
});

// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
gulp.task('sass', function() {
    return gulp.src('CSS/*.scss')
            .pipe(sass())
            .pipe(gulp.dest('./CSS'))
            .pipe(reload({stream: true}));
});
// Default task to be run with `gulp`
gulp.task('default', ['sass', 'browser-sync'], function() {
    gulp.watch("CSS/Parciales/*.scss", ['sass']);
    gulp.watch("CSS/Mixins/*.scss", ['sass']);
    gulp.watch("CSS/Variables/*.scss", ['sass']);
    gulp.watch("CSS/*.scss", ['sass']);
});