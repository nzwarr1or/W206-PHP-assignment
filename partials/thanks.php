<?php 
include 'header.php';
?>

<div class="container" id="thanks">
	<div class="row">
		<div class="col s12 offset- m12 offset-l2 l4">
			<img src="img/marvel-banner.jpg">
		</div>
	</div>
	<div class="row">
		<div class="col s12 offset-3 m4 offset-l3 l4">
  		<h4> Thanks for the feedback <span><?= $name ?></span></h4>
		<h4>We will reply to <span><?= $email ?></span><br>if we need to follow up.</h4>
		<a href="index.php">Return to form</a>
	</div>
  	</div>
</div>



<?php 
include 'footer.php'; 
?>