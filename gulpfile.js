'use strict';
const gulp = require('gulp'),
	  sass = require('gulp-sass'),
	  postcss = require('gulp-postcss'),
	  autoprefixer = require('autoprefixer'),
	  //browserSync = require('browser-sync').create(),
	  pug = require('gulp-pug'),
	  rename = require('gulp-rename');


let pstpluggins = [autoprefixer({browsers: 'last 2 versions'})];


//tarea de PUG
gulp.task('pug', ()=> 
	gulp.src('./resources/assets/pug/**/*.pug')
		.pipe(pug({
			pretty: true
		}))
		.pipe(rename({
			extname: '.php'
		}))
		.pipe(gulp.dest('./resources/views/' ))
	);


// //Tarea de Sass
// gulp.task('sass', ()=> 
// 	gulp.src('./resources/assets/sass/**/*.scss')
// 		.pipe(sass({
// 			outputStyle: 'expanded'
// 		}))
// 		.pipe(postcss(pstpluggins))
// 		.pipe(gulp.dest('./public/css/' ))
// 	);



//Tarea de Sass - Foundation
gulp.task('sass', ()=> 
	gulp.src('./resources/assets/sass/**/*.scss')
		.pipe(sass({
			outputStyle: 'expanded'
		}))
		.pipe(postcss(pstpluggins))
		.pipe(gulp.dest('./public/css/' ))
	);




//vigilante...
gulp.task('default', ()=>{
	// browserSync.init({
	// 	server: './'
	// });
	// gulp.watch('./*.html').on('change', browserSync.reload);
	// gulp.watch('./*.css').on('change', browserSync.reload);
	// gulp.watch('./*.js').on('change', browserSync.reload);
	gulp.watch('./resources/assets/pug/**/*.pug',['pug']);
	// gulp.watch('./resources/assets/sass/**/*.scss',['sass']);
	gulp.watch('./resources/assets/sass/**/*.scss',['sass']);

	});


