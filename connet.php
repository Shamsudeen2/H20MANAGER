<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "H02manager";


$conn = new mysqli ($server, $username, $password, $dbname);
 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 echo "Connected successfully";



?>