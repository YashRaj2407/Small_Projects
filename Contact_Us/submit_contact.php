<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$data = "Name: $name<br>Email: $email<br>Message: $message<br><hr>";


echo "<h2>Thank you, $name!Your message has been received!</h2>";


?>
