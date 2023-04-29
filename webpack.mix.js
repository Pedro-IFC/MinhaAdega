/**
 * Modules
 */
const mix = require('laravel-mix')

/**
 * Project proxy
 */
const proxy = 'http://localhost/your-site-dir'

mix
	.sass('assets/scss/index.scss', 'style.css')
	.js('assets/javascript/*.js', 'functions.js')
	.options({ processCssUrls: false })
	.disableNotifications()
	.setPublicPath('')
	.webpackConfig({
		output: {
			chunkFilename: 'public/chunks/[name].js',
		},
	})
