<?php 
  require('includes/header.php');
  require('scripts/db-config.php');

  $date = new DateTime();

  $sql = 'SELECT event_name, event_description, event_date FROM fsevents WHERE event_date > NOW() LIMIT 5';

  $statement = $conn->prepare($sql);
  $statement->execute();
  $events = $statement->fetchAll();
  $statement->closeCursor();



?>
 <!--- events -->

 <div class="container-fluid">

 	<div class="container my-5">
 		<div class="row">
 			<?php foreach ($events as $event) { ?>
 				
 			<div class="col-md-2 col-12 mb-2 dateBox"> 
 					<div class="col-12 text-center mt-2 month"><h2><?php $date = date_create($event['event_date']); echo date_format($date, 'M'); ?></h2></div>
 					<div class="col-12 text-center day"><p><?php $date = date_create($event['event_date']); echo date_format($date, 'd'); ?></p></div>
 			</div>
 			<div class="col-md-10 col-12 eventText pt-4">
 				<h3><?php echo $event['event_name']; ?></h3>
 				<p><?php echo $event['event_description']; ?></p>
 			</div>

 			<?php } ?>
 		</div>
 	</div>
 </div>


<?php
  require('includes/footer.php');
?>  	
