<?php
include 'database.php';
$username = $_GET['username'];
$message = $_GET['message'];
$messageTime = time();
$tenMinutesAgo = time() - 600;
$db=new database();
$query="INSERT INTO chatHistory
	(username, message, messagetime)
		VALUES
	('$username', '$message', '$messageTime')";
$read=$db->insert_data($query);
echo 'bye';
/*$query = "SELECT
	username, message, messagetime
		FROM
	chathistory
		WHERE
	messagetime > " . $tenMinutesAgo . "
		ORDER BY
	messagetime";*/

?>