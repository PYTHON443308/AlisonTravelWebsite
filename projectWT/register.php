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

<div class="heading" style="background:url(images/register.png) no-repeat">
   <h1>Sign Up Now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Get 20% DISCOUNT EXTRA..! <br> Just Sign Up Your_Self..!</h1>

   <form action="register_form.php" onsubmit="return isvalid()" method="post" class="book-form" id="form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name" id="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" id="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone" id="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address" id="address">
         </div>
         <div class="inputBox">
            <span>Password :</span>
            <input type="password" placeholder="Enter the password" name="pass" id="pass">
         </div>
         <div class="inputBox">
            <span>Are You Love Traveling :</span>
            <input type="text" placeholder="Yes/No" name="travel" id="travel">
         </div>
        
         
      </div>

      <input type="submit" value="Sign Up" class="btn" name="send">
      <div style="font-size:15px">
        Allready have an account? <span ><a href="login.php" style="color:red">Log In Now</a></span> 
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
   var access=document.getElementById("form");
   function isvalid(event)
   {
      var name=document.getElementById("name").value;
      var email=document.getElementById("email").value;
      var phone=document.getElementById("phone").value;
      var address=document.getElementById("address").value;
      var pass=document.getElementById("pass").value;
      var travel=document.getElementById("travel").value;

      if(name.length == "" && email.length=="" && phone.length=="" && address.length=="" && pass.length=="" && travel.length=="" )
      {

         alert("PLz Firstly Fill The Form Thanks!!");
         return false;
      }
      if(name.length=="")
      {
         alert(" Fill the name!");
         return false;
      }
      if(email.length=="")
      {
         alert(" Fill the email!");
         return false;
      } if(isNaN(phone))
  {
    alert("Enter Numeric Number  ");
    return false;
  } 
  if(phone.length<11){
    alert("Enter Correct Mobile Number that (contain 11 no)");
    return false;
  }
  if(phone.length> 11){
    alert("Enter Correct Mobile Number that (contain 11 no)");
    return false;
  }
  if(phone.charAt(0)!=0 && phone.charAt(1)!=3)
  {
    alert("Your Number Must Start With 03 Numeric value");
    return false;
  } if(address.length =="")
  {
    alert("Please Fill The Address Fields");
    return false;
  } if(pass.length =="")
  {
    alert("Please Fill The Password Fields");
    return false;
  }
  if(travel.length =="")
  {
    alert("Please Fill The Traveling Fields");
    return false;
  }
   }
</script>
</html>