// const browserSync = require('browser-sync').create();
const gulp  = require('gulp');
const sass  = require('gulp-sass');

// Ruta de las librerias
var  lbs   = 'public/libs/';

/***********************************************************************
****************************** BOOTSTRAP *******************************
***********************************************************************/
// Ruta compilación Bootstrap 4
var  b_css = lbs+'bootstrap4/css/';
var  b_js  = lbs+'bootstrap4/js/';

// Compilando sass de Bootstrap
gulp.task('sass', function() {
    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'])
        .pipe(sass())
        .pipe(gulp.dest(b_css))
});

// Moviendo los archivos Js
gulp.task('js', function() {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/tether/dist/js/tether.min.js'])
        .pipe(gulp.dest(b_js))
        // .pipe(browserSync.stream());
});

/***********************************************************************
*************************** FONT AWESOME  ******************************
***********************************************************************/
// Ruta compilación FontAwesome
var  fa_css   = lbs+'font-awesome/css/';
var  fa_fonts = lbs+'font-awesome/fonts/';

// Moviendo las fuentes
gulp.task('fa_fonts', function() {
  return gulp.src('node_modules/font-awesome/fonts/*')
    .pipe(gulp.dest(fa_fonts))
})

// Moviendo los archivos css
gulp.task('fa', function() {
  return gulp.src('node_modules/font-awesome/css/font-awesome.min.css')
    .pipe(gulp.dest(fa_css))
})

gulp.task('run', ['sass','js', 'fa', 'fa_fonts']);