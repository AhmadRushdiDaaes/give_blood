<?php

session_start();

include 'includes/connection.php';

if(isset($_POST['submit'])){
    $email    = $_POST['email'];
    $password = $_POST['password'];
     
   $query = "select * from visitor where visitor_email='$email' AND visitor_password='$password'";
   $result = mysqli_query($con, $query);

     $visitorSet = mysqli_fetch_assoc($result);
   
    if($visitorSet['visitor_email']==$email && $visitorSet['visitor_password']==$password)
    {

        $_SESSION['visitor_id'] = $visitorSet['visitor_id']; 
        $_SESSION['visitor_name'] = $visitorSet['visitor_fullname']; 
        $_SESSION['visitor_email'] = $visitorSet['visitor_email'];
        header("location:form.php");   
    
    }
    
    
    else{
      
        header("location:sign-in.php?msg=failed"); 
            
         
       
}
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
                  <a href="index.php" class="btn btn-dark" style="margin: 2px;">الرئيسية <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a href="sign-in.php" class="btn btn-dark" style="margin: 2px;">تبرع الان</a>
               </li>
               <li class="nav-item">
                  <a href="search_donator.php" class="btn btn-dark" style="margin: 2px;">البحث عن متبرعين</a>
               </li>
               <li class="nav-item">
                  <a  href="index.php#Benefit" class="btn btn-dark" style="margin: 2px;">فوائد المتبرع</a>
               </li>
               <li class="nav-item">
                  <a href="index.php#ourTeam" class="btn btn-dark" style="margin: 2px;">من نحن</a>
               </li>
               <li class="nav-item">
                  <a href="index.php#contactUs" class="btn btn-dark" style="margin: 2px;">تواصل معنا</a>
               </li>
               <li class="nav-item">
                  <a href="sign-in.php" class="btn btn-outline-secondary active" style="margin: 2px;">تسجيل الدخول</a>
               </li>
            </ul>
         </div>
      </nav>
      <section style="padding-top: 64px;">
         <div class="main">
            <!-- Sing in  Form -->
            <section class="sign-in">
               <div class="container">
                  <div class="signin-content">
                     <div class="signin-image">
                        <figure><img src="images/signin-image.png" alt="sing up image"></figure>
                        <a href="sign-up.php" style="padding: 10px;" class="signup-image-link">إنشاء حساب</a>
                     </div>
                     <div class="signin-form">
                        <h2 class="form-title">تسجيل الدخول</h2>
                        <form method="post" class="register-form" id="login-form">
                           <div class="form-group">
                              <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                              <input type="text" name="email"  id="your_name" placeholder="إيميل المستخدم"/>
                           </div>
                           <div class="form-group">
                              <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                              <input type="password" name="password" id="your_pass" placeholder="كلمة السر"/>
                           </div>
                           
                           <?php
                           if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
                              echo "<p style='color:red;'>". "Wrong Username or Password";
                              }
                           
                           ?>
                           
                           <div class="form-group">
                              <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                              <label for="remember-me" class="label-agree-term"><span><span></span></span>تذكرني</label>
                           </div>
                           <div class="form-group form-button">
                              <input type="submit" name="submit" id="signin" class="form-submit" />
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </section>
      <footer dir="ltr" class="bg-dark text-center text-white">
         <!-- Copyright -->
         <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white" href="index.php">Give blood and save a life</a>
         </div>
         <!-- Copyright -->
      </footer>
      <!-- JS -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="js/main.js"></script>
   </body>
   <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>