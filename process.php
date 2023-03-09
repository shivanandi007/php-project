<?php
session_start();

// Get the form data from the session
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$address = $_SESSION['address'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];

// TODO: Insert the form data into a database or send it via email

// Display a thank you message
echo "<h1>Thank You!</h1>";
echo "<h2>name</h2>";
echo "<p>Your form has been submitted.</p>";

// Clear the session data
session_unset();
session_destroy();
?>
