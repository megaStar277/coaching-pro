/**
 * Gulp tasks for automating our compile and build process.
 *
 * @package    Coaching Pro Theme
 * @author     brandiD
 * @link       http://thebrandid.com
 * @license    GPL-2.0+
 * @version    1.0
 */

/* To run this file enter: gulp build  --gulpfile gulpfile-production.js from command line */

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
  notify = require('gulp-notify'),
  plumber = require('gulp-plumber'),
  cssMQpacker = require('css-mqpacker'),
  pxtorem = require('postcss-pxtorem'),
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
 * JS Tasks
 ************/

// gulp.task("concatScripts", function() {
//     return gulp.src([
//             'develop/js/genwpacc-dropdown.js',
//             'develop/js/responsive-menu.js',
//             'develop/js/responsive-menu.args.js',
//             'develop/js/jquery.backstretch.js',
//             'develop/js/backstretch.args.js',
//             'develop/js/global.js'
//         ])
//         .pipe(sourcemaps.init())
//         .pipe(concat('app.js'))
//         .pipe(sourcemaps.write('./'))
//         .pipe(gulp.dest('develop/js'));
// });
//


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
    //    .pipe(sourcemaps.init())

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

    //  .pipe(sourcemaps.write('./'))

    .pipe(gulp.dest('./'))

    .pipe(browserSync.stream())

    .pipe(notify({
      message: 'PostCSS is done.'
    }));

});

gulp.task('css:minify', ['postcss'], function() {
  return gulp.src('*.css')
    // Error handling
    .pipe(plumber({
      errorHandler: handleErrors
    }))
    .pipe(cssMinify({
      safe: true
    }))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./'))
    //  .pipe(browserSync.stream())
    .pipe(notify({
      message: 'Styles are built.'
    }))
});

gulp.task('sass:lint', ['css:minify'], function() {
  gulp.src([
      'develop/scss/*.scss'
    ])
    .pipe(sassLint())
    .pipe(sassLint.format())
    .pipe(sassLint.failOnError())
});



/********************
 * Production Tasks
 *******************/

gulp.task('compress', function() {
  gulp.src(['js/customizer-controls.js',
      'js/customizer-scripts.js',
      'js/global.js',
      'js/home.js',
      'js/responsive-menus.js'
    ])
    .pipe(jsMinify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('js'))
})


gulp.task('zip', ['pot'], () =>
  gulp.src(['images/*',
    'includes/**/*',
    'lib/**/*',
    'css/*',
    'js/**/*',
    'xml/*',
    'languages/*',
    '404.php',
    'archive.php',
    'CHANGELOG.md',
    'front-page.php',
    'functions.php',
    'home.php',
    'LICENSE.md',
    'page_landing.php',
    'searchform.php',
    'readme.txt',
    'screenshot.png',
    'style.css',
    'style.min.css',
    'home.css',
    'home.min.css',
  ], {
    base: '.'
  })
  .pipe(zip('coaching-pro.zip'))
  .pipe(gulp.dest('dist'))
);

// /********************
//  * All Tasks Listeners
//  *******************/
//
// gulp.task('watch', function() {
//
//   browserSync({
//     open: false, //no new tab
//     proxy: "http://coaching-pro.dev" // use http://_s.com:3000 to use BrowserSync
//   });
//
//   gulp.watch('develop/scss/**/*.scss', ['styles']);
//
//
// });

/**
 * Individual tasks.
 */
// gulp.task('scripts', [''])
gulp.task('styles', ['clean', 'sass:lint']);

gulp.task('build', ['styles', 'compress', 'zip']);

gulp.task('clean', function() {
  del(['*.css*']);
});

gulp.task('pot', function() {
  return gulp.src(['./**/*.php'])
    .pipe(wpPot({
      domain: 'coaching-pro',
      package: 'Coaching Pro'
    }))
    .pipe(gulp.dest('languages/coaching-pro.pot'));
});
