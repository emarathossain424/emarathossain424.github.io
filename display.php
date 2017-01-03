<?php
     include 'database.php';
     //$username = $_GET['username'];
     //$message = $_GET['message'];
     //$messageTime = time();
     $tenMinutesAgo = time() - 600;
     $db=new database();
     $query = "SELECT
	username, message, messagetime
		FROM
	chathistory
		WHERE
	messagetime > " . $tenMinutesAgo . "
		ORDER BY
	messagetime";
	$result=$db->select($query);
	if($result)
	{
	while ($row =$result->fetch_assoc()) {
	$messageTime = date('g:ia', $row['messagetime']);

	echo '<p><strong>' . $row['username'] . '</strong>: <em>(' . $messageTime . ')</em> ' . $row['message'] . '</p>';
    }
    }
    else
    {
    	echo $result;
    }

    ?>