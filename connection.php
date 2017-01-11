<?php
 
 
function Connect()
{
 $dbhost = "127.0.0.1: 3306";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "responses";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>