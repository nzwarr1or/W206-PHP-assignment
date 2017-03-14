<?php

require 'includes/functions.php';

$name = $address = $email = $dob = $age = $gender = $movies = '';
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // The request is using the POST method
  // This is where you will call your validation code
  dd($_POST);
}

// HTML

require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';


?>