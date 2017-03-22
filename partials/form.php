<!-- Header video background -->
<video id="bgVid" playsinline autoplay muted>
 <source src="img/marvel-opening-sequence.mp4" type="video/mp4">
</video><!-- end Header video -->


<!-- Title,nav button and arrow -->
<div class="center" id="title">
  <h1>The Marvel Movie Form</h1>


  <div class="row center">
    <a href="#content"><button class="banner button center">Go to form</button></a><br>
    <svg class="arrows">
      <path class="a1" d="M0 0 L30 32 L60 0"></path>
      <path class="a2" d="M0 20 L30 52 L60 20"></path>
      <path class="a3" d="M0 40 L30 72 L60 40"></path>
    </svg>
  </div>
</div>

<!-- Marvel Banner -->
<div class="center" id="marvel-banner"><img src="img/marvel-banner.jpg"></div>

<!-- Container for parallax image -->
<div class="parallax-container">
    <div class="parallax"><img src="img/the-avengers.jpg"></div>
</div>
  
<!-- Outer div -->
<div id="bg">

  <!-- Content container  -->
  <div class="container" id="content">

    <!-- Form begins here -->
    <div class="row">
      <form method="POST" action="index.php#form" onsubmit="return validate()" class="col s12 offset-m2 m10 offset-l2 l10"  id="form">


        <!-- Name div -->
        <div class="row">
          <div class="input-field col s12 m8 l6">
            <i class="material-icons prefix">account_circle</i>
            <input id="name" type="text" data-length="40" onfocus="clearName()" name="name" value="<?= !empty($name)?$name:''; ?>">
            <label for="name" class="active">Name</label>
          </div><br>
          <div class="input-field col offset-s2 s10 m4 l4 error" id="nameMsg"><?=!empty($error['name'])?$error['name']:'';?></div>
        </div><!-- end Name div -->


        <!-- Address div -->
        <div class="row">
          <div class="input-field col s12 m8 l6">
            <i class="material-icons prefix">home</i>
            <textarea type="text" id="address" name="address" placeholder="Enter your address" class="materialize-textarea" data-length="200" onfocus="clearAddress()"><?= !empty($address)?$address:''; ?></textarea>
            <label for="address" class="active">Address</label>
          </div><br><br>
          <div class="input-field col offset-s2 s10 m4 l4 error" id="addressMsg"><?=!empty($error['address'])?$error['address']:'';?></div>
        </div><!-- end Address div -->
        

        <!-- Email div -->
        <div class="row">
          <div class="input-field col s12 m8 l6">
            <i class="material-icons prefix">email_circle</i>
            <input id="email"  data-length="100" name="email" value="<?= !empty($email)?$email:''; ?>" onfocus="clearEmail()">
            <label for="email" class="active">Email</label>
          </div><br>
          <div class="col offset-s2 s10 m4 l4 error" id="emailMsg"><?=!empty($error['email'])?$error['email']:'';?></div>
        </div><!-- end Email div -->


        <!-- DOB div -->
        <div class="row">
          <div class="input-field col s12 m8 l6">
            <i class="material-icons prefix">perm_contact_calendar</i>
            <input type="date" name="date" class="input-field datepicker" id="date" placeholder="Enter your Date of Birth" value="<?= !empty($date)?$date:''; ?>" onfocus="clearDateOfBirth()">
            <label for="date">Date of birth</label>
          </div><br>
          <div class="col offset-s2 s10 m4 l4 error" id="dateOfBirthMsg"><?=!empty($error['date'])?$error['date']:'';?></div>
        </div><!-- end DOB div -->


        <!-- Age div -->
        <div class="row">
          <div class="input-field col s2 m4 l2">
            <i class="material-icons prefix">hourglass_empty</i>
            <input type="text" name="age" id="age" value="<?= !empty($age)?$age:''; ?>" onfocus="clearAge()">
            <label for="age" class="active">Age</label>
          </div><br>
          <div class="input-field col offset-s2 s10 m4 l4 error" id="ageMsg"><?=!empty($error['age'])?$error['age']:'';?></div>
        </div><!-- end Age div -->


        <!-- Gender div -->
        <div class="row">
          <div class="col s12 m12 l12">
            <!-- Gender label -->
            <label class="active">Select your Gender</label>
          </div><br>
        </div>

        <!-- Gender options -->
        <div class="row">
          <!-- Male radio button -->
          <div class="col s6 m3 l2">
            <i id="male-icon"><img src="img/male-icon-red.png"></i><br>
            <input class="with-gap" name="gender" type="radio" value="male" id="male" onclick="clearGender()"<?= ($gender == 'male')? ' checked': ''; ?>>
            <label for="male">Male</label>
          </div>

          <!-- Female radio button -->
          <div class="col s6 m3 l2">
            <i id="female-icon"><img src="img/female-icon-red.png"></i><br>
            <input class="with-gap" name="gender" type="radio" value="female" id="female" onclick="clearGender()" <?= ($gender == 'female')? ' checked': ''; ?>>
            <label for="female">Female</label>
          </div>

          <!-- Other gender radio button -->
          <div class="col s6 m3 l2">
            <span id="neutral-icon"><img src="img/neutral-icon-red.png"></span><br>
            <input class="with-gap" name="gender" type="radio" value="other" id="other" onclick="clearGender()" <?= ($gender == 'other')? ' checked': ''; ?>>
            <label for="other">Other</label>
          </div><br>
          <div class="input-field col offset-s2 s10 m2 l2 error" id="genderMsg"><?=!empty($error['gender'])?$error['gender']:'';?></div>
        </div><br><!-- end Gender div -->


        <!-- Favourite Movie div -->
        <div class="row">
          <div class="col s12 m6 l6">
            <!-- Movie label --><i class="material-icons prefix">movie</i>
            <label class="active center">Marvel Movies</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s10 m8 l8">

            <select name="movies" onchange="clearMovie()" id="movie"><!-- Drop down options for movies -->
              <option disabled <?= ($movies == '') ? ' selected' : ''; ?>>Pick your favourite Marvel movie</option>
              <option value="Deadpool" <?= ($movies == 'Deadpool') ? ' selected' : ''; ?>>Deadpool</option>
              <option value="Fantastic Four" <?= ($movies == 'Fantastic Four') ? ' selected' : ''; ?>>Fantastic Four</option>
              <option value="Dr Strange" <?= ($movies == 'Dr Strange') ? ' selected' : ''; ?>>Dr Strange</option>
              <option value="Guardians of the Galaxy" <?= ($movies == 'Guardians of the Galaxy') ? ' selected' : ''; ?>>Guardians of the Galaxy</option>
              <option value="Hulk" <?= ($movies == 'Hulk') ? ' selected' : ''; ?>>Hulk</option>
              <option value="Iron Man" <?= ($movies == 'Iron Man') ? ' selected' : ''; ?>>Iron Man</option>
              <option value="Captain America - Civil War" <?= ($movies == 'Captain America - Civil War') ? ' selected' : ''; ?>>Captain America - Civil War</option>
              <option value="Logan" <?= ($movies == 'Logan') ? ' selected' : ''; ?>>Logan</option>
              <option value="Spiderman" <?= ($movies == 'Spiderman') ? ' selected' : ''; ?>>Spiderman</option>
              <option value="X2 - X-men United" <?= ($movies == 'X2 - X-men United') ? ' selected' : ''; ?>>X2 - X-men United</option>
              <option value="The Avengers" <?= ($movies == 'The Avengers') ? ' selected' : ''; ?>>The Avengers</option>
              <option value="Thor" <?= ($movies == 'Thor') ? ' selected' : ''; ?>>Thor</option>
            </select>
          </div>
          <div class="input-field col offset-s2 s10 m4 l4 error" id="movieMsg"><?=!empty($error['movie'])?$error['movie']:'';?></div>
        </div><!-- end Favourite Movie div -->


        <!-- Submit and Clear buttons -->    
        <div class="row center">
          <!-- Submit button -->
          <div class="col s12 offset-m2 m3 offset-l2 l2">
            <button class="waves-effect waves-light btn" type="submit">Submit<i class="material-icons right">send</i></button><!-- end Submit button -->
          </div>

          <!-- Clear button -->
          <div class="col s12 m3 l2">
            <button class="red lighten-2 waves-effect waves-light btn" onclick="resetForm()" type="button" value="Reset Form">Clear Form</button><!-- end Clear button -->
          </div>
        </div><!-- end row -->


      </form><!-- end Form -->
    </div><!-- end Form row  -->
  </div><!-- end Content container -->
</div><!-- end Outer div -->