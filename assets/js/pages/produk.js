define(['jquery','bootstrap','caroufredsel','fancybox'], function($,carousel,carouFredSel,fancybox){
	return new function(){
		var self = this;
		self.run = function(){
			// Fancybox function
			$('#flexslider-product .slides a').fancybox();
			carouselProduk();

			// Single item carousel 
			$('.ecarousel').carousel({
			   interval: 8000,
			   pause: "hover"
			});

			$('.fancybox').fancybox({
				padding: 10,
				openEffect : 'elastic',
				openSpeed  : 150,
				closeEffect : 'elastic',
				closeSpeed  : 150
			});
		};

		var carouselProduk = function(){
			/* Carousel */
			$('#carousel_container').carouFredSel({
				responsive: true,
				width: '100%',
				direction: 'right',
				scroll: {
					items: 4,
					delay: 2000,
					duration: 5000,
					pauseOnHover: "true"
				},
				prev : {
					button	: "#car_prev",
					key		: "left"
				},
				next : {
					button	: "#car_next",
					key		: "right"
				},
				items: {	
					visible: {
						min: 1,
						max: 4
					}
				}
			});
		};
	}
});