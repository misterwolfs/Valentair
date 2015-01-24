console.log = function(){};

$(function() {

	$(".form-select").on("click", function() {
		$("form").fadeOut().removeClass("active");
		$("form#"+$(this).attr("id")+"-form").fadeIn().addClass("active");
		$(".form-select").addClass("not-active");
		$(this).removeClass("not-active").addClass("active");

		$('.form-error').text('');
	})

	var isValid = true;



	// POST HAPPY COUPLES FORM
	$('#form button').on('click', function(e) {
		isValid = true;
		console.log('form submit', $(this), $(''));

		$(".active input, .active textarea").each(function() {
		   var element = $(this);
		   console.log('element', element, element.val() == "", element.val());
		   if (element.val() == "") {
		       isValid = false;
		       element.removeClass('valid').addClass("invalid");
		   }
		   else {
		   		element.removeClass("invalid").addClass('valid');
		   }
		});

		console.log("var inValid", isValid);

		if(isValid) {
			console.log('valid');
			e.preventDefault();

			console.log('button form', $(this).hasClass('not-logged-in'));
			//$(this).hasClass('not-logged-in').addClass("md-show");
			// if($(this).hasClass('not-logged-in'))
			// {
			// 	$(this).addClass("md-trigger")
			// }

			var type = $(this)[0].id;
			
			console.log('button pressed', $(this)[0].id, 'type ', type );

			var data = '';
			if(type == 'hunters')
			{	
				console.log('hunters, logged');
				data = '#love-hunter-form';
			}
			else if(type == 'couples')
			{
				console.log('couples, logged');
				data = '#happy-couple-form';
			}



			// AJAX POST
			$.ajax({
			  type: "POST",
			  url: "liftoff/" + type,
			  data: $(data).serializeArray(),
			  success: getData,
			  error: function(XMLHttpRequest, textStatus, errorThrown) {
			     console.log('something went wrong uploading', XMLHttpRequest, textStatus, errorThrown);
			  }
			});
		} else {
			// alert("niet valid");

			$('html, body').animate({
		        scrollTop: $("#send-your-message").offset().top

		        
		    }, 500);

		    $('.form-error').text('');
		    var formerror = $('.form-error').text('Please fill in all the input fields!');
		    $('#form').prepend(formerror);
		}
	})

	function getData() {
			console.log('success true');
				$.get( "messagesent", function( data ) {
				 // console.log('succes', data);
				  
				  $('.form-wrapper').slideUp("slow").delay(800);
				  $('#send-your-message').append(data);
				  $('.message-wrapper').slideDown("slow")
				});
	}

	// $('#facebook').on('click', function() {
	// 	window.location.href = "login/fb";
	// });


	$('#foundit').on('click', function(e) {
		e.preventDefault();
		
		//console.log($('#arrived-form').serializeArray());

		var url = window.location.pathname;
		console.log(url);

		url = url.replace('card/',"");

		url = "/code" + url;

		$.ajax({
		  type: "GET",
		  url: url,
		  success: function(data) {
		  	
		  	code = data;

			var formData = $('#arrived-form').serializeArray();

			console.log(code, formData['2'].value, code == formData['3'].value);
			if(code == formData['3'].value)
			{		
				// AJAX POST
				$.ajax({
				  type: "POST",
				  url: "/arrived",
				  data: formData,
				  success: function() {
					$('.arrived-address').text('Arrived in ' + formData['2'].value);
				  	$('#arrived-form').slideUp('slow');
				  }
				});
			}
			else 
				alert('Your code is wrong!');
		  	}
		});



	})

})





