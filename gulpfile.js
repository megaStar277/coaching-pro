/**
 * Gulp tasks for automating our compile and build process.
 *
 * @package    Coaching Pro Theme
 * @author     brandiD
 * @link       http://thebrandid.com
 * @license    GPL-2.0+
 * @version    1.0
 */

'use strict';

var gulp = require('gulp'),

  // Sass/CSS processes
  bourbon = require('bourbon').includePaths,
  neat = require('bourbon-neat').includePaths,
  concat = require('gulp-concat'),
  sass = require('gulp-sass'),
  postcss = require('gulp-postcss'),
  autoprefixer = require('autoprefixer'),
  sourcemaps = require('gulp-sourcemaps'),
  cssMinify = require('gulp-cssnano'),
  sassLint = require('gulp-sass-lint'),
  del = require('del'),
  postcssSVG = require('postcss-svg'),
  jsMinify = require('gulp-uglify'),


  // Utilities
  rename = require('gulp-rename'),
  pxtorem = require('postcss-pxtorem'),
  notify = require('gulp-notify'),
  plumber = require('gulp-plumber'),
  cssMQpacker = require('css-mqpacker'),
  browserSync = require('browser-sync'),
  zip = require('gulp-zip'),
  wpPot = require('gulp-wp-pot'),
  reload = browserSync.reload;

/*************
 * Utilities
 ************/

/**
 * Error handling
 *
 * @function
 */
function handleErrors() {
  var args = Array.prototype.slice.call(arguments);

  notify.onError({
    title: 'Task Failed [<%= error.message %>',
    message: 'See console.',
    sound: 'Sosumi' // See: https://github.com/mikaelbr/node-notifier#all-notification-options-with-their-defaults
  }).apply(this, args);

  gutil.beep(); // Beep 'sosumi' again

  // Prevent the 'watch' task from stopping
  this.emit('end');
}

/*************
 * CSS Tasks
 ************/

/**
 * PostCSS Task Handler
 */
gulp.task('postcss', function() {



  return gulp.src('develop/scss/*.scss')


    // Error handling
    .pipe(plumber({
      errorHandler: handleErrors
    }))

    // Wrap tasks in a sourcemap
    .pipe(sourcemaps.init())

    .pipe(sass({
      includePaths: [].concat(bourbon, neat),
      errLogToConsole: true,
      outputStyle: 'expanded' // Options: nested, expanded, compact, compressed
    }))


    .pipe(postcss([
      autoprefixer({
        browsers: ['last 2 versions']
      }),
      pxtorem({
        replace: false,
        propList: ['font-size'],
        mediaQuery: false,
        rootValue: 10
      }),
      cssMQpacker({
        sort: true
      }),
      postcssSVG({
        paths: ['images']
      })


    ]))

    .pipe(sourcemaps.write('./'))

    .pipe(gulp.dest('./'))

    .pipe(browserSync.stream())

    .pipe(notify({
      message: 'PostCSS is done.'
    }));

});



gulp.task('sass:lint', ['postcss'], function() {
  gulp.src([
      'develop/scss/*.scss'
    ])
    .pipe(sassLint())
    .pipe(sassLint.format())
    .pipe(sassLint.failOnError())
});





/********************
 * All Tasks Listeners
 *******************/

gulp.task('watch', function() {

  browserSync({
    open: false, //no new tab
    proxy: "https://coaching-pro.local" // use http://_s.com:3000 to use BrowserSync
  });

  gulp.watch('develop/scss/**/*.scss', ['styles']);


});

/**
 * Individual tasks.
 */
// gulp.task('scripts', [''])
gulp.task('styles', ['clean', 'sass:lint']);

// gulp.task('build', ['styles', 'compress', 'zip']);

gulp.task('clean', function() {
  del(['*.css*']);
});
