<?php 
	require('includes/header.php');
  require('scripts/db-config.php');

  $date = new DateTime();
  // $dt = $date->setDate(2017,10,1); 
    
  // echo $dt->format('F Y');

  $sql = 'SELECT * FROM alumni ORDER BY lastname';

  $statement = $conn->prepare($sql);
  $statement->execute();
  $users = $statement->fetchAll();
  $statement->closeCursor();



?>

<!-- Alumni Login -->
<div class="container-fluid grey-bg">
	<div class="container alumniLogin">
		<div class="row">
			<label class="col-lg-4 col-md-3 text-center text-md-right" >Alumni Login</label>	
			<form action="index.php" method="POST" class="col-lg-8 col-md-9 form-inline">
				<input class="col-md-3 mx-md-1" type="email" name="email" placeholder="Email Address" required disabled/>
				<input class="col-md-3 mx-md-1 my-1 my-md-0" type="password" name="password" placeholder="Password" required disabled/>
				<input class="col-md-3 text-center mx-md-1 btn btn-success" type="submit" value="Login" disabled/>
			</form>
		</div>
		<hr/>
	</div>
</div>

<!-- Profile Cards Section -->
<div class="container">
  <div class="row">

    <?php foreach($users as $user){ ?>
    <!-- Profile Card -->
    <figure class="cards float-md-left"> 
      <div class="image"> <!-- User Image with text overlay -->
        <img src="<?php echo $user['profile_img_src']; ?>" alt="sample70"/>
        <!-- Bio Info -->
        <p><?php echo $user['short_bio']; ?></p>
      </div>
     
      <figcaption> <!-- Basic Profile Info -->
        <h3><?php echo $user['firstname']; ?></h3>
        <h3><span><?php echo $user['lastname']; ?></span></h3>
        <h5><?php $dt = $date->setDate($user['completion_year'], $user['completion_month'], 1); echo $dt->format('F Y'); ?></h5>
        <div class="icons"> <!-- Links -->
          <a href="<?php echo $user['social_url_1']; ?>" target="_blank">Codepen <i class="fa fa-codepen"></i></a>
          <a href="<?php echo $user['social_url_2']; ?>" target="_blank">Gituhub <i class="fa fa-github"></i></a>
          <a href="<?php echo $user['social_url_3']; ?>" target="_blank">LinkedIn <i class="fa fa-linkedin-square"></i></a>    
        </div>
      </figcaption>
    </figure>

    <?php } ?>
    
  </div>
</div>

<?php 
	require('includes/footer.php');
?>