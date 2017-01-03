$(function () {

// hide invalid username message and message typing area
$('#invalidUsername').hide();
$('#chatEnabled').hide();

// focus cursor to sign in area on button click
$('#signInButton').click(function() {
	$('#username').focus();
});

// code to execute on user sign in button click
$('#userSignIn').click(function() {
	var username = $('#username').val();

	if (username == '') {
		$('#invalidUsername').show();
		return false;
	} else {
		//alert('hello');
		$.ajax({
			data: {username:username},
			type: 'GET',
			url: 'insert_username.php',
			success: function(result) {
				$('#signInArea').html('<span class="welcome">Welcome <span id="loggedInUser">' + username + '</span></span>');
				//alert('hello');
				//alert(response);
				if(result)
				{
					alert(result);
				}
			}
		});

		$('#signInToChat').hide();
		$('#chatEnabled').show();
	}
});


});