<?php
error_reporting(0);
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "help";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("<center><h2>Database Connection Failure : " . $conn->connect_error . "</h2><hr> if you think this is a false error Please do let us know on one of the followings: <br> Email: complain@bewithmetech.com.ng <br> Call or Whatsapp: +2349039016969 <br> Website: www.bewithmetech.com.ng</center>");
} 
?>