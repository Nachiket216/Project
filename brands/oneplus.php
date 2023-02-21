<?php $page ='brands'; include '../components/head.php'?>

  <body>
  <?php include '../components/navbar.php';?>
  
    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>One Plus</h1>
            <span>Lorem ipsum dolor sit amet.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <img src="../assets/images/product-1-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>$</sup>1999 </del> &nbsp; <sup>$</sup>1779
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis asperiores eveniet iure impedit soluta aliquid. </p>
                <a href="../product-details.php" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="../assets/images/product-2-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>$</sup>1999 </del> &nbsp; <sup>$</sup>1779
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, impedit itaque delectus laboriosam quas veniam. </p>
                <a href="../product-details.php" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="../assets/images/product-3-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>$</sup>1999 </del> &nbsp; <sup>$</sup>1779
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id eius at unde natus, sit possimus. </p>
                <a href="../product-details.php" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="../assets/images/product-4-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>$</sup>1999 </del> &nbsp; <sup>$</sup>1779
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab voluptatibus cupiditate repudiandae hic odio quas. </p>
                <a href="../product-details.php" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="../assets/images/product-5-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>$</sup>1999 </del> &nbsp; <sup>$</sup>1779
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat in a repellendus nobis! Iure, eveniet! </p>
                <a href="../product-details.php" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="../assets/images/product-6-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>$</sup>1999 </del> &nbsp; <sup>$</sup>1779
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="../product-details.php" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>
        </div>

        <br>
        <br>

        <nav>
          <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <?php include '../components/footer.php'?>


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/owl.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/accordions.js"></script>

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