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
    return gulp.src(['node_modules/bootstrap/dist/js/*.min.js'])
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

/***********************************************************************
****************************** JQUERY *********************************
***********************************************************************/
// Ruta compilación FontAwesome
var  jq   = lbs+'jquery/';

// Moviendo las fuentes
gulp.task('jq', function() {
  return gulp.src('node_modules/jquery/dist/*.min.js')
    .pipe(gulp.dest(jq))
})

/***********************************************************************
*************************** BOOTSTRAP MATERIAL *************************
***********************************************************************/
// Ruta compilación Bootstrap Material Design
var  bmd_css = lbs+'bootstrap-material-design/css/';
var  bmd_js  = lbs+'bootstrap-material-design/js/';

// Copiando
gulp.task('bmd_sass', function() {
    return gulp.src(['node_modules/bootstrap-material-design/dist/css/*.min.css'])
        .pipe(gulp.dest(bmd_css))
});

// Copiando los archivos Js
gulp.task('bmd_js', function() {
    return gulp.src(['node_modules/bootstrap-material-design/dist/js/*.min.js'])
        .pipe(gulp.dest(bmd_js))
});


/***********************************************************************
****************************** Tether  *********************************
***********************************************************************/
//Ruta compilación Theter
var  tt_css = lbs+'tether/css';
var  tt_js  = lbs+'tether/js';

// Copiando
gulp.task('tt_css', function() {
    return gulp.src(['node_modules/tether/dist/css/*.min.css'])
        .pipe(gulp.dest(tt_css))
});

// Copiando los archivos Js
gulp.task('tt_js', function() {
    return gulp.src(['node_modules/tether/dist/js/*.min.js'])
        .pipe(gulp.dest(tt_js))
});


/***********************************************************************
********************** Popper.js UMD  *********************************
***********************************************************************/
// Ruta compilación Popper.js
var  ps = lbs+'popper.js';

// Copiando los archivos Js
gulp.task('ps', function() {
    return gulp.src(['node_modules/popper.js/dist/umd/*.min.js'])
        .pipe(gulp.dest(ps))
});

/***********************************************************************
****************************** EXAMPLE  *********************************
***********************************************************************/
// Ruta compilación Popper.js
// var  ps = lbs+'popper.js';

// Copiando los archivos Js
// gulp.task('ps', function() {
//     return gulp.src(['node_modules/popper.js/dist/*.min.js'])
//         .pipe(gulp.dest(ps))
// });



gulp.task('run', ['sass','js', 'fa', 'jq', 'fa_fonts','bmd_sass','bmd_js','tt_css','tt_js','ps']);