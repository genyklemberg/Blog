var gulp = require('gulp'),
	spritesmith = require('gulp.spritesmith'),
	imagemin = require('gulp-imagemin');
	
	gulp.task('default', () =>
	    gulp.src('photo/*')
	        .pipe(imagemin())
	        .pipe(gulp.dest('img'))
	);

	// Sprites task - create sprite image
	gulp.task('sprites', function () {
	  var spriteData = gulp.src('./img/*.jpg').pipe(spritesmith({
	    imgName: 'sprite.jpg',
	    cssName: 'sprite.css',
	    // imgPath: './animation/img' + 'sprite.jpg'
	  }));
	    return spriteData.pipe(gulp.dest('./img'));
	    // spriteData.img.pipe(gulp.dest('./animation/img'));
});