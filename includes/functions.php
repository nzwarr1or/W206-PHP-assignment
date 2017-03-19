<?php

// //All functions are called from this page

// function dd($data) {
//     die(var_dump($data));
// }

// function escape($value) {
// 	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
// }

// //define variables and set to empty values
// $name = $address = $email = $dob = $age = $gender = $movies = '';

// // Add data from form
// $name = $_POST['name'];
// $address = $_POST['address'];
// $email = $_POST['email'];
// $dob = $_POST['dateOfBirth'];
// $age = $_POST['age'];
// $gender = $_POST['gender'];
// $movies = $_POST['movies'];

// //Check input data is valid
// $errors = [];

// function validate() {

// 	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// 	if (empty($_POST["name"])) {
// 	  $errors['name'] = "Name is required";
// 	}

// 	if (empty($_POST["address"])) {
// 	  $errors['address'] = "Address is required";
// 	}

// 	if (empty($_POST["email"])) {
// 	  $errors['email'] = "Email is required";
// 	}
// 	else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
// 	  $errors['email'] = "Please enter a valid email address";
// 	}

// 	if (empty($_POST["dateOfBirth"])) {
// 	  $errors['dob'] = "Email is required";
// 	}

// 	if (empty($_POST["age"])) {
// 	  $errors['age'] = "Age is required";
// 	}

// 	if (empty($_POST["gender"])) {
// 	  $errors['gender'] = "Gender is required";
// 	}

// 	if (empty($movies["movies"])) {
// 	  $errors['movies'] = "Movies is required";
// 	}

// 	if (!empty($errors)) {
// 	  require 'thanks.php';
// 	  dd();
// 	}
// }