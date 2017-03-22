<!-- Materialize jquery/js -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

<!-- Main.js -->
<!-- <script type="text/javascript" src="js/main.js"></script> -->

<script>// //Materialize dropdown feature
$(document).ready(function() {
  $('select').material_select();
});

$(document).ready(function() {
  Materialize.updateTextFields();
});

var today = new Date();

today.setFullYear( today.getFullYear() - 150 );

$('.datepicker').pickadate({
      selectMonths: true,
      selectYears: 150,
      format: 'dd/mm/yyyy',
      min: today,
      max: new Date()
});

$(document).ready(function(){
  $('.parallax').parallax();
});

// Reset Form fields to default
function resetForm() {
  document.getElementById("form").reset();
  $('select').material_select('destroy');
  $('select').material_select();

  clearName()
  clearAddress()
  clearEmail()
  clearDateOfBirth()
  clearAge()
  clearGender()
  clearMovie()
}

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
      }, 2200, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

</script>

</body>
</html>