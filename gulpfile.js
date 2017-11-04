
var gulp = require('gulp'),
gutil = require('gulp-util'),
less = require('gulp-less'),
concat = require('gulp-concat'),
uglify = require('gulp-uglify'),
autoprefixer = require('gulp-autoprefixer'),
minifycss = require('gulp-minify-css'),
rename = require('gulp-rename'),
cmq = require('gulp-combine-media-queries');

gulp.task('css', function() {
	gulp.src('./_src/style/*.less')
	// .pipe(concat('main.css'))
	.pipe(less().on('error', gutil.log))
	.pipe(autoprefixer('last 3 version', 'Explorer 8').on('error', gutil.log))
    // .pipe(cmq({log:true}))
    .pipe(gulp.dest('./public/css/'))
    .pipe(rename({suffix: '.min'} ).on('error', gutil.log))
    .pipe(minifycss().on('error', gutil.log))
    .pipe(gulp.dest('./public/css/'));
})

gulp.task('js', function() {
  gulp.src('./_src/js/*.js')
    .pipe(concat('main.js'))
    .pipe(gulp.dest('./public/js/'))
    .pipe(rename({suffix: '.min'} ))
    .pipe(uglify().on('error', gutil.log))
    .pipe(gulp.dest('./public/js/'));
 
});


gulp.task('cmq', function () {
  gulp.src('./assets/css/*.css')
    .pipe(cmq({
      log: true
    }))
    .pipe(gulp.dest('assets/css/'));
});


gulp.task('watch', function(){
  gulp.watch('./_src/style/*.less', ['css'])
    .on('change', function(evt) {
      console.log(evt.type, " ==> ", evt.path);
    });
  gulp.watch('./_src/js/*.js', ['js'])
    .on('change', function(evt) {
      console.log(evt.type, " ==> ", evt.path);
    });
})