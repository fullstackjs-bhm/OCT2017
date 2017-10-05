<?php 
	require('includes/header.php');
?>

<div class="container contact-content">
	<div class="row mb-4">
		<div class="col-12 col-md-6 contact-input">
			<form class="form-group" action="scripts/sendContact.php" method="POST" >
				<input class="col-12 col-md-8 d-block my-2 mx-auto" type="text" name="firstname" placeholder="Your Name" required />
				<input class="col-12 col-md-8 d-block mx-auto" type="email" name="email" placeholder="Email Address" required />
				<textarea rows="8" class="col-12 col-md-8 d-block my-2 mx-auto" name="contactMsg" placeholder="Enter Your Message Here..."></textarea>
				<input class="d-block col-12 col-md-8 btn btn-success mx-auto"  type="submit" value="Send" />
			</form>
		</div>
		<div class="col-12 col-md-6 p-4">
			

			<div>
				<img src="img/founder.png" class="img-fluid my-3"><img src="img/founder.png" class="img-fluid my-3"><img src="img/founder.png" class="img-fluid my-3">

				<p>If any individual desires to change careers or take on a new challenge in the information technology industry as a web developer, well this is the course that makes it possible! If you have any additional questions, please complete our contact form for additional information.</p>
				
				<img src="img/founder.png" class="img-fluid my-3"><img src="img/founder.png" class="img-fluid my-3"><img src="img/founder.png" class="img-fluid my-3">
			</div>
		</div>
	</div>
	<!-- Banner -->
	<div class="row">
		<div class="col-12 text-center contact-banner">
			<h1>We look forward to seeing you in class!</h1>
		</div>
	</div>
</div>

<?php 
	require('includes/footer.php');
?>