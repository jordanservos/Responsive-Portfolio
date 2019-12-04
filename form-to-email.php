<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "jordan.r.servos@outdoorful.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an email from ".$name.".\n\n".$message;

mail($mailTo, $message, $txt, $headers);
header("Location: index.php?mailsend");

}


   
?> 