<?php include 'components/head.php'?>

  <body>
  <?php include 'components/navbar.php';?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eaque odit, temporibus quaerat asperiores velit?</h1>
            <span><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</span>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="more-info-content">
          <div class="right-content">
            <div>
              <img src="assets/images/blog-image-fullscren-1-1920x700.jpg" class="img-fluid" alt="">
            </div>
            <br>
            <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam nihil magnam magni perferendis sit, inventore maxime architecto ab officia illum vitae veritatis asperiores laborum quaerat ratione omnis, possimus, sunt quae?</p>
            
            <h4>Lorem ipsum dolor sit amet.</h4>

            <br>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus amet, corporis corrupti quod illum id autem assumenda nostrum quo, odio libero dolorum. Expedita, enim non voluptatibus qui veritatis iste ad? Voluptates natus dolor, minus culpa magnam! Iusto blanditiis beatae laudantium.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor nemo optio facere impedit fugiat obcaecati blanditiis tempora inventore sapiente beatae aspernatur vitae fuga totam possimus eveniet, praesentium maiores! Dolorum illum voluptates ipsum aspernatur explicabo numquam, aliquid a amet, deleniti eos suscipit totam laudantium excepturi voluptatum fugiat eum nesciunt minus iste, expedita provident temporibus, alias possimus veritatis aut fugit? Eaque.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Leave a <em>comment</em></h2>
              <span>Suspendisse a ante in neque iaculis lacinia</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="get">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <?php include 'components/footer.php'?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>