<?php
session_start(); // Start the session to store form data

// Store form data in session variables
$_SESSION['condition'] = $_POST['condition'];
$_SESSION['type'] = $_POST['type'];
$_SESSION['door'] = $_POST['door'];
// Store other form fields as needed

// Redirect back to index.html after processing
header("Location: index.html");
exit(); // Make sure no further code is executed
?>

