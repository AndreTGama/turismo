const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

gulp.task('sass', function () {
  return gulp.src('assets/scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('assets/dist/css'));
});

gulp.task('css', function () {
  return gulp.src('assets/css/*.css')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('assets/dist/css'));
});

gulp.task('js', function () {
  return gulp.src('assets/js/*.js').pipe(gulp.dest('assets/dist/js'));
});

gulp.task('watch', function () {
  gulp.watch('assets/scss/*.scss', gulp.series('sass'));
  gulp.watch('assets/js/*.js', gulp.series('js'));
  gulp.watch('assets/css/*.css', gulp.series('css'));
});

gulp.task('build', gulp.parallel('sass', 'js', 'css'));
gulp.task('default', gulp.series('build', 'watch'));