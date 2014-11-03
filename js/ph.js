var PH = (function($){
	var ph = {};
	ph.initalize = function(){

		if (catPage) {
			//if ($(document).height() >1230) {
				$(".main-wrapper").css('height',$(document).height() - $(".footer").height()+"px");
			//}

			if (catPage == 'contact') {
				
				if (parseInt(sendMessage) == 1) {
					$.ajax({url:'/api/contact.php', data:{'e':$("#email").val(),'n':$("#name").val(),'m':$("#message").val()}, type:'POST', success:function() {
						$("#email").val('')
						$("#name").val('')
						$("#message").val('')
						alert('Thanks for contact us. Someone will get back to you shortly.')

					}});
				}
			}
		}

		$(window).resize(function () {
			//if ($(document).height() >1230) {
				$(".main-wrapper").css('height',$(document).height() - $(".footer").height()+"px");
			//}
		});
	};

	ph.submitContact = function () {

		if ($("#email").val() == $("#confirm").val()) {
			document.contactform.submit()
		} else {
			alert('Please make sure your email is correct and try again.');
		}

	};

	return ph;
}(jQuery));

$(document).ready(function() {
	PH.initalize();
});