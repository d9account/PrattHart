var PH = (function($){
	var ph = {};
	ph.initalize = function(){

		if (catPage) {
			if ($(window).height() >1230) {
				$(".main-wrapper").css('height',$(window).height() - $(".footer").height()+"px");
			}
		}

		$(window).resize(function () {
			if ($(window).height() >1230) {
				$(".main-wrapper").css('height',$(window).height() - $(".footer").height()+"px");
			}
		});
	};

	ph.submitContact = function () {

		$.ajax({url:'/api/contact.php', data:{'e':$("#email").val(),'n':$("#name").val(),'m':$("#message").val()}, type:'POST', success:function() {
			$("#email").val('')
			$("#name").val('')
			$("#message").val('')
			alert('Thanks for contact us. Someone will get back to you shortly.')

		}});

	};

	return ph;
}(jQuery));

$(document).ready(function() {
	PH.initalize();
});