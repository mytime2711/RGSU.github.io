var gulp = require('gulp');
var ugligy = require('gulp-uglify');
var concat = require('gulp-concat');
var cssMin = require('gulp-css');

gulp.task('css', function(){

	gulp.src([
				'./css/jquery.fancybox.css',
				'./css/jquery.mCustomScrollbar.css',
				'./css/owl.carousel.css',
				'./css/owl.theme.css',
				'./js/slideshow/settings.css',
				'./css/owl.transitions.css',
				'./css/PieChart.css',
				'./css/responsive.css',
				'./css/theme.css'
			])
			.pipe(concat('app.css'))
			.pipe(cssMin())
			.pipe(gulp.dest('./css/cssMinified'))

});

gulp.task('js', function(){

	gulp.src([
				'./js/jquery-1.12.0.min.js',
				'./js/jquery.fancybox.js',
				'./js/jquery-ui.js',
				'./js/owl.carousel.js',
				'./js/TimeCircles.js',
				// './js/slideshow/jquery.themepunch.revolution.js',
				// './js/slideshow/jquery.themepunch.plugins.min.js',
				'./js/theme.js'
			])
			.pipe(concat('app.js'))
			.pipe(ugligy())
			.pipe(gulp.dest('./js/jsMinified'))

});


gulp.task('default',['css','js']);