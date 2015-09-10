jQuery(document).ready(function($) {
	
	function contact_ajax(){
        var fname = $('#fname').val();
		var email = $('#email').val();
		var message = $('#message').val();
		var data = {
		  		action: 'contact_ajax',
		  		security : MyAjax.security,
		  		fname: fname,
		  		email: email,
		  		message: message
		 };
		 
		 $.post(MyAjax.ajaxurl, data, function(response) {
				var parsed_json = jQuery.parseJSON(response);
				$('#contact_ajax').hide();
				$("#contact_ajax_response").html(parsed_json);
				
		});
		return false;
		
	}
	
	$('#contact').submit( function(){
		$('#contact_ajax').show();
		$("#contact_ajax_response").html('');
		contact_ajax();
		return false;
	});
});