<?php
include 'includes/connection.php';
if(isset($_POST['submit'])){
	$contact_name    = $_POST['name'];
	$contact_email   = $_POST['email'];
	$contact_subject = $_POST['subject'];
	$contact_message = $_POST['message'];



$query ="insert into contact_us(contact_name,contact_email,contact_subject,contact_message)
	    values('$contact_name','$contact_email','$contact_subject','$contact_message')";

	    mysqli_query($con,$query);
	    
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
   <style>
      h3 {
      display: list-item;
      list-style-type: disc;
      list-style-position: inside;
      }
   </style>
   <body class="container-lg">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="padding: 0px 16px 0px 16px; position: fixed; width: 100%;">
         <a class="navbar-brand" href="index.php"> <img src="images/logo.png" width="5%" alt=""> Give blood and save a life</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" style="height: 65px;" dir="rtl" id="navbarNavDropdown">

            <ul class="navbar-nav">
               <li class="nav-item">
                  <a href="index.php" class="btn btn-outline-secondary active" style="margin: 2px;">???????????????? <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a href="sign-in.php" class="btn btn-dark" style="margin: 2px;">???????? ????????</a>
               </li>
               <li class="nav-item">
                  <a href="search_donator.php" class="btn btn-dark" style="margin: 2px;">?????????? ???? ??????????????</a>
               </li>
               <li class="nav-item">
                  <a  href="#Benefit" class="btn btn-dark" style="margin: 2px;">?????????? ??????????????</a>
               </li>
               <li class="nav-item">
                  <a href="#ourTeam" class="btn btn-dark" style="margin: 2px;">???? ??????</a>
               </li>
               <li class="nav-item">
                  <a href="#contactUs" class="btn btn-dark" style="margin: 2px;">?????????? ????????</a>
               </li>
               <li class="nav-item">
                  <a href="sign-in.php" class="btn btn-light" style="margin: 2px;">?????????? ????????????</a>
               </li>
            </ul>
         </div>
      </nav>
      <section>
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100 item" src="images/donate.jpg" style="height: 720px;" alt="First slide">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100 item" src="images/dd.jpg" alt="Third slide">
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </section>
      <section>
         <div class="row container-fluid">
            <div class="col-md-6 col-xs-6 text-right" style="padding-left: 0px;" >
               <img src="images/z.png" width="800px"/>
            </div>
            <div style="align-self: center; text-align: center;" class="col-md-6 col-xs-6">
               <p style="font-family: 'Scheherazade', serif; font-size:30px">?????????? ???????????? ?????????? ?????????? ???????????? ???????? ???? ?????????? ???? ?????????? ???????? ??????????????. ???????? ?????????? ?????????? ???? ???????????? ??????????.???????? ???????? ???? ?????????? ???? ?????????? ???????????????????? ???????????? ????????????????.</p>
            </div>
         </div>
      </section>
      <section class="u-clearfix u-section-1" data-image-width="2000" dir="rtl" style="background-color: floralwhite;" data-image-height="1333" id="Benefit">
         <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-align-center u-container-style u-group u-group-1">
               <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h1 class="u-text u-text-1">?????????? ??????????????</h1>
               </div>
            </div>
            <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
               <div class="u-gutter-0 u-layout">
                  <div class="u-layout-row">
                     <div class="u-size-19 u-size-30-md">
                        <div class="u-layout-col">
                           <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                              <div class="u-container-layout u-valign-top u-container-layout-2">
                                 <h3 class="u-text u-text-3 fontt">???????? ?????? ?????????????? ???????????? ?????????? ?????????? %88</h3>
                              </div>
                           </div>
                           <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-2">
                              <div class="u-container-layout u-valign-top u-container-layout-3">
                                 <h3 class="u-text u-text-5 fontt">???????? ?????? ?????????????? ???????? ??????????????</h3>
                              </div>
                           </div>
                           <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-3">
                              <div class="u-container-layout u-valign-top u-container-layout-4">
                                 <h3 class="u-text u-text-7 fontt">?????? ?????? ???????? ???????? ?????????? ??????????????</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="u-size-22 u-size-30-md">
                        <div class="u-layout-row">
                           <div class="u-align-left u-container-style u-image u-layout-cell u-size-60 u-image-1" src="">
                              <div class="u-container-layout u-valign-top u-container-layout-5" src=""><img src="images/c.jpg" alt=""></div>
                           </div>
                        </div>
                     </div>
                     <div class="u-size-19 u-size-60-md">
                        <div class="u-layout-col">
                           <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-5">
                              <div class="u-container-layout u-valign-top u-container-layout-6">
                                 <h3 class="u-text u-text-9 fontt">???????????? ?????????? ???????? ?????? ???? ?????????????? ????????????????</h3>
                              </div>
                           </div>
                           <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-6">
                              <div class="u-container-layout u-valign-top u-container-layout-7">
                                 <h3 class="u-text u-text-11 fontt">?????????? ???????????? ???????????? ???????????? ?????????? ???? ??????????</h3>
                              </div>
                           </div>
                           <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-7">
                              <div class="u-container-layout u-valign-top u-container-layout-8">
                                 <h3 class="u-text u-text-13 fontt">???????? ?????? ???????????? ?????? ????????</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="u-clearfix u-section-2" id="ourTeam">
         <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h1 class="u-text u-text-default u-text-1">Our Team</h1>
            <div class="u-list u-repeater u-list-1">
               <div class="u-align-center u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                     <div alt="" class="u-image u-image-circle u-image-1" src="" data-image-width="500" data-image-height="500"></div>
                     <h5 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-2">Ahmad daaes</h5>
                     <p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-3">Front-End Developer</p>
                  </div>
               </div>
               <div class="u-align-center u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                     <div alt="" class="u-image u-image-circle u-image-2" src="" data-image-width="500" data-image-height="500"></div>
                     <h5 class="u-text u-text-4">Ahmad daaes</h5>
                     <p class="u-text u-text-5">Back-End Developer</p>
                  </div>
               </div>
               <div class="u-align-center u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                     <div alt="" class="u-image u-image-circle u-image-3" src="" data-image-width="500" data-image-height="500"></div>
                     <h5 class="u-text u-text-6">Ahmad daaes</h5>
                     <p class="u-text u-text-7">document controller</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="contactUs">
         <div class="contact1">
            <div class="container-contact1">
               <div class="contact1-pic js-tilt" data-tilt>
                  <img src="images/img-01.png" alt="IMG">
               </div>
               <form method = "post" class="contact1-form validate-form">
                  <span class="contact1-form-title">
                  Get in touch
                  </span>
                  <div class="wrap-input1 validate-input" data-validate = "Name is required">
                     <input class="input1" type="text" name="name" placeholder="Name">
                     <span class="shadow-input1"></span>
                  </div>
                  <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                     <input class="input1" type="text" name="email" placeholder="Email">
                     <span class="shadow-input1"></span>
                  </div>
                  <div class="wrap-input1 validate-input" data-validate = "Subject is required">
                     <input class="input1" type="text" name="subject" placeholder="Subject">
                     <span class="shadow-input1"></span>
                  </div>
                  <div class="wrap-input1 validate-input" data-validate = "Message is required">
                     <textarea class="input1" name="message" placeholder="Message"></textarea>
                     <span class="shadow-input1"></span>
                  </div>
                  <div class="container-contact1-form-btn">
                  <input class="contact1-form-btn" type="submit" name="submit" value="Send Message">
                     
                     
                     
                  </div>
               </form>
            </div>
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
   </body>
</html>





<script src="selectElement.js" type="text/javascript"></script>
<script type="text/javascript">

Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)
</script>