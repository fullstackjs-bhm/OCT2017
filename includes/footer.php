    <!-- Footer -->
      <div class="container-fluid footer">
        <div class="container">
          <div class="row">
            <div class=" col-12 col-md-4 mt-3 footerCol">
              <h2>About</h2>
                <p>The Full Stack Coding program is a fifteen week immersive course in web development. It has been designed to aid participants in gaining the skills necessary to secure an entry-level position as a web developer in today’s job market. The training is focused on HTML, CSS, JavaScript, MySQL, and PHP as these languages are some core fundamental languages to develop for the World Wide Web.</p>
            </div>
            <div class="col-12 col-md-5 mt-3 footerCol">
              <div class="row">
                <h2>Directions</h2>
                <div class="col-6">
                  <a href="https://www.google.com/maps/place/Jefferson+State+Community+College/@33.3855846,-86.7334231,15z/data=!4m2!3m1!1s0x0:0xd4c37f71253fa12?sa=X&ved=0ahUKEwj_vNeZhsTWAhXCTSYKHcpmBBkQ_BIIfDAK" target="_blank"/><img class="img-fluid" src="img/mapss.png" alt=""/></a>
                </div>
                <div class="col-6">
                  <p class="address pt-md-4 text-left">4600 Valleydale Road <br>Birmingham, Alabama 35242 <br>(205) 983-5911 <br /> (800) 239-5900</p>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <a href="https://www.google.com/maps/place/Jefferson+State+Community+College/@33.6525536,-86.7082145,15z/data=!4m2!3m1!1s0x0:0xb67ff201abd54339?sa=X&ved=0ahUKEwju1NKYiMTWAhUBxiYKHRZDCnAQ_BIIiQEwCg" target="_blank"/><img class="img-fluid" src="img/mapsj.png" alt=""/></a>
                </div>
                <div class="col-6">
                  <p class="address pt-md-4 text-left">2601 Carson Road <br>Birmingham, Alabama 35215 <br>(205) 853-1200 <br /> (800) 239-5900</p>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-3 my-3 text-center form">
              <h2>Contact Us</h2>
              <form action="scripts/sendContact.php" method="POST">
                <input class="col-12 mt-1 name input" placeholder="Your Name" type="text" name="firstname" required />
                <input class="col-12 mt-1  email input" placeholder="Email Address" type="text" name="email" required />
                <input class= "col-12 mt-1 btn btn-success text-center contactBtn" type="submit" value="Submit" />
              </form>
            </div>
          </div>

          <div class="row py-3 copyTerms">
            <div class="col-12 col-md-6 text-center text-md-left">&copy; Copyright <?php echo date('Y'); ?> Full Stack BHM</div>
            <div class="col-12 col-md-6 text-center text-md-right"><a class="mx-1" href="#">Terms &amp; Conditions</a> <span style="color: #fff;">|</span> <a class="mx-1" href="#">Privacy Policy</a></div>
          </div>
      </div>
    </div>
    

<!--  *** End of page scripts ***  -->
    <!-- Current jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

   <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
      window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
      ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!-- navMenu Script -->
    <script type="text/javascript" src="js/navMenu.js"></script>
    
  </body>
</html>
