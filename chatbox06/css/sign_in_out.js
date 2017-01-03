$(function()
{
$('#invalidUsername').hide();
$('#chatEnabled').hide();


$('#signInButton').click(function()
{
$('#username').focus();
});

$('#userSignIn').click(function()
{
	var username=$('#username').val();
if(username=='')
{
	$('#invalidUsername').show();
	return false;
}
else
{
	$.ajax({
		data:{username:username},
		type:"GET",
		url: "insert_username.php",
		success: function()
		{
			$('#signInArea').html('<span class="welcome">Welcome <span id="loggedInUser">'+username+'</span></span>');
		}


	});
	$('#signInToChat').hide();
	$('#chatEnabled').show();

}	
});
});