<?php
include 'includes/connection.php';
if (isset($_POST["submit"])) {
	$visitor_email = $_POST["visitor_email"];
	$visitor_password = $_POST["visitor_password"];
	$visitor_fullname = $_POST["visitor_fullname"];
	
	$query = "insert into visitor(visitor_email,visitor_password,visitor_fullname)
	values('$visitor_email','$visitor_password','$visitor_fullname')";

	mysqli_query($con, $query);
}
?>
















<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Give blood and save a life</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--===============================================================================================-->
      <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" href="css/nicepage.css" media="screen">
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!--===============================================================================================-->
      <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
      <script type="text/javascript" src="js/city_state.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
   </head>
   <body class="container-lg">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="padding: 0px 16px 0px 16px; position: fixed; width: 100%;">
         <a class="navbar-brand" href="index.php"> <img src="images/logo.png" width="5%" alt=""> Give blood and save a life</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" style="height: 65px;" dir="rtl" id="navbarNavDropdown">

            <ul class="navbar-nav">
               <li class="nav-item">
                  <a href="index.php" class="btn btn-dark" style="margin: 2px;">???????????????? <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a href="sign-in.php" class="btn btn-dark" style="margin: 2px;">???????? ????????</a>
               </li>
               <li class="nav-item">
                  <a href="search_donator.php" class="btn btn-dark" style="margin: 2px;">?????????? ???? ??????????????</a>
               </li>
               <li class="nav-item">
                  <a  href="index.php#Benefit" class="btn btn-dark" style="margin: 2px;">?????????? ??????????????</a>
               </li>
               <li class="nav-item">
                  <a href="index.php#ourTeam" class="btn btn-dark" style="margin: 2px;">???? ??????</a>
               </li>
               <li class="nav-item">
                  <a href="index.php#contactUs" class="btn btn-dark" style="margin: 2px;">?????????? ????????</a>
               </li>
               <li class="nav-item">
                  <a href="sign-in.php" class="btn btn-outline-secondary active" style="margin: 2px;">?????????? ????????????</a>
               </li>
            </ul>
         </div>
      </nav>
      <section style="padding-top: 64px;">
         <div class="main">
            <!-- Sign up form -->
            <section class="signup">
               <div class="container">
                  <div class="signup-content">
                     <div class="signup-form">
                        <h2 class="form-title">?????????? ????????</h2>
                        <form method="post" class="register-form" id="register-form">
                           <div class="form-group">
                              <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                              <input type="text" name="visitor_fullname" id="name" placeholder="?????? ????????????????"/>
                           </div>
                           <div class="form-group">
                              <label for="email"><i class="zmdi zmdi-email"></i></label>
                              <input type="email" name="visitor_email" id="email"  placeholder="??????????????"/>
                           </div>
                           <div class="form-group">
                              <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                              <input type="password" name="visitor_password" id="visitor_password" placeholder="???????? ????????"/>
                           </div>
                           <div class="form-group">
                              <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                              <input type="password" name="confirm_password" id="confirm_password" placeholder="?????? ?????????? ???????? ????????"/>
                           </div>
                           <div class="form-group">
                              <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                              <label for="agree-term" class="label-agree-term"><span><span></span></span>?????????? ?????? ???? ?????? ?????????? ???? <a href="#" class="term-service">???????? ??????????????</a></label>
                           </div>
                           <div class="form-group form-button">
                              <input type="submit" name="submit" id="signup" class="form-submit" value="?????????? ????????????"/>
                           </div>
                        </form>
                     </div>
                     <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="sign-in.php" style="padding: 10px;" class="signup-image-link">?????? ???????????? ??????????</a>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </section>
      <footer dir="ltr" class="bg-dark text-center text-white">
         <!-- Copyright -->
         <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            ?? 2021 Copyright:
            <a class="text-white" href="index.php">Give blood and save a life</a>
         </div>
         <!-- Copyright -->
      </footer>
      <!-- JS -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="js/main.js"></script>

      <script src="vendor/select2/select2.min.js"></script>
      <script>
         var password = document.getElementById("visitor_password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
         </script>


   </body>
   <!-- This templates was made by Colorlib (https://colorlib.com) -->
</php>


