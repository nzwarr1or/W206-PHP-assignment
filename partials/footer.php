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
      min: today,
      max: new Date()
});

$(document).ready(function(){
  $('.parallax').parallax();
});
</script>

</body>
</html>