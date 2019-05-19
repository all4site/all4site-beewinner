var gulp = require('gulp'),
	browserSync = require('browser-sync'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	notify = require('gulp-notify'),
	wait = require('gulp-wait');

// WORK
gulp.task('sass', function () {
	return gulp.src('sass/**/*.sass')
		.pipe(wait(500))
		.pipe(sass.sync())
		.on('error', notify.onError({
			message: "<%= error.message %>",
			title: "Sass Error!"
		}))
		.pipe(autoprefixer(['last 2 versions', '> 1%', 'ie 8'], {
			cascade: true
		}))
		.pipe(gulp.dest('css/'))
});
gulp.task('browser-sync', function () {
	browserSync({
		proxy: 'beewinner.com.ua',
		notify: false
	});
});

gulp.task('default', ['browser-sync', 'sass'], function () {
	gulp.watch('sass/*.sass', ['sass']);
	gulp.watch('css/*.css', browserSync.reload);
	gulp.watch('**/*.php', browserSync.reload);
});

// END WORK