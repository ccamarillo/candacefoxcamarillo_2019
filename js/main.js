$(document).ready(function() { 
	var Page = { 
		init: function() { 
			var self = this;
			$('#contactLink').click(function() { 
				self.openContact();
			});
			$('#contact .close').click(function() { 
				self.closeContact();
			});
			$('#submitButton').click(function(event) { 
				event.preventDefault();
				self.processContactForm();
			});
		},
		closeContact: function() { 
			$('#contact').hide();
			$('#welcome').show();
		},
		openContact: function() {
			this.hideContactReceipt(); 
			$('#contact').show();
			$('#welcome').hide();
		},
		processContactForm: function() { 
			this.showContactReceipt();
		},
		showContactReceipt: function() { 
			var self = this;
			$('#contactForm').hide();
			$('#thankyouMessage').show();
			setTimeout(function() { self.closeContact(); }, 2000);
		},
		hideContactReceipt: function() { 
			$('#contactForm').show();
			$('#thankyouMessage').hide();
			
		}

	}
	Page.init();
});


