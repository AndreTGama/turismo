const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

gulp.task('sass', function () {
  return gulp.src('assets/scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('assets/dist/css'));
});


gulp.task('watch', function () {
  gulp.watch('assets/scss/*.scss', gulp.series('sass'));
});

gulp.task('build', gulp.series('sass'));

gulp.task('default', gulp.series('watch'));