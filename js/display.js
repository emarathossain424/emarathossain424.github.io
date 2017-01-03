$(function() {

var scrollHeightOfChatBox = document.getElementById('chatArea').scrollHeight;

setInterval(function() {
	$('#chatArea').load('display.php');
	$('#chatArea').scrollTop( scrollHeightOfChatBox );
}, 500);

});