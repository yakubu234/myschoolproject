<?php
error_reporting(0);
session_start();
ob_start();
$servername ="localhost";
$username ="root";
$password ="";
$db_name ="securedhms";
$conn = new Mysqli($servername, $username, $password, $db_name);
if ($conn-> connect_errno)
{
	die("connection failed:".$conn->connect_error);
}else
{
	//echo "database connected successfully";
}
?>