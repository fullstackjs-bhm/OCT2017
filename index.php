<?php 
  require('includes/header.php');
?>
    <!-- Container content -->
    	<div class="container">
    	 	<div class="row">
    	 		<div class="col-12 col-md-6">
    	 			<h2 class="col-12 text-center mt-3 underline">WHAT IS FULL STACK?</h2>
    	 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit at culpa veniam voluptatem aut cumque mollitia delectus. Deserunt incidunt totam minus aliquid, commodi id. Consequuntur quaerat illum harum quis pariatur.</p>
    	 	  </div>
    	 	  <div class="col-12 col-md-6">
    	 			<h2 class="col-12 text-center mt-3 underline">WHO IS FULL STACK FOR?</h2>
    	 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit at culpa veniam voluptatem aut cumque mollitia delectus. Deserunt incidunt totam minus aliquid, commodi id. Consequuntur quaerat illum harum quis pariatur.</p>
    	 	  </div>
    	 	</div>
    	</div> 

      <!-- FLT Banner -->
      <div class="container fltBanner">
        <div class="row">
          <div class="toolBrands text-center">
            <h1 class="text-center">Other Frameworks Libraries &amp; Tools</h1>
            <img class="img-fluid" src="img/assets/bootstrap.jpg" alt="Twitter Bootstrap">
            <img class="img-fluid" src="img/assets/filezilla.jpg" alt="Filezilla">
            <img class="img-fluid" src="img/assets/github.jpg" alt="GitHub">
            <img class="img-fluid" src="img/assets/jquery.jpg" alt="jQuery">
            <img class="img-fluid" src="img/assets/wordpress.jpg" alt="WordPress">
          </div>
        </div>
      </div>

     <!-- infoArea&form -->
      <div class="container-fluid mt-5 infoArea"> 
       <div class="row">
          <div class="col-12 col-md-6 tests mt-2">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quisquam vel, <br> unde cupiditate. Voluptates consequuntur eos atque sequi quas unde at sed, veritatis, eligendi tempora earum quo, facilis vero quis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, voluptates dicta rerum hic esse numquam, provident incidunt obcaecati sint sequi quasi magnam ducimus atque earum ea cumque ipsa accusamus voluptas!</p>
          </div>

          <div class="col-12 col-md-6 text-center form">
            <h2>Want More Info?</h2>
            <h2><span>Complete This Form!</span></h2>
            <form action="scripts/sendContact.php" method="POST">
              <input class="col-12 mt-1 name" placeholder="name" type="text" name="firstname">
              <input class="col-12 mt-1  email" placeholder="email" type="text" name="email">
              <input class= "col-12 mt-1 btn btn-success text-center" type="submit" value="Submit">
            </form>  
          </div>
        </div>
      </div> 

    <!-- event section -->
      <div class="container events">
        <div class="row mt-5">
         <h2 class="col-12 text-center">Upcoming Events</h2>
          <hr>
            <div class="col-md-6 events">
              <h3 class="event-title text-center">Meet &amp; Greet<span class="blue"> | </span><span class="date">Lorem</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita maiores accusamus hic assumenda eum dolorem. Sequi, delectus cumque? Doloribus sint, iusto magni soluta excepturi cum eveniet explicabo officia totam repellendus?</p>
            </div>
            <div class="col-md-6 events">
              <h3 class="event-title text-center">Meet &amp; Greet<span class="blue"> | </span><span class="date">Lorem</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita maiores accusamus hic assumenda eum dolorem. Sequi, delectus cumque? Doloribus sint, iusto magni soluta excepturi cum eveniet explicabo officia totam repellendus?</p>
            </div>
        </div>
      </div>

      <hr>
      
  <!-- git hub banner -->
  <div class="bottomBanner">
    <div class="container-fluid">
      <div class="col-12">
        <h1 class="text-center">Visit our GitHub Page! <br>Click Below</h1>
        <h1 class="arrow text-center">&#x21E3;</h1>
        <a href="https://github.com/fullstackjs-bhm/OCT2017" target="_blank"><img class="img-fluid" src="img/assets/GitHub image.png"></a>
      </div>
    </div>
  </div>

<?php
  require('includes/footer.php');
?>  	


