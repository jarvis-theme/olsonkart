define(['jquery','bootstrap','navgoco','flexslider','levelmenu','filter','respond','html5shiv'], function($,b,navgoco)
{
	return new function(){
		var self = this;
		self.run = function(){
			// Sidebar menu
			$('.sidey .nav').navgoco();

			// Scroll to Top
			$(".totop").hide();
			$(window).scroll(function(){
				if ($(this).scrollTop()>300){
					$('.totop').slideDown();
				} else{
					$('.totop').slideUp();
				}
			});
			$('.totop a').click(function (e) {
				e.preventDefault();
				$('body,html').animate({scrollTop: 0}, 500);
			});

			// Support
			$("#slist a").click(function(e){
			   e.preventDefault();
			   $(this).next('p').toggle(200);
			});

			// Careers
			$('#myTab a').click(function (e) {
				e.preventDefault()
				$(this).tab('show')
			});

			// Navigation Menu
			ddlevelsmenu.setup("ddtopmenubar", "topbar");

			// Dropdown Select
			// Navigation (Select box)
			// Create the dropdown base
			$("<select />").appendTo(".navis");

			// Create default option "Go to..."
			$("<option />", {
			   "selected": "selected",
			   "value"   : "",
			   "text"    : "Menu"
			}).appendTo(".navis select");

			// Populate dropdown with menu items
			$(".navi a").each(function() {
				var el = $(this);
				$("<option />", {
			    	"value"   : el.attr("href"),
			    	"text"    : el.text()
				}).appendTo(".navis select");
			});

			$(".navis select").change(function() {
			  window.location = $(this).find("option:selected").val();
			});
		};
	}
});