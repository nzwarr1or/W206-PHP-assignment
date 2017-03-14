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


// Check name has more than two characters and a space between names
function checkName() {

  name = document.getElementById('name').value;
    
  if (name == "" || name.indexOf >40) {
  
  document.getElementById('nameCheck').innerHTML = "Required field - Name must be under 40 characters";
  
  return false;

  }

return true;

}


// Check address

function checkaddress() {

  address = document.getElementById('address').value;
    
  if (address == "" || address.indexOf >200) {
  
  document.getElementById('addressCheck').innerHTML = "Required field - Address must be under 200 characters";
  
  return false;

  }

return true;

}



function checkage() {

  age = document.getElementById('age');
    
  if (age == "" || age <150) {
  
  document.getElementById('ageCheck').innerHTML = "Required field - You are too old to be on the the internet";
  
  return false;

  }

return true;



function checkDateOfBirth() {

  dateOfBirth = document.getElementById('dateOfBirth').value;
    
  if () {
  
  document.getElementById('dateOfBirthCheck').innerHTML = "Required field";
  
  return false;

  }

return true;



function checkGender() {

  gender = document.getElementById('gender');
    
  if (gender ) {
  
  document.getElementById('genderCheck').innerHTML = "Required field";
  
  return false;

  }

return true;








}










// Modal function
$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});



function checkEmail() {

  var email = document.getElementById('email');
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (!filter.test(email.value)) {
  
  document.getElementById('emailerror').innerHTML = "Please re-enter a <span>VALID</span> email address";
    
  return false;

  }

return true;

}


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