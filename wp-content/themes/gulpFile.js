"use strict";

// Load plugins
const themeLocation = './basic-theme/';
const autoprefixer = require("autoprefixer");
const browsersync = require("browser-sync").create();
const cp = require("child_process");
const cssnano = require("cssnano");
//const del = require("del");
//const eslint = require("gulp-eslint");
const gulp = require("gulp");
const imagemin = require("gulp-imagemin");
const newer = require("gulp-newer");
const plumber = require("gulp-plumber");
const postcss = require("gulp-postcss");
const rename = require("gulp-rename");
const sass = require("gulp-sass");
//const webpack = require("webpack");
//const webpackconfig = require("./webpack.config.js");
//const webpackstream = require("webpack-stream");

// BrowserSync
function browserSync(done) {
    browsersync.init({
        notify: false,
        //proxy: 'http://gs.boombagames.co.il/',
        proxy: 'http://localhost/gs-local',
        ghostMode: false,
        reloadDelay: 1000
    });
    done();
}

// BrowserSync Reload
function browserSyncReload(done) {
    browsersync.reload();
    done();
}


// CSS task
function css() {
    return gulp
        .src(themeLocation + 'src/scss/**/*.scss')
        .pipe(plumber())
        .pipe(sass({ outputStyle: "expanded" }))
        //.pipe(gulp.dest(themeLocation + 'dist'))
        .pipe(rename({ suffix: ".min" }))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(gulp.dest(themeLocation + 'dist/style'))
        .pipe(browsersync.stream());
}


// Jekyll
function jekyll() {
    return cp.spawn("bundle", ["exec", "jekyll", "build"], { stdio: "inherit" });
}

// Watch files
function watchFiles() {
    css();
    gulp.watch(themeLocation + 'src/scss/**/*.scss', css);
    gulp.watch(themeLocation + "*.php").on('change', browsersync.reload);
    // gulp.watch("./assets/js/**/*", gulp.series(scriptsLint, scripts));
    gulp.watch(
        [
            "./_includes/**/*",
            "./_layouts/**/*",
            "./_pages/**/*",
            "./_posts/**/*",
            "./_projects/**/*"
        ],
        gulp.series(jekyll, browserSyncReload)
    );
}

// define complex tasks
//const js = gulp.series(scriptsLint, scripts);
const build = gulp.series( gulp.parallel(css, jekyll));
const watch = gulp.parallel(watchFiles, browserSync);

// export tasks
//exports.images = images;
exports.css = css;
//exports.js = js;
exports.jekyll = jekyll;
//exports.clean = clean;
exports.build = build;
exports.watch = watch;
exports.default = build;