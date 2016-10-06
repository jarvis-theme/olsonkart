var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
	urlArgs: "v=010a",
	waitSeconds : 300,

	shim: {
		"bootstrap"	: {
			deps: ['jquery']
		},
		"flexslider" : {
			deps : ['jquery']
		},
		'jq_ui' : {
			deps : ['jquery']
		},
		"navgoco" : {
			deps : ['jquery']
		},
		"noty" : {
			deps : ['jquery']
		},
		"cart" : {
			deps: ['jquery']
		},
		"filter" : {
			deps: ['jquery']
		},
		"caroufredsel" : {
			deps: ['jquery']
		},
		"fancybox" : {
			deps: ['jquery']
		}
	},

	paths: {
		// LIBRARY
		bootstrap 		: '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min',
		cart			: '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/js/shop_cart',
		caroufredsel	: '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/olsonkart/assets/js/lib/jquery.carouFredSel-6.2.1-packed',
		flexslider		: '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/olsonkart/assets/js/lib/jquery.flexslider',
		fancybox		: '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/olsonkart/assets/js/lib/jquery.fancybox',
		jq_ui			: '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/js/jquery-ui',
		jquery 			: '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min',
		navgoco			: '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/olsonkart/assets/js/lib/jquery.navgoco.min',
		noty			: '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/js/jquery.noty',
		levelmenu		: '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/olsonkart/assets/js/lib/ddlevelsmenu',
		filter			: '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/olsonkart/assets/js/lib/filter',
		respond			: '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/olsonkart/assets/js/lib/respond.min',
		html5shiv		: '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/olsonkart/assets/js/lib/html5shiv',

		// ROUTE
		router          : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/js/router',

		// CONTROLLER
		home            : dirTema+'/assets/js/pages/home',
		main            : dirTema+'/assets/js/pages/default',
		produk          : dirTema+'/assets/js/pages/produk',
	}
});
require([
	'router',
	'bootstrap',
	'main',
	'cart'
], function(router,b,main,cart)
{
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// PRODUK
	router.define('produk/*', 'produk@run');
	
	router.run();
	main.run();
	cart.run();
});