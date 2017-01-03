<?php
include 'database.php';
$uname=$_GET['username'];
$db=new database();
$query="INSERT INTO users (username) Values('$uname')";
$read=$db->insert_data($query);

?>