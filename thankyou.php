<?php
 
require 'connection.php';

$conn = Connect();
$your_name = $conn->real_escape_string($_POST['your_name']);  
$your_email = $conn->real_escape_string($_POST['your_email']);
$subject = $conn->real_escape_string($_POST['subject']);
$message = $conn->real_escape_string($_POST['message']);
$query = "INSERT into contact_form (your_name, your_email, subject, message) 
VALUES('" . $your_name . "','" . $your_email . "','" . $subject . "','" . $message . "')";

$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't ente
     data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Me <br>";
 
$conn->close();
 
?>