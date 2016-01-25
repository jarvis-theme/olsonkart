var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    urlArgs: "v=010",
    waitSeconds : 60,

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
		}
	},

	paths: {
		// LIBRARY
		bootstrap 		: '//maxcdn.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min',
		cart			: 'js/shop_cart',
		caroufredsel	: dirTema+'/assets/js/lib/jquery.carouFredSel-6.2.1-packed',
		flexslider		: dirTema+'/assets/js/lib/jquery.flexslider',
		fancybox		: dirTema+'/assets/js/lib/jquery.fancybox',
		jq_ui			: 'js/jquery-ui',
		jquery 			: '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min',
		navgoco			: dirTema+'/assets/js/lib/jquery.navgoco.min',
		noty			: 'js/jquery.noty',
		levelmenu		: dirTema+'/assets/js/lib/ddlevelsmenu',
		filter			: dirTema+'/assets/js/lib/filter',
		respond			: dirTema+'/assets/js/lib/respond.min',
		html5shiv		: dirTema+'/assets/js/lib/html5shiv',

		// ROUTE
		router          : 'js/router',

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