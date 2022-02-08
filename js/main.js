function body_classes() {

	var current_width = $(window).width();
	var all_classes = 'body-sm body-md body-lg body-xl body-xs';
	
	if (current_width < 480) {
		$('body').removeClass(all_classes);
		$('body').addClass( 'body-xs' );
	} else if (current_width < 768) {
		$('body').removeClass(all_classes);
		$('body').addClass( 'body-sm' );
	} else if (current_width < 992) {
		$('body').removeClass(all_classes);
		$('body').addClass( 'body-md' );
	} else if (current_width < 1200) {
		$('body').removeClass(all_classes);
		$('body').addClass( 'body-lg' );   
	} else if (current_width < 1450) {
		$('body').removeClass(all_classes);
		$('body').addClass( 'body-xl' );
	}   
};

$(document).ready(function() {

	body_classes();

	Stickyfill.add($('#navbar'));

	$(window).resize(function() {
		body_classes();
		$('.collapse').collapse('hide');
	});

	var fontYesevaOne = new FontFaceObserver('Yeseva One');
	
	fontYesevaOne.load().then(function () {
		var hiddenTextClasses = 'h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6, p'
		$(hiddenTextClasses).addClass('fadeIn');
		$(hiddenTextClasses).css('visibility', 'visible');
	}, function () {
		$(hiddenTextClasses).addClass('fadeIn');
		$(hiddenTextClasses).css('visibility', 'visible');
	});

	$('#navbarToggleExternalContent a').click(function() {
		$('#navbarToggleExternalContent').collapse("toggle");
	});

	$('#hamburger-menu i').click(function() {
		$('#navbarToggleExternalContent').collapse("toggle");
	});
});

