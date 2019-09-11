'use strict';

var gulp = require('gulp'),
  sass = require('gulp-sass'),
  sourcemaps = require('gulp-sourcemaps');

// Drupal theme directory.
var themeDir = '.';

// Gulp tasks.
gulp.task('sass', function () {
  return gulp.src(themeDir + '/sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
      includePaths: [
        'node_modules'     // 2
      ]
    }).on('error', sass.logError))
    .pipe(sourcemaps.write('../map/'))
    .pipe(gulp.dest(themeDir + '/css'));
});

gulp.task('watch', function() {
  gulp.watch(themeDir + '/sass/**/*.scss', gulp.series('sass'));
});


gulp.task('build', gulp.series('sass'));
gulp.task('default', gulp.series('sass'));
