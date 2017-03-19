//    ***** Validation of users input *****

function validate() {
  // Set variables
  var nameError = checkName();
  var addressError = checkAddress();
  var emailError = checkEmail();
  var dateOfBirthError = checkDateOfBirth();
  var ageError = checkAge();
  var genderError = checkGender();
  var movieError = checkMovie();

  // Check if data entered returns true from validation functions
  if(nameError && addressError && emailError && dateOfBirthError && ageError && genderError && movieError){
    
    document.getElementById("form").submit();
    document.getElementById("form").reset();
    return true;
  }
  return false;
}


//      ***** Check Name Validation *****

function checkName() {
  // Set variables
  name = document.getElementById('name').value;
  // Check user has entered a value
  if (name == "") {
    document.getElementById('nameMsg').innerHTML = "Required field";
    return false; // Return a message to enter a value into the field
  }
  // Check name entered has less than 40 characters
  else if (name.length > 40) {
    document.getElementById('nameMsg').innerHTML = "Maximum characters is 40";
    return false; // Return a message with character limits
  }
  return true;
}


//      ***** Check Address Validation *****

function checkAddress() {
  // Set variables
  address = document.getElementById('address').value;
  // Check user has entered a value    
  if (address == "") {
    document.getElementById('addressMsg').innerHTML = "Required field";
    return false; // Return a message to enter a value into the field
  }
  // Check address entered has less than 200 characters
  else if (address.length > 200) {
    document.getElementById('addressMsg').innerHTML = "Maximum characters is 200";
    return false; // Return a message with character limits
  }
  return true;
}


//      ***** Check Email Validation *****

function checkEmail() {
  // Set variables
  var email = document.getElementById('email').value;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  // Check user has entered a value
  if (email == "") {
    document.getElementById('emailMsg').innerHTML = "Required field";
    return false; // Return a message to enter a value into the field
  }
  // Check email address entered has less than 200 characters
  else if (email.length > 100) {
    document.getElementById('emailMsg').innerHTML = "Maximum characters is 100";
    return false; // Return a message with character limits
  }
  // Test if the email address entered is valid
  else if (!filter.test(email)) {
    document.getElementById('emailMsg').innerHTML = "Please re-enter a vaild email address";
    return false; // Return a message to enter a valid email address
  }
  return true;
}


//      ***** Check Age Validation *****

function checkAge() {
  // Set variables
  age = document.getElementById('age').value;
  // Check user has entered a value
  if (age == "") {
    document.getElementById('ageMsg').innerHTML = "Required field";
    return false; // Return a message to enter a value into the field
  }
  else if (isNaN(age)) {
    document.getElementById('ageMsg').innerHTML = "Please enter your age as a <u>number</u>";
    return false
  }
  // Check to see if age is greater than 0
  else if (age < 0) {
    document.getElementById('ageMsg').innerHTML = "Go back to the future!";    
    return false; // Return a message with character limits
  }
  // Check the age entered is less than 150 years
  else if (age > 150) {
    document.getElementById('ageMsg').innerHTML = "You are too old to be on the internet!";    
    return false; // Return a message with character limits
  }
  return true;
}


//      ***** Check Date of Birth Validation *****

function checkDateOfBirth() {
  // Set variables
  dateOfBirth = document.getElementById('dateOfBirth').value;
  // Check user has entered a value
  if (dateOfBirth == "") {
    document.getElementById('dateOfBirthMsg').innerHTML = "Required field";
    return false; // Return a message to enter a value into the field
  }
  return true;
}

// Set Materialize Date Picker range of 150 years and block future dates 

var today = new Date();

today.setFullYear( today.getFullYear() - 150 );
$('.datepicker').pickadate({
      selectMonths: true,
      selectYears: 150,
      min: today,
      max: new Date()
});


//      ***** Check Gender Validation *****

function checkGender() {
  // Set variables
  var isMaleChecked = document.getElementById('male').checked;
  var isFemaleChecked = document.getElementById('female').checked;
  var isOtherChecked = document.getElementById('other').checked;
  genderMsg="";

  if (!isMaleChecked && !isFemaleChecked && !isOtherChecked) { 
    
    document.getElementById('genderMsg').innerHTML = "Please select a gender";
    return false; // Return a message to select a radio button
    }
  return true;
}


var maleSelected = document.getElementById('male').checked;
var FemaleSelected = document.getElementById('female').checked;
var neutralSelected = document.getElementById('other').checked;


//      ***** Check Movie Validation *****

function checkMovie() {

  selectedMovie = document.getElementById('movie').selectedIndex;

  if (selectedMovie < 0) {
    document.getElementById('movieMsg').innerHTML = "Select a movie from the dropdown list";
    return false;
    }
  return true;
}

// Validate age

// function getAge(dateString) {
//     var today = new Date();
//     var birthDate = new Date(dateString);
//     var age = today.getFullYear() - birthDate.getFullYear();
//     var m = today.getMonth() - birthDate.getMonth();
//     if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
//         age--;
//     }
//     return age;
// }


// function validateDate() {
//     var dob = document.getElementById('date');
//     document.getElementById('ageOutput').innerHTML = getAge(dob.value);
// }


// Reset Form fields to default
function resetForm() {
document.getElementById("form").reset();
}


//      *****  Aesthetic Features  *****


// Parallax function
$(document).ready(function(){
  $('.parallax').parallax();
});

//Materialize dropdown feature
$(document).ready(function() {
  $('select').material_select();
});

$(document).ready(function() {
  Materialize.updateTextFields();
});



// Smooth scrolling feature
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 2500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


// Show Title when intro video ends
var vid = document.getElementById('bgVid');

vid.addEventListener('ended', showTitle());
  function showTitle() {
    document.getElementById('title').style.visibility = "visible";
}



// Clear Error message when data is reentered into field

// Clear Name error message
function clearName() {
  document.getElementById("nameMsg").innerHTML = "";
}

// Clear address error message
function clearAddress() {
  document.getElementById("addressMsg").innerHTML = "";
}

// Clear Email error message
function clearEmail() {
  document.getElementById("emailMsg").innerHTML = "";
}

// Clear Date of Birth error message
function clearDateOfBirth() {
  document.getElementById("dateOfBirthMsg").innerHTML = "";
}

// Clear Age error message
function clearAge() {
  document.getElementById("ageMsg").innerHTML = "";
}

// Clear Gender error message
function clearGender() {
  document.getElementById("genderMsg").innerHTML = "";
}

// Clear Movie error message
function clearMovie() {
  document.getElementById("movieMsg").innerHTML = "";
}