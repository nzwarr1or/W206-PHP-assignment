// Date Picker function for calendar

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 240, // Creates a dropdown of 15 years to control year
});

$(document).ready(function(){
    $('.parallax').parallax();
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
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});



// Validation of users input

var submit = document.getElementById('submit');
submit.addEventListener("click", validateInput);

function validateInput () {

  checkname();
  checkaddress();
  checkEmail();
  checkDateOfBirth();
  checkAge();
  checkGender();
  checkMovie();

}


// Check name has less than 40 characters
function checkName() {

  name = document.getElementById('name').value;
    
  if (name == "") {
    document.getElementById('nameCheck').innerHTML = "Required field";
  }

  else if (name.length > 40) {
    document.getElementById('nameCheck').innerHTML = "Maximum characters is 40";
  }
}


// Check address is present and has less than 200 characters
function checkaddress() {

  address = document.getElementById('address').value;
    
  if (address == "") {
    document.getElementById('addressCheck').innerHTML = "Required field";
  }

  else if (address.length > 200) {
    document.getElementById('addressCheck').innerHTML = "Maximum characters is 200";
  }
}


// Check email address is present, valid and has less than 100 characters
function checkEmail() {

  var email = document.getElementById('email').value;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (email == "") {
    document.getElementById('emailCheck').innerHTML = "Required field";
  }

  else if (email.length > 100) {
    document.getElementById('emailCheck').innerHTML = "Maximum characters is 100";
  }

  else if (!filter.test(email)) {
    document.getElementById('emailCheck').innerHTML = "Please re-enter a vaild email address";
  }
}


function checkAge() {

  age = document.getElementById('age').value;
    
  if (age == "" ) {
    document.getElementById('ageCheck').innerHTML = "Required field";
  }

  else if (age >150) {
    document.getElementById('ageCheck').innerHTML = "You are too old to be on the internet!";    
  }
}

/** function checkDateOfBirth()

{ 
  dateOfBirth = document.getElementById('dateOfBirth').value;
  
  if 
  
  document.getElementById('dateOfBirthCheck').innerHTML = "Required field";
  
  return false;
  }

return true;
}

**/

function checkGender() {

  gender = document.getElementBy('gender');
    
  if (('male').checked || ('female').checked) {  
    

  }

}













// Modal function
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