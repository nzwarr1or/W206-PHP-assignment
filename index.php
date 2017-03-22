<?php

require 'includes/functions.php';

//define variables and set to empty values
$name = $address = $email = $dob = $age = $gender = $movies = '';
$error = [];

//The request is using the POST method
if ($_SERVER["REQUEST_METHOD"] === "POST") {

	// Add data from form
	$name = $_POST['name'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$age = $_POST['age'];

	//$gender = $_POST['gender'];
	//$movies = $_POST['movies'];
	$gender = !empty($_POST['gender'])?$_POST['gender'] : '';
	$movies = !empty($_POST['movies'])?$_POST['movies'] : '';

	$error['name'] = validName($name);
	$error['address'] = validAddress($address);
	$error['email'] = validEmail($email);
	$error['date'] = validDateOfBirth($date);
	$error['age'] = validAge($age);
	$error['gender'] = validGender($gender);
	$error['movies'] = validMovie($movies);

	if (!$error['name'] && !$error['address'] && !$error['email'] && !$error['age'] && !$error['date'] && !$error['movies'] && !$error['gender']) {

		

	}

}


// HTML

require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';


?>