alert('hello');
<?php

$username=$_GET['username'];
include 'database.php';
$db=new database();
$query=INSERT INTO user (username) Values('$username');
$insert=$db->insert_data($query);
?>