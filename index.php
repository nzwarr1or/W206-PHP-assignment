<?php

require 'includes/functions.php';
// define variables and set to empty values
$name = $address = $email = $dob = $age = $gender = $movies = '';


// Add data from form
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$dob = $_POST['dateOfBirth'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$movies = $_POST['movies'];

//Check input data is valid
$error = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (empty($_POST["name"])) {
	  $errors['name'] = "Name is required";
	}

	if (empty($_POST["address"])) {
	  $errors['address'] = "Address is required";
	}

	if (empty($_POST["email"])) {
	  $errors['email'] = "Email is required";
	}

	if (empty($_POST["dateOfBirth"])) {
	  $errors['dob'] = "Email is required";
	}





  // The request is using the POST method
  // This is where you will call your validation code
  //dd($_POST);
}

// HTML

require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';


?>