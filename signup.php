<?php
include "admin/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>MOBILE Store</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>


<body>
    <?php $page ='signup';
    include 'components/navbar.php' 
    ?>
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Sign Up</h1>
            <span>Sign in to buy any product from our website</span>
          </div>
        </div>
      </div>
    </div>
    
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900">Slow-carb next level shoindcgoitch ethical authentic, poko scenester</h1>
      <p class="leading-relaxed mt-4">Poke slow-carb mixtape knausgaard, typewriter street art gentrify hammock starladder roathse. Craies vegan tousled etsy austin.</p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">

                 <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

            <form class="row g-3 needs-validation" novalidate action="admin/user.php" method="POST">
                    <div class="col-12">
                      <label for="username" class="form-label">Your Name</label>
                      <input type="text" name="username" class="form-control" id="username" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="useremail" class="form-label">Your Email</label>
                      <input type="email" name="useremail" class="form-control" id="useremail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12" >
                      <label for="useremail" class="form-label">User Type</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="property" id="property">
                          <option value="" selected="selected">Select Property</option>
                        </select>
                      </div>
                    </div>

                      <div class="col-12" >
                      <label for="useremail" class="form-label">User Type</label>
                        <select class="form-control" name="" id="chapter"  >
                         <option value="" selected="selected">Please select user type</option>
                      </select>
                      </div>  
                    

                    <div class="col-12">
                      <label for="userpassword" class="form-label">Password</label>
                      <input type="password" name="userpassword" class="form-control" id="userpassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    

                    <div class="col-12">
                      <label for="cpassword" class="form-label">Confirm Password</label>
                      <input type="password" name="cpassword" class="form-control" id="cpassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" >submit</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
</section>


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

<script language="text/Javascript">
cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
function clearField(t) { //declaring the array outside of the
    if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
    }
}
</script>

