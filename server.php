<?php
session_start();

// Set email and password
$email = 'johnsmith@gmail.com';
$password = '1234';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get email and password from the form
	$form_email = $_POST['email'];
	$form_password = $_POST['password'];

	// Check if the email and password match the values
	if($form_email == $email && $form_password == $password) {
	
		$_SESSION['email'] = $email;

		header('Location: login.php');
		exit;
	} else {
		echo 'Invalid email or password.';
	}
}

// redirect to the login page once logged in
if(isset($_SESSION['email'])) {
	header('Location: login.php');
	exit;
}

?>