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
      <form method="POST" action="index.php#form" onsubmit="return validate()" class="col s12 offset-m2 m10 offset-l2 l10"  id="form">


      <!-- Name div -->
      <div class="row">
        <div class="input-field col s12 m6 l6">
          <i class="material-icons prefix">account_circle</i>
          <input id="name" type="text"  data-length="40">
          <label for="name" class="active">Name</label>
        </div>
        <div class="input-field col s12 m4 l4" id="nameMsg"></div>
      </div><!-- end Name div -->


      <!-- Address div -->
      <div class="row">
        <div class="input-field col s12 m6 l6">
        <i class="material-icons prefix">store</i>
          <textarea type="text" id="address" name="address" placeholder="Enter your address" class="materialize-textarea" data-length="200"></textarea>
          <label for="address" class="active">Address</label>
        </div>
        <div class="input-field col s12 m4 l4" id="addressMsg"></div>
      </div><!-- end Address div -->

      
      <!-- Email div -->
      <div class="row">
        <div class="input-field col s12 m6 l6">
          <i class="material-icons prefix">email_circle</i>
            <input id="email" type="email"  class="validate" data-length="100">
            <label for="email" data-error="wrong" data-success="right" class="active">Email</label>
        </div>
        <div class="col s12 m4 l4" id="emailMsg"></div>
      </div><!-- end Email div -->


      <!-- DOB div -->
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <i class="material-icons prefix">perm_contact_calendar</i>
          <input type="date" name="dob" class="input-field datepicker" id="dateOfBirth" placeholder="Enter your Date of Birth">
          <label for="dob">Date of birth</label>
        </div>
        <div class="col s12 m4 l4" id="dateOfBirthMsg"></div>
      </div><!-- end DOB div -->


      <!-- Age div -->
      <div class="row">
        <div class="input-field col s2 m2 l2">
          <input type="text" class="validate" id="age">
          <label for="last_name" class="active">Age</label>
        </div>
        <div class="input-field col s2 m4 l4" id="ageMsg">
        </div>
      </div><!-- end Age div -->


      <!-- Gender div -->
      <div class="row">
        <div class="col s12 m4 l2">
        <!-- Male radio button -->
          <input class="with-gap" name="gender" type="radio" id="male">
          <label for="male">Male</label>
          
        </div>

        <div class="col s12 m4 l2">
          <!-- Female radio button -->
          <input class="with-gap" name="gender" type="radio" id="female">
          <label for="female">Female</label>
        </div>

        <div class="col s12 m4 l2">
          <!-- Other gender radio button -->
          <input class="with-gap" name="gender" type="radio" id="other">
          <label for="other">Other</label>
        </div>
        <div class="input-field col s12 m4 l4" id="genderMsg"></div>
      </div><!-- end Gender div -->


      <!-- Favourite Movie div -->
          
          <div class="row">
            <div class="col s12 m6 l6">
              <div class="input-field col s12 m6 l6" id="movie">
            
                <select>
                  <option><img src="img/movie-img/captain-america-the-first-avenger.jpg"></option>
                  <option><img src="img/movie-img/fantastic-four.jpg"></option>
                  <option><img src="img/movie-img/dr-strange.jpg"></option>
                  <option><img src="img/movie-img/guardians-of-the-galaxy.jpg"></option>
                  <option><img src="img/movie-img/hulk.jpg"></option>
                  <option><img src="img/movie-img/iron-man.jpg"></option>
                  <option><img src="img/movie-img/captain-america-civil-war.jpg"></option>
                  <option><img src="img/movie-img/logan.jpg"></option>
                  <option><img src="img/movie-img/spider-man.jpg"></option>
                  <option><img src="img/movie-img/x-men-2.jpg"></option>
                  <option><img src="img/movie-img/the-avengers.jpg"></option>
                  <option>thor<img src="img/movie-img/thor.jpg"></option>
                </select>

              </div>
            </div>
            <div class="input-field col s2 m4 l4" id="movieMsg">
            </div>
          </div>

          
        </div>
      </div>
    
      

   

  
  

      <!-- end Favourite Movie div -->






      <!-- submit button -->
      <div class="row center">
        <div class="col s12">
          <button class="waves-effect waves-light btn" type="submit">Submit</button>
      </div>
     </div><!-- end submit button -->

    </form><!-- end Form -->

    

  </div><!-- end Container -->


  </div>

</div><!-- end Outer div -->
