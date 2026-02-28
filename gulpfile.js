const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cleanCSS = require('gulp-clean-css');
const terser = require('gulp-terser');
const browserSync = require('browser-sync').create();
const sourcemaps = require('gulp-sourcemaps');

// SCSS → CSS
function css() {
    return gulp.src('./src/scss/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([autoprefixer()]))
        .pipe(cleanCSS())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./dist/css'))
        .pipe(browserSync.stream());
}

// JS minify
function js() {
    return gulp.src('./src/js/**/*.js')
        .pipe(terser())
        .pipe(gulp.dest('./dist/js'))
        .pipe(browserSync.stream());
}

// BrowserSync
function serve() {
    browserSync.init({
        proxy: "http://ikaomoti.local"
    });

    gulp.watch('./src/scss/**/*.scss', css);
    gulp.watch('./src/js/**/*.js', js);
    gulp.watch('./**/*.php').on('change', browserSync.reload);
}

exports.default = gulp.series(css, js, serve);