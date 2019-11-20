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

function replace_form_validation(form) {
	var error_message = $('<div class="input-error">HEY!</div>"');
	
	$('input, textarea', form).on("invalid", function(e) {
		e.preventDefault();
		$(this).addClass('invalid');
	});

	$('input, textarea', form).change(function(e) {
		e.preventDefault();
		if (this.checkValidity()) {
			$(this).removeClass('invalid');
		}
	});

	form.on('submit', function(e) {
		if ( !this.checkValidity() ) {
            e.preventDefault();
        }
	});

	console.log(form);
}

$(document).ready(function() {

	body_classes();

	Stickyfill.add($('#navbar'));

	$(window).resize(function() {
		body_classes();
		$('.collapse').collapse('hide');
	});

	$('form').each(function(index, value) {
		replace_form_validation($(this));
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

	$("#new-contact input, #new-contact textarea").focus(function (e) {
		$('#new-contact button').removeClass('done');
		$('#new-contact button').html('Send a secure message &nbsp;&nbsp;<i class="fas fa-lock"></i>');
		
	});

	$("form#new-contact").submit(function(e){
        e.preventDefault();
        var href = $(this).attr("action");
        $.ajax({
            type: "POST",
			dataType: "json",
			jsonp: "method",
            url: href,
			data: $(this).serialize(),
			beforeSend: function(response) {
				$('#new-contact button').html('Sending....');
			},
            success: function(response){
				if(response.status == "success"){
					$('#new-contact button').blur();
					$('#new-contact button').addClass('done');
					$('#new-contact button').html('Done!');
					$(".ajaxForm")[0].reset()	
                }else{
                    alert("An error occured: " + response.message);
                }
			},
			error: function(response) {
				$('#contact-error').modal()
				$('#new-contact button').html('Send <span class="hide-xs">a secure message </span> &nbsp;&nbsp;<i class="fas fa-lock"></i>')
			}
        });
	});



	$('#navbarToggleExternalContent a').click(function() {
		$('#navbarToggleExternalContent').collapse("toggle");
	});

	$('#hamburger-menu i').click(function() {
		$('#navbarToggleExternalContent').collapse("toggle");
	});
});


