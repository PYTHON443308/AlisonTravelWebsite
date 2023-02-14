




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">ALISION travel.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="register.php">Sign Up</a>
      <a href="login.php">log In</a>
      
   
   
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/login.png) no-repeat">
   <h1>Log In</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

<h1 class="heading-title">Get 20% DISCOUNT EXTRA..! <br> Just Sign Up Your_Self..!</h1>

   <form action="login_form.php" onsubmit="return isvalid()" method="post" class="book-form" id="form">

      <div class="flex">
     
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" id="email">
         </div>
       
        <br>
        <br>
         <div class="inputBox">
            <span>Password :</span>
            <input type="password" placeholder="Enter the password" name="pass" id="pass">
         </div>
       
        
         
      </div>

      <input type="submit" value="Log In" class="btn" name="send"> <br> <br>
      <div style="font-size:15px">
        Don't have an account? <span ><a href="register.php" style="color:red">Sign Up Now</a></span> 
      </div>

   </form>

   

</section>

<!-- booking section ends -->
<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +92 3337696748 </a>
         <a href="#"> <i class="fas fa-phone"></i> +92 3158843660</a>
         <a href="#"> <i class="fas fa-envelope"></i> hamza443309@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Quetta,PAkistan - 87300 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>ALI HAMZA  | ARSANLAN KAMAL | MUZAMIL</span></div>
</section>

<!-- footer section ends -->
</body>
<script>
   var form=document.getElementById("form");
  
   function isvalid(event){
      var email=document.getElementById("email").value;
      var pass=document.getElementById("pass").value;
    if( email.length == "" && pass.length == "" )
    {
      alert("Email and password Feilds are Empty");
      return false;
    }

      if(email.length =="")
      {
         alert("Email Feild is empty! ");
         return false;
      }
      if(pass.length =="")
      {
         alert("Password Feild is empty! ");
         return false;
      }
    }
   
</script>
</html>