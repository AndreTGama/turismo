const gulp = require('gulp');
const sass = require('gulp-sass')(require('node-sass'));
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const packageJson = require('./package.json');

// Configuração
const paths = {
  srcSass: 'sass/**/*.scss',
  destCss: 'dist/css',
  srcJs: 'js/**/*.js',
  destJs: 'dist/js',
  srcImages: 'images/**/*', // Adicione o caminho para a pasta de imagens
  destImages: 'dist/images', // Pasta de destino para imagens
  srcSvg: 'svg/**/*', // Adicione o caminho para a pasta de SVG
  destSvg: 'dist/svg', // Pasta de destino para SVG
  srcVideo: 'video/**/*', // Adicione o caminho para a pasta de vídeo
  destVideo: 'dist/video', // Pasta de destino para vídeo
  destFonts: 'dist/fonts',
  srcFonts: 'fonts/**',
};

// Tarefa para compilar o Sass
gulp.task('sass', () => {
  return gulp.src(paths.srcSass)
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest(paths.destCss));
});

// Tarefa para minificar o CSS
gulp.task('minify-css', () => {
  return gulp.src(`${paths.destCss}/*.css`)
    .pipe(cleanCSS())
    .pipe(gulp.dest(paths.destCss));
});

// Tarefa para consolidar e minificar os arquivos JavaScript
gulp.task('js', () => {
  return gulp.src(paths.srcJs)
    .pipe(concat('paraty-turismo.js'))
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(paths.destJs));
});

// Tarefa para copiar imagens para a pasta de destino
gulp.task('copy-images', () => {
  return gulp.src(paths.srcImages)
    .pipe(gulp.dest(paths.destImages));
});

// Tarefa para copiar SVG para a pasta de destino
gulp.task('copy-svg', () => {
  return gulp.src(paths.srcSvg)
    .pipe(gulp.dest(paths.destSvg));
});

// Tarefa para copiar vídeos para a pasta de destino
gulp.task('copy-video', () => {
  return gulp.src(paths.srcVideo)
    .pipe(gulp.dest(paths.destVideo));
});

// Tarefa para copiar fonts para a pasta de destino
gulp.task('fonts', () => {
  return gulp.src(paths.srcFonts)
    .pipe(gulp.dest(paths.destFonts));
});

// Tarefa para observar mudanças nos arquivos Sass, aplicar a minificação e compilar/mimificar os arquivos JavaScript
gulp.task('watch', () => {
  gulp.watch(paths.srcSass, gulp.series('sass', 'minify-css'));
  gulp.watch(paths.srcJs, gulp.series('js'));
  gulp.watch(paths.srcImages, gulp.series('copy-images'));
  gulp.watch(paths.srcSvg, gulp.series('copy-svg'));
  gulp.watch(paths.srcVideo, gulp.series('copy-video'));
  gulp.watch(paths.srcFonts, gulp.series('fonts'));
});

// Tarefa padrão
gulp.task('default', gulp.series('sass', 'minify-css', 'js', 'copy-images', 'copy-svg', 'copy-video', 'fonts', 'watch'));

