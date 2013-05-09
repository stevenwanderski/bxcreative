$(function(){
		
	// validate the contact form
	$('form').validate({
		submitHandler: contactSubmit
	});
	
	function contactSubmit(form){
		var $form = $(form);
		// change the submit button value and disable it to prevent multiple submissions
		$form.find('.submit').val('Sending...').attr('disabled', 'disabled');
		// get all the form data
		var data = {
			name: $form.find('#name').val(),
			email: $form.find('#email').val(),
			message: $form.find('#message').val()
		}
		// post the values to our server script
		$.post('/php/mail.php', data, function(response){
			// if all good, fade out the fade and display the success message
			if(response == 'success'){
				$('form').fadeOut(300, function(){
					$('.contact-success').fadeIn(300);
				});
			// if an error occurred, display the error message
			}else{
				throw("PHP mail error!");
			}
			$form.find('.submit').val('Send').removeAttr('disabled');
		});
		return false;
	}
	
});