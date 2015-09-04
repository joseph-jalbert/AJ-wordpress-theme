jQuery(function ($) {
	
	var $container = $('#container');
	// initialize Isotope
	$(window).load(function(){
		$container.isotope({
		itemSelector : '.photo',
		layoutMode: 'masonry',
		// options
		resizable: false,
		// set columnWidth to a percentage of container width
		masonry: { columnWidth: $container.width() / 4 }
		});
	});
});
