<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='./css/reset.css'>
<link rel='stylesheet' type='text/css' href='./css/global.css'>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
<script src='js/sign_in_out1.js'></script>
<script src='js/send_message.js'></script>
<script src='js/display.js'></script>
<title>Chatbox</title>
</head>
<body>
<div id='chatBox'>
	<section id='signInArea'>
		<form name='signIn' action='' onsubmit='return false'>
			<span id='invalidUsername'>Invalid Username</span>
			<input type='text' size='13px' name='username' id='username' placeholder='Enter Username' />
			<input type='submit' id='userSignIn' value='SIGN IN' />
		</form>
	</section>
	<section id='chatArea'>
	
	</section>
	<section id='messageTypingArea'>
		<div id='signInToChat'>
			<button id='signInButton' type='button'>Sign In To Enter Chat</button>
		</div>
		<div id='chatEnabled'>
			<form name='newMessage' class='newMessage' action='' onsubmit='return false'>
				<section class='left'>
					<textarea name='newMessageContent' id='newMessageContent' placeholder='Enter your message here'></textarea>
				</section>
				<section class='right'>
					<input type='submit' id='newMessageSend' value='Send' />
				</section>
			</form>
		</div>
	</section>
</div>
</body>
</html>
