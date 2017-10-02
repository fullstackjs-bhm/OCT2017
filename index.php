<?php 
  require('includes/header.php');
?>
    <!-- Container content -->
    	<div class="container">
    	 	<div class="row">
    	 		<div class="col-12 col-md-6">
    	 			<h2 class="col-12 text-center mt-3 underline">WHAT IS FULL STACK?</h2>
    	 			<p>The Full Stack Coding program is a fifteen week immersive course in web development. It has been designed to aid participants in gaining the skills necessary to secure an entry-level position as a web developer in today’s job market. The training is focused on HTML, CSS, JavaScript MySQL, and PHP, as these languages are some core fundamental languages to develop for the World Wide Web.</p>
            <p>By this course being a part of JSCC Career Development Department students Do Not receive credit hours towards any academics or college courses of any kind. This is a course strictly for personal growth and development of all individuals who desire to attend the Full Stack Coding training.
            </p>
    	 	  </div>
    	 	  <div class="col-12 col-md-6">
    	 			<h2 class="col-12 text-center mt-3 underline">WHO IS FULL STACK FOR?</h2>
    	 			<p>If any individual desires to change careers or take on a new challenge in the information technology industry as a web developer, well this is the course that makes it possible. One can acquire the necessary knowledge very quickly, without two and four years of normal academic commitment, and gain the skills they will need to pursue an ever growing and expanding career in the world of Information Technology.</p>

            <p>With entry-level salaries starting at $40k per year, web development has become one of the most highly sought after skills today. Employers are always looking for new talent in this field, as it is and will be in-demand a great deal as we progress in the future.</p>
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
        <div class="container"> 
         <div class="row">
            <div class="col-12 col-md-6 tests mt-2">
              <h2>You Can Code Too!</h2>
              <p>Ever wonder what it would be like to harness the web at your finger tips? Want to demystify what computer programming or coding is? Join us in the Full Stack Program! Want some one to contact you?</p>
              <p>
                Don't let HTML, CSS, and JS remain foreign to you. Learn to process information also know as "data" using PHP &amp; MySQL today.
              </p>
            </div>

            <div class="col-12 col-md-6 text-center form">
              <h2>Want More Info?</h2>
              <h2><span>Complete This Form!</span></h2>
              <form action="scripts/sendContact.php" method="POST">
                <input class="col-12 name" placeholder="Name" type="text" name="firstname">
                <input class="col-12 my-2  email" placeholder="Email Address" type="text" name="email">
                <input class= "col-12 btn btn-success text-center" type="submit" value="Submit">
              </form>  
            </div>
          </div>
        </div>
      </div> 

    <!-- event section -->
      <div class="container events">
        <div class="row mt-5">
         <h2 class="col-12 text-center">Upcoming Events</h2>
          <hr>
            <div class="col-md-5 ml-md-auto events">
              <h3 class="event-title text-center">Meet &amp; Greet<span class="blue"> | </span><span class="event-date">Oct. 10<sup>th</sup> @ 7pm</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita maiores accusamus hic assumenda eum dolorem. Sequi, delectus cumque? Doloribus sint, iusto magni soluta excepturi cum eveniet explicabo officia totam repellendus?</p>
            </div>
            <div class="col-md-5 ml-md-auto events">
              <h3 class="event-title text-center">Peer Program<span class="blue"> | </span><span class="event-date">Oct. 30<sup>th</sup> @ 7pm</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita maiores accusamus hic assumenda eum dolorem. Sequi, delectus cumque? Doloribus sint, iusto magni soluta excepturi cum eveniet explicabo officia totam repellendus?</p>
            </div>
        </div>
      </div>

      <hr>
      
  <!-- git hub banner -->
  <div class="bottomBanner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="text-center">Visit our GitHub Page! <br>Click Below</h1>
          <h1 class="arrow">&#x21E3;</h1>
          <a class="d-block" href="https://github.com/fullstackjs-bhm/OCT2017" target="_blank"><img class="img-fluid" src="img/assets/GitHub image.png"></a>
        </div>
      </div>
    </div>
  </div>

<?php
  require('includes/footer.php');
?>  	


