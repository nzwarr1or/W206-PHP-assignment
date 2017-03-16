// Date Picker function for calendar

    var today = new Date();

    today.setFullYear( today.getFullYear() - 150 );
    $('.datepicker').pickadate(
    {
      selectMonths: true,
      selectYears: 150,
      min: today,
      max: new Date()
    });


// $(document).ready(function(){
//     $('.parallax').parallax();
// });


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
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


// Validation of users input
function validate() {

  
  var nameError = checkName();
  var addressError = checkAddress();
  var emailError = checkEmail();
  var dateOfBirthError = checkDateOfBirth();
  var ageError = checkAge();
  var genderError = checkGender();
  var movieError = checkMovie();

  if(nameError && addressError && emailError && dateOfBirthError && ageError && genderError && movieError){
    return true;
  }
  return false;
}


// Check name has less than 40 characters
function checkName() {

  name = document.getElementById('name').value;
    
  if (name == "") {
    document.getElementById('nameMsg').innerHTML = "Required field";
    return false;
  }
  else if (name.length > 40) {
    document.getElementById('nameMsg').innerHTML = "Maximum characters is 40";
    return false;
  }
  return true;
}


// Check address is present and has less than 200 characters
function checkAddress() {

  address = document.getElementById('address').value;
    
  if (address == "") {
    document.getElementById('addressMsg').innerHTML = "Required field";
    return false;
  }

  else if (address.length > 200) {
    document.getElementById('addressMsg').innerHTML = "Maximum characters is 200";
    return false;
  }
  return true;
}


// Check email address is present, valid and has less than 100 characters
function checkEmail() {

  var email = document.getElementById('email').value;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (email == "") {
    document.getElementById('emailMsg').innerHTML = "Required field";
    return false;
  }

  else if (email.length > 100) {
    document.getElementById('emailMsg').innerHTML = "Maximum characters is 100";
    return false;
  }

  else if (!filter.test(email)) {
    document.getElementById('emailMsg').innerHTML = "Please re-enter a vaild email address";
    return false;
  }
  return true;
}


function checkAge() {

  age = document.getElementById('age').value;
    
  if (age == "") {
    document.getElementById('ageMsg').innerHTML = "Required field";
    return false;
  }

  else if (age >150) {
    document.getElementById('ageMsg').innerHTML = "You are too old to be on the internet!";    
    return false;
  }
  return true;
}

function checkDateOfBirth() {
 
  dateOfBirth = document.getElementById('dateOfBirth').value;
  
  if (dateOfBirth == "") {
    document.getElementById('dateOfBirthMsg').innerHTML = "Required field";
    return false;
  }
  return true;
}


function checkGender() {

  gender = document.getElementBy('gender');
  if (('male').checked || ('female').checked) { 
    return false;
  }
  return true;
}

$(document).ready(function(){
   // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
   $('.modal').modal();
 });

// Validate age

function getAge(dateString) {
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}


function validateDate() {
    var dob = document.getElementById('date');
    document.getElementById('ageOutput').innerHTML = getAge(dob.value);
}

$(document).ready(function() {
    $('select').material_select();
  });