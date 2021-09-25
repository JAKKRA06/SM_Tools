const gulp = require('gulp'),
      sass = require('gulp-sass')(require('sass')),
      browserSync = require('browser-sync').create(),
      prefix = require('autoprefixer'),
      rename = require('gulp-rename'),
      concat = require('gulp-concat'),
      minifycss = require('gulp-clean-css'),
      uglify = require('gulp-uglify-es').default,
      deploy = require("ftp-deploy"),
      ftp = require('vinyl-ftp');

const host = 'xxx.xy';
const user = 'xxx';
const pass = 'xxx';

const ftpHost = {
      host: host,
      user: user,
      password: pass,
      parallel: 10
};

const dirHost = 'domains/'+host+'/public_html';

function scss(){
  return gulp
    .src('./dev/sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(rename('style.min.css'))
    .pipe(minifycss())
    .pipe(gulp.dest('./public/assets/css'))
    .pipe(browserSync.stream());
}

function js(){
  return gulp
    .src(["./dev/js/**/*.js", "./dev/js/*.js"])
    .pipe(concat('script.js'))
    .pipe(gulp.dest('./public/assets/js'))
    .pipe(uglify())
    .pipe(rename('script.min.js'))
    .pipe(gulp.dest('./public/assets/js'))
    .pipe(browserSync.stream());
}

function deploy_css(){
  let conn = ftp.create(ftpHost),
      globs = ['assets/css/**', 'dev/sass/**'];

  return gulp
    .src(globs, { base: '.', buffer: false })
    .pipe(conn.newer(dirHost))
    .pipe(conn.dest(dirHost));
}

function deploy_js(){
  let conn = ftp.create(ftpHost),
      globs = ['assets/js/**', 'dev/js/**'];

  return gulp
    .src(globs, { base: '.', buffer: false })
    .pipe(conn.newer(dirHost))
    .pipe(conn.dest(dirHost));
}

function watch(){
  browserSync.init({
    server: {
      baseDir: './'
    }
  });
  gulp.watch(["./dev/sass/*.scss", "./dev/sass/**/*.scss"], gulp.series(scss));
  gulp.watch(["./dev/js/*.js", "./dev/js/**/*.js"], gulp.series(js));
  gulp.watch('./*.html').on('change', browserSync.reload);
};

exports.default = watch;
