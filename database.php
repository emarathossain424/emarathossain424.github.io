<?php
include 'config.php';
class database
{
public $host=DBHOST;
public $user=DBUSER;
public $pass=DBPASS;
public $db_name=DBNAME;
public $link;
public $error;

function __construct()
{
$this->connectDB();
}

private function connectDB()
{
	$this->link=new mysqli($this->host,$this->user,$this->pass,$this->db_name);
	if(!$this->link)
	{
		$this->error=$this->link->connect_error;
		echo $this->error;
	}
}
public function insert_data($query)
{
	$this->link->query($query);
	if(!$this->link)
	{
		$this->error=$this->link->connect_error;
		echo $this->error;
	}

}

public function select($query)
{
	$result=$this->link->query($query);
	if(!$this->link)
	{
		$this->error=$this->link->connect_error;
		echo $this->error;
		return $this->error;
	}
	else
	{
		if($result->num_rows>0)
		{
			return $result;
		}
		else
		{
			return false;
		}
	}
}

}


?>