<!-- <script src="https://cdn.tailwindcss.com"></script> -->
<script type="text/javascript">
                          var propertyObject ={            
                            "COMMERCIAL":{
                              "Room":["No.of rooms","area of room","Floor No","Water","Electric","Kitchen","Washroom"],
                              "Shop":["area of room","Water","Electric","Road","Parking","market place"], 
                              "Office":["area of room","Water","Electric","Road","Parking","market place"],
                              "Flat":["1 2 3 4 BHK","Total Size in Sq Ft","Floor No","Security","Lift","Water","Solar Heater","Play Ground","Pool"],
                              "Apartment":["1 2 3 4 BHK","Total Size in Sq Ft","Floor No","Security","Lift","Water","Solar Heater","Play Ground","Pool"],
                              "Hall":["No.of rooms","area of room","Water","Electric","Parking"],
                              "Bank":["No.of rooms","area of room","Water","Electric","Parking"],
                              "Restaurant":["No.of rooms","area of room","Water","Electric","Parking"],
                               "Bar":["No.of rooms","area of room","Water","Electric","Parking"],
                                "Hospital":["No.of rooms","area of room","Water","Electric","Parking"],
                                "Resort":["No. of rooms","area of room","Water","Electric","Parking"], 
                                "Lay out":["Total Size in Sq Ft","Road","Fencing","Sewerage","Guderline","Water","Electric","NA","NATP","NMRDA","RERA"],
                                "open plot":["Total Size in Sq Ft","Road","Fencing","Sewerage","Guderline","Water","Electric","NA","NATP","NMRDA", "RERA"],
                                "Coaching class":["No.of rooms","area of room","Water","Electric","Parking"],
                                "Café":["No.of rooms","area of room","Water","Electric","Parking"],
                                "Agriculture":["area in acers","well","Bore","Irrigation","Electric","Road","Fencing"],
                               
                               
                                        },
                              "RESIDENTIAL":{
                                "Room":["No.of rooms","area of room","Floor No","Water","Electric","Kitchen","Washroom"],
                                "House":["No.of rooms","area of room","Floor No","Water","Electric","Kitchen","Washroom"],
                                "Row house":["1 2 3 4 BHK","Total Size in Sq Ft","Fencing","Kitchen","Washroom","Security","Swimming Pool"],
                                "Flat":["1 2 3 4 BHK","Total Size in Sq Ft","Floor No","Security","Lift","Water","Solar Heater","Play Ground","Pool"],
                                "Apartment":["1 2 3 4 BHK","Total Size in Sq Ft","Floor No","Security","Lift","Water","Solar Heater","Play Ground","Pool"],
                                "Bungalow":["1 2 3 4 BHK","Total Size in Sq Ft","Floor No","Security","Lift","Water","Solar Heater","Play Ground","Pool"],
                                "Residential open plot":["Total Size in Sq Ft","Road","Fencing","Sewerage","Guderline","Water","Electric","NA","NATP","NMRDA","RERA"],
                                "Lay out":["Total Size in Sq Ft","Road","Fencing","Sewerage","Guderline","Water","Electric","NA","NATP","NMRDA", "RERA"]
                                              }
                                            }
                                      window.onload = function()
                                       {
                                        var propertySel = document.getElementById("property");
                                        var topicSel = document.getElementById("topic");
                                         var chapterSel = document.getElementById("chapter");
                                         var toggleswitch = document.getElementById("switch1");
                                         //setting  property  
                                        for (var x in propertyObject) {
                                              propertySel.options[propertySel.options.length] = new Option(x, x);
                                            }

                                   //setting property type     
                                  propertySel.onchange = function()
                                   {
                                    
                                  
                                    topicSel.length = 1;
                                    //display correct values
                                    for (var y in propertyObject[this.value])
                                     {
                                      topicSel.options[topicSel.options.length] = new Option(y, y);
                                    }
                                     
                                  }
                                  //setting aminities
                                  topicSel.onchange = function()
                                   {
                                      
                                      chapterSel.length = 1;
                                   
                                      $('#inputarea').empty();
                                       $('#checkarea').empty();

                                      //display correct values
                                      var z = propertyObject[propertySel.value][this.value];
                                      for (var i = 0; i < z.length; i++) {
                                        chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
                                      }
                                       //display aminities in text area
                                      
                                      var option=$(this).val();
                                      if(option=="Room" || option=="House" ){
                                        
                                          for (var i = 0; i < 3; i++)
                                          {
                                            $("#inputarea").append('<div id="content" class=" form-check-inline col-sm-4"  ><input type="text" placeholder="'+z[i]+'" class="form-control " name="inputs1[]"/ ></div>');
                                          }
                                          for (var i = 3; i < z.length; i++)
                                          {
                                            $("#checkarea").append('<div id="content" class=" form-check-inline col-sm-2" id="checkarea" ><p>'+z[i]+'<input type="checkbox" value="'+z[i]+'" class="checkcheck" name="inputs2[]"/ ></p></div>');
                                          }

                                      }
                                      else (option=="Hospital" || option== "Hall" || option=="Bank" ||
                                    option=="Restaurant" || option== "Bar" || option=="Resort" ||
                                    option=="Coaching class" || option== "Café" ){
                                      
                                          for (var i = 0; i < 2; i++)
                                          {
                                            $("#inputarea").append('<div id="content" class=" form-check-inline col-sm-4"  ><input type="text" placeholder="'+z[i]+'" class="form-control " name="inputs1[]"/ ></div>');
                                          }
                                          for (var i = 2; i < z.length; i++)
                                          {
                                            $("#checkarea").append('<div id="content" class=" form-check-inline col-sm-2" id="checkarea" ><p>'+z[i]+'<input type="checkbox" value="'+z[i]+'" class="checkcheck" name="inputs2[]"/ ></p></div>');
                                          }
                                      }
                                  toggleswitch.onchange = function()
                                     {
                                       
                              var search_array1 = $('input[name="inputs1[]"]').map(function(){return $(this).val();}).get();
                                              
                              
                              //$('input[name="inputs2[]"]').map(function(){return $(this).val();}).get();
                                          var checkedValue=" "; 
                                              var inputElements = document.getElementsByClassName('checkcheck');
                                              for(var i=0; inputElements[i]; ++i){
                                                    if(inputElements[i].checked){
                                                         checkedValue = checkedValue+","+inputElements[i].value;
                                                        
                                                    }
                                              }
                                              

                                              let text2  = checkedValue;
                                              let text1 = search_array1.toString();
                                              // search_array2.toString();

                                              $("#hide1").append('<div id="content" class=" form-check-inline col-xs-4"  ><input type="text" placeholder="" class="form-control " value="'+text1+'" name="inputs1"/ ></div>');
                                              $("#hide1").append('<div id="content" class=" form-check-inline col-xs-4"  ><input type="text" placeholder="" class="form-control " value="'+text2+'" name="inputs2"/ ></div>');
                                          
                                             
                                              
                                            
                                    }
                               
                                    }
                                  }
                    
</script>

</body>

</html>