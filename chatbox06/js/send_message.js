$(function() {

$('#newMessageSend').click(function() {
	var message = $('#newMessageContent').val();
	var username = $('#loggedInUser').text();

	if (message != '') {
		$.ajax({
			data: { username: username, message: message },
			type: "GET",
			url: "send_message.php",
			success: function(result) {
				$('#newMessageContent').val('');
				/*if(result)
				{
				 
				 alert(result);

				}*/
			}
		});
	}
});

});