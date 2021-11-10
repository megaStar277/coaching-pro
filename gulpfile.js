/**
 * Gulp tasks for automating our compile and build process.
 *
 * @package    Coaching Pro Theme
 * @author     brandiD
 * @link       http://thebrandid.com
 * @license    GPL-2.0+
 * @version    2.0.0
 */

'use strict';

var autoprefixer = require('autoprefixer');
var concat = require('gulp-concat');
var del = require('del');
var gulp = require('gulp');
var postcss = require('gulp-postcss');
var pxtorem = require('postcss-pxtorem');
var sass = require('gulp-sass')(require('node-sass'));
var wpPot = require('gulp-wp-pot');
var zip = require('gulp-zip');

// Generates a CSS file from the SASS files.
gulp.task('styles', async function() {

    // Define options for pxtorem.
    var processors = [
        autoprefixer({
            overrideBrowserslist: [
                "last 1 version"
            ]
        }),
        // pxtorem({
        //     replace: false,
        //     propList: ['font-size', '!clamp'],
        //     mediaQuery: false,
        //     rootValue: 10
        // })
    ];

    return gulp.src('sass/*.scss')
        .pipe(sass().on('error', sass.logError)) // Stop on errors.
        .pipe(postcss(processors))
        .pipe(gulp.dest('./')); // Generate the file here.
});

// Generates the Block Editor CSS file.
gulp.task('blockeditorstyles', async function() {

    var processors = [
        autoprefixer({
            overrideBrowserslist: [
                "last 1 version"
            ]
        })
    ];

    return gulp.src('sass/block-editor/*.scss')
        .pipe(sass().on('error', sass.logError)) // Stop on errors.
        .pipe(postcss(processors))
        .pipe(gulp.dest('./css/')); // Generate the file here.
});

// Removes the generated CSS file.
gulp.task('clean', async function() {
    return del([
        'style.css',
    ]);
});

// Watch SASS files and auto-generate a new CSS file on changes.
gulp.task('watch', async function() {
    return gulp.watch(['sass/*.scss', 'sass/block-editor/*.scss'], (done) => {
        gulp.series(['clean', 'styles', 'blockeditorstyles'])(done);
    });
});

// Generate .pot files for language translation.
gulp.task('pot', function() {
    return gulp.src(['./**/*.php'])
        .pipe(wpPot({
            domain: 'coaching-pro',
            package: 'Coaching Pro'
        }))
        .pipe(gulp.dest('languages/coaching-pro.pot'));
});

// Zip all theme files and put into /dist/ folder.
gulp.task('zip', async function() {
    return gulp.src([
        'config/*',
        'css/*',
        'images/*',
        'includes/**/*',
        'js/*',
        'languages/*',
        'lib/*',
        'xml/*',
        '*.css',
        '*.md',
        '*.php',
        'readme.txt',
        'screenshot.png',
    ], {
        base: '.'
    })
    .pipe(zip('coaching-pro.zip'))
    .pipe(gulp.dest('./dist'))
});

// Remove old stylesheet file, compile all SASS files, zip theme files and put it into the /dist/ folder.
gulp.task('build', gulp.series(['clean', 'styles', 'pot', 'zip']));

// Default process if none is defined.
gulp.task('default', gulp.series(['clean', 'styles']));
