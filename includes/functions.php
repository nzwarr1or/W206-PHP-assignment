<?php

// //All functions are called from this page

function dd($data) {
    die(var_dump($data));
}

function escape($value) {
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}


//Functions to validate fields

function validName($name) {
	// Check user has entered a value 
	if (empty($name)) {
		// Return a message to enter a value into the field
		return "[PHP]Required field";
	}
	// Check address entered has less than 40 characters
	elseif(strlen($name) > 40){
		// Return a message with character limits
		return "[PHP]Maximum characters is 40";
	}
	return false;
}

//      ***** Check Address Validation *****

function validAddress($address) {
  
  // Check user has entered a value    
  if (empty($address)) {
    // Return a message to enter a value into the field
    return "[PHP]Required field";
  }
  // Check address entered has less than 200 characters
  elseif (strlen($address) > 200) {
  	// Return a message with character limits
    return "[PHP]Maximum characters is 200"; 
  }
  return false;
}


//      ***** Check Email Validation *****

function validEmail($email) {
 
  // Check user has entered a value
  if (empty($email)) {
    // Return a message to enter a value into the field
    return "[PHP]Required field";
  }
  // Check email address entered has less than 100 characters
  elseif (strlen($email) > 100) {
    // Return a message with character limits 
    return "[PHP]Maximum characters is 100"; 
  }
  // Test if the email address entered is valid
  elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    // Return a message to enter a valid email address
    return "[PHP]Please re-enter a vaild email address";
  }
  return false;
}



//     ***** Check Date of Birth Validation *****

function validDateofBirth($date) {
    if (empty($date)) {
        return '[PHP]Date of Birth is required.';
    }
 
    if (!checkDateManually($date)) {
        return '[PHP]Please enter a correct Date of Birth.';
    }
 
    if (DateTime::createFromFormat('Y-m-d', $date)) {
        $date = DateTime::createFromFormat('Y-m-d', $date);
    }
    else if (DateTime::createFromFormat('Y/m/d', $date)) {
        $date = DateTime::createFromFormat('Y/m/d', $date);
    }
    else if (DateTime::createFromFormat('d-m-Y', $date)) {
        $date = DateTime::createFromFormat('d-m-Y', $date);
    }
    else if (DateTime::createFromFormat('d/m/Y', $date)) {
        $date = DateTime::createFromFormat('d/m/Y', $date);
    }
    else {
        return 'Please enter a correct Date of Birth.';
    }
 
    $time = new DateTime('now');
    $today = new DateTime('now');
 
    $date150YearsAgo = DateTime::createFromFormat('Y-m-d', $time->modify('-150 Year')->format('Y-m-d'));
 
    $chosenDate = $date->format('Y-m-d');
    $chosenDay = $date->format('d');
    $chosenMonth = $date->format('m');
    $chosenYear = $date->format('Y');
    $todaysDate = $today->format('Y-m-d');
    $minDate = $date150YearsAgo->format('Y-m-d');
 
    if ($chosenDate <= $minDate){
        return 'We really don\'t think you were born more than 150 years ago.';
    }
    else if ($chosenDate >= $todaysDate){
        return 'You cannot be born after today.';
    }
    else if (!checkdate($chosenMonth, $chosenDay, $chosenYear)) {
        return 'Please enter a correct Date of Birth.';
    }
 
    return false;
}

function checkDateManually($date) {
    $dateArray = [];
 
    if(strpos($date, '/') !== false) {
        $dateArray = explode("/", $date);
    }
    else if(strpos($date, '-') !== false){
        $dateArray = explode("-", $date);
    }
 
    if (empty($dateArray)) {
        return false;
    }
 
    if($dateArray && count($dateArray) === 3 && (int)$dateArray[0] > 0 && (int)$dateArray[1] > 0 && (int)$dateArray[2] > 0) {
        if (checkdate($dateArray[1], $dateArray[2], $dateArray[0])) {
            return true;
        } else if (checkdate($dateArray[1], $dateArray[0], $dateArray[2])) {
            return true;
        }
        return false;
    }
 
    return false;
}


//      ***** Check Age Validation *****

function validAge($age) {
  
  // Check user has entered a value
  if (empty($age)) {
    // Return a message to enter a value into the field
    return "[PHP]Required field"; 
  }
  // Check the age is a number
  elseif (is_nan($age)) {
  // Return a message to enter a number into the field
    return "[PHP]Please enter your age as a <u>number</u>";
  }
  // Check to see if age is greater than 0
  elseif (($age) < 0) {
    // Return a message with character limits    
    return "[PHP]Go back to the future!";
  }
  // Check the age entered is less than 150 years
  elseif (($age) > 150) {
    // Return a message with character limits    
    return "[PHP]You are too old to be on the internet!";
  }
  return false;
}


//      ***** Check Gender Validation *****

function validGender($gender) {

  $selectedGender = $gender;
  
  if(empty($selectedGender)){

  return "[PHP]Select a gender";
  }
  return false;
} 

//      ***** Check Movie Validation *****

function validMovie() {

  

   if (empty($movie)) {

    return "[PHP]Select a movie from the dropdown list";
    }
  return false;
  }