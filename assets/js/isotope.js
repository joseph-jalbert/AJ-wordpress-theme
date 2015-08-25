jQuery(function ($) {

	var $container = $('#container');
	// initialize Isotope
	$container.isotope({
		itemSelector : '.photo',
		layoutMode: 'masonry',
		// options
		resizable: false,
		// set columnWidth to a percentage of container width
		masonry: { columnWidth: $container.width() / 4 }
	});

	// update columnWidth on window resize
	$(window).smartresize(function(){
		$container.isotope({
			// update columnWidth to a percentage of container width
			masonry: { columnWidth: $container.width() / 4 }
		});
	});
});