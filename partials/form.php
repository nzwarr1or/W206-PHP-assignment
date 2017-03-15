<?php

require 'includes/functions.php';

?>


<!-- Main Header image w/ nav button and arrow -->
<div class="row center" id="splash">
  <a href="#form"><button class="button center">Go to form</button></a><br>
  <svg class="arrows">
    <path class="a1" d="M0 0 L30 32 L60 0"></path>
    <path class="a2" d="M0 20 L30 52 L60 20"></path>
    <path class="a3" d="M0 40 L30 72 L60 40"></path>
  </svg>
</div>

<!-- Marvel Banner -->
<div class="center" id="marvel-banner"><img src="img/marvel-banner.jpg"></div>


<!-- Outer Div for background -->
<div id="bg">

  <!-- Content container  -->
  <div class="container">

    <!-- Form begins here -->
    <div class="row">
      <form class="col s12 offset-m2 m10 offset-l2 l10" id="form">

      <!-- Name div -->
      <div class="row">
        <div class="input-field col s12 m6 l6">
          <input type="text" class="validate">
          <label for="name" class="active">Name</label>
        </div>
        <div class="input-field col s12 m4 l4" id="nameCheck">
        </div>
      </div><!-- end Name div -->

      <!-- Address div -->
      <div class="row">
        <div class="input-field col s12 m6 l6">
          <textarea type="text" name="address" placeholder="Enter your address" class="materialize-textarea"></textarea>
          <label for="address" class="active">Address</label>
        </div>
        <div class="input-field col s12 m4 l4" id="address-check">
        </div>
      </div><!-- end Address div -->
      
      <!-- Email div -->
      <div class="row">
        <div class="col s12 m6 l6">
          <div class="input-field">
            <input id="email" type="email" class="validate">
            <label for="email" data-error="wrong" data-success="right" class="active">Email</label>            
            </div>
            <div class="col s12 m4 l4" id="email-check">
          </div>
        </div>
      </div><!-- end Email div -->

      <!-- DOB div -->
      <div class="row">
        <div class="col s6 m6 l6">
          <label for="dob" class="input-field">Date of birth</label>
          <input type="date" name="dob" class="input-field datepicker">
          
        </div>
      </div><!-- end DOB div -->

      <!-- Age div -->
      <div class="row">
        <div class="input-field col s2 m2 l2">
          <input type="text" class="validate" id="date">
          <label for="last_name" class="active">Age</label>
          <button onclick="validateDate()">Check</button>
        </div>
        <div class="input-field col s2 m4 l4" id="age-check">
        </div>
      </div><!-- end Age div -->

      <!-- Gender div -->
      <div class="row">
        <div class="col s12 m4 l2">

        <input class="with-gap" name="gender" type="radio" id="male">
        <label for="male">Male</label>
          
        </div>

        <div class="col s12 m4 l2">
          
          <input class="with-gap" name="gender" type="radio" id="female">
          <label for="female">Female</label>
          
        </div>

        <div class="col s12 m4 l2">
          
          <input class="with-gap" name="gender" type="radio" id="other">
          <label for="other">Other</label>
          
        </div>

        <div class="input-field col s2 m4 l4" id="gender">
        </div>
      </div><!-- end Gender div -->


      <!-- Favourite Movie div -->
      <div class="row">
        <div class="col s12 m6 l6">
        <div class="input-field col s12 m6 l6" id="movie">

        <!-- Modal Trigger -->
        <a class="waves-effect waves-light btn-large" href="#movies">Pick your favourite movie</a>

        <div id="movies" class="modal modal-fixed-footer">
          <div class="modal-content">
            <h5 class="center">Select your favourite Marvel movie</h5>

            
            <form>
            <div class="row">
            <div class="col s6 m6 l6">
              <label><img src="img/movie-img/captain-america-the-first-avenger.jpg"></label>
              <label><img src="img/movie-img/fantastic-four.jpg"></label>
              <label><img src="img/movie-img/dr-strange.jpg"></label>
              <label><img src="img/movie-img/guardians-of-the-galaxy.jpg"></label>
              <label><img src="img/movie-img/hulk.jpg"></label>
              <label><img src="img/movie-img/iron-man.jpg"></label>
              <label><img src="img/movie-img/captain-america-civil-war.jpg"></label>
              <label><img src="img/movie-img/logan.jpg"></label>
              <label><img src="img/movie-img/spider-man.jpg"></label>
              <label><img src="img/movie-img/x-men-2.jpg"></label>
              <label><img src="img/movie-img/the-avengers.jpg"></label>
              <label><img src="img/movie-img/thor.jpg"></label>

              </div>
              </div>
            <form>

          </div>
          <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><button type="submit">OK</button></a>
          </div>
        </div>
      </div>
    
      <input type="text" class="validate">
          <label for="movie" class="active">Movie</label>
   

  <!-- Modal Structure -->
  

      <!-- end Favourite Movie div -->






      <!-- submit button -->
      <div class="row center" id="submit">
        <div class="col s12">
          <button class="waves-effect waves-light btn" type="submit">Submit</button>
      </div>
     </div><!-- end submit button -->

    </form><!-- end Form -->

    

  </div><!-- end Container -->


  </div>

</div><!-- end Outer div -->
