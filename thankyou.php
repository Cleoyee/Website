<?php
 
require 'connection.php';

/*
Following errors on the lines 15, 16 and 17
Notice: Undefined index: your_name in C:\xampp\htdocs\Website\thankyou.php on line 15

Notice: Undefined index: your_email in C:\xampp\htdocs\Website\thankyou.php on line 16

Notice: Undefined index: subject in C:\xampp\htdocs\Website\thankyou.php on line 17

*/
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