function objectifyForm(formArray) {//serialize data function

	var returnArray = {};
	for (var i = 0; i < formArray.length; i++){
	  returnArray[formArray[i]['name']] = formArray[i]['value'];
	}
	return returnArray;
  }

$(document).ready(function() {

	var fontYesevaOne = new FontFaceObserver('Yeseva One');
	
	fontYesevaOne.load().then(function () {
		var hiddenTextClasses = 'h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6, p'
		$(hiddenTextClasses).addClass('fadeIn');
		$(hiddenTextClasses).css('visibility', 'visible');
		console.log('show');
	}, function () {
		console.log('Font is not available');
	});



	$(".ajaxForm").submit(function(e){
        e.preventDefault();
        var href = $(this).attr("action");
        $.ajax({
            type: "POST",
            dataType: "json",
            url: href,
            data: $(this).serialize(),
            success: function(response){
                if(response.status == "success"){
                    $('#myInput').trigger('focus')
                }else{
                    alert("An error occured: " + response.message);
                }
            }
        });
	});
	
	// $('#myModal').on('shown.bs.modal', function () {
	// $('#myInput').trigger('focus')
	// })

	
	// 	$.post( url , params )
	// 	   .done(function() {
	// 		  console.log( "success" );
	// 		  //window.location.href = "success.html";
	// 	   })
	// 	   .fail(function() {
	// 		  console.log( "error" );
	// 		  //window.location.href = "error.html";
	// 	   });
	//   });
	
	// var Page = { 
	// 	init: function() { 
	// 		var self = this;
	// 		$('.contactLink').click(function(e) { 
	// 			e.preventDefault();
	// 			self.openContact();
	// 		});
	// 		$('#contact .close').click(function() { 
	// 			self.closeContact();
	// 		});
	// 		$('form').submit(function(event) { 
	// 			event.preventDefault();
	// 			if ($('form').valid()) { 
	// 				self.processContactForm();
	// 			}
	// 		});
	// 		$('.navbar h3').click(function() { 
	// 			$.scrollTo('0px', { duration: 500 });
	// 		});
	// 		$('.thumbnail').click(function(e) { 
	// 			self.showSlideshow($(e.target).closest('.thumbWrapper').index());
	// 		});

	// 		$('.projectsLink').click(function(e) { 
	// 			e.preventDefault();
	// 			self.showSlideshow(0);
	// 		});

	// 		$('form').validate();
			
	// 		// SLIDESHOWS
	// 		$('.projectsSlideshow').carousel({ interval: 0 });

	// 		$('.screenshots').cycle();

	// 		$('.closeSlideshow').click(function() { 
	// 			self.closeSlideshow();
	// 		});
	// 	},
	// 	closeSlideshow: function() { 
	// 		$('#welcome').slideDown();
	// 		$('#slideshow').slideUp();
	// 	},
	// 	closeContact: function() { 
	// 		$('#welcome').slideDown();
	// 		$('#contact').slideUp();
	// 	},
	// 	openContact: function() {
	// 		$.scrollTo('0px', { duration: 500 });
	// 		this.hideContactReceipt(); 
	// 		$('#welcome, #slideshow').slideUp();
	// 		$('#contact').slideDown();

	// 	},
	// 	processContactForm: function() { 
	// 		var self = this;
	// 		$('form .spinner').addClass('active');
	// 		$.ajax({ 
	// 			type: 'POST',
	// 			url: 'processContact.php',
	// 			data: { 
	// 				email: $('#email').val(),
	// 				message: $('#message').val()
	// 			},
	// 			success: function(result) { 
	// 				console.log(result);
	// 				if (result == '1') { 
	// 					self.showContactReceipt();
	// 				} else { 
	// 					self.showContactError(result);	
	// 				}
	// 				$('form .spinner').removeClass('active');
	// 			},
	// 			error: function(e) { 
	// 				self.showContactError(e);	
	// 				$('form .spinner').removeClass('active');
	// 			}
	// 		});
			
	// 	},
	// 	showContactError: function(e) { 
	// 		$('form .formError').html(e).addClass('active');
	// 	},
	// 	showContactReceipt: function() { 
	// 		var self = this;
	// 		$('#contactForm').slideUp();
	// 		$('#thankyouMessage').slideDown();
	// 		setTimeout(function() { self.closeContact(); }, 2000);
	// 		this.clearContactForm();
	// 	},
	// 	hideContactReceipt: function() { 
	// 		$('#contactForm').show();
	// 		$('#thankyouMessage').hide();
	// 	},
	// 	clearContactForm: function() { 
	// 		$('form #email').val('');
	// 		$('form #message').val('');
	// 	},
	// 	showSlideshow: function(index) { 
	// 		$.scrollTo('0');
	// 		$('#welcome, #contact').slideUp();
	// 		$('#slideshow').slideDown();

	// 		$('.projectsSlideshow').carousel(index);
	// 	}

	// }
	// Page.init();
});


