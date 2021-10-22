<?php
session_start();
if(!isset($_SESSION['visitor_id']))
    header("Location: sign-in.php");
?>






<?php
include 'includes/connection.php';
if (isset($_POST["submit"])) {
    //$customer_name = $_POST["customer_name"];
	$benefactor_name = $_POST["full_name"];
	$benefactor_gender =$_POST["gender"];
	$benefactor_weight =$_POST["weight"];  
	$benefactor_birthday =$_POST["birthday"];
	$benefactor_blood_type =$_POST["blood_type"];
	$benefactor_continent =$_POST["region"];
	$benefactor_country =$_POST["country"]; 
	$benefactor_city =$_POST["city_state"];
	$benefactor_last_Donated =$_POST["last_Donated"]; 
	$benefactor_side_effect =$_POST["side_effect"]; 
	$benefactor_notes =$_POST["notes"]; 
	$benefactor_phone =$_POST["phone"]; 
	$benefactor_email =$_POST["email"]; 



	
   $query =
    "insert into benefactor(benefactor_name,benefactor_gender,benefactor_weight,benefactor_birthday,blood_type,continent,country,city,last_time,benefactor_phone,benefactor_email,side_effect,notes) 
     values('$benefactor_name','$benefactor_gender','$benefactor_weight','$benefactor_birthday','$benefactor_blood_type','$benefactor_continent','$benefactor_country','$benefactor_city','$benefactor_last_Donated','$benefactor_phone','$benefactor_email','$benefactor_side_effect','$benefactor_notes')";

    mysqli_query($con, $query);
    header("location:thanks_page.php");
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
                  <a href="form.php" class="btn btn-outline-secondary active" style="margin: 2px;">تبرع الان</a>
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
                  <a href="logout.php" class="btn btn-light" style="margin: 2px;">تسجيل الخروج</a>
               </li>
            </ul>
         </div>
      </nav>
      <section dir="rtl" style="padding-top: 64px;">
         <div class="container-contact100">
            <div class="wrap-contact100">
               <form method="post" class="contact100-form validate-form">
                  <span class="contact100-form-title">
                  قم بتعبئة الطلب...
                  </span>
                  <div class="wrap-input100 bg1" data-validate="Please Type Your Name">
                     <span class="label-input100">الاسم الكامل <span class="red">*</span></span>
                     <input class="input100" type="text" name="full_name" style="text-align: right;" placeholder="الاسم" required>
                  </div>
                  <div class="wrap-input100 bg1 rs1-wrap-input100">
                     <span  class="label-input100">الجنس <span class="red">*</span></span>
                     <div class="padd">
                        <select class="js-select2" name="gender" required>
                           <option disabled selected value="">اختر...</option>
                           <option value="male">ذكر</option>
                           <option value="female">أنثى</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                     </div>
                  </div>
                  <div class="wrap-input100 bg1 rs1-wrap-input100">
                     <span  class="label-input100">الوزن <span class="red">*</span></span>
                     <div class="padd">
                        <select class="js-select2" name="weight" required>
                           <option disabled selected value="">اختر...</option>
                           <option value="+50">50 أو أكثر</option>
                           <option value="-50">50 اقل من</option>
                          
                        </select>
                        <div class="dropDownSelect2"></div>
                     </div>
                  </div>
                  <div class="wrap-input100 bg1 rs1-wrap-input100">
                     <span class="label-input100">تاريخ الميلاد <span class="red">*</span></span>
                     <input class="input100" type="date" id="birthday" name="birthday" required>
                  </div>
                  <div class="wrap-input100 bg1 rs1-wrap-input100">
                     <span  class="label-input100">فصيلة الدم <span class="red">*</span></span>
                     <div class="padd">
                        <select class="js-select2" name="blood_type" required>
                           <option disabled selected value="">اختر...</option>
                           <option value="AB+">AB+</option>
                           <option value="AB-">AB-</option>
                           <option value="A+"> A+</option>
                           <option value="A-">A-</option>
                           <option value="B+">B+</option>
                           <option value="B-">B-</option>
                           <option value="o+">O+</option>
                           <option value="o-">O-</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                     </div>
                  </div>
                  
                 
                        
                  <div class="wrap-input100 bg1 rs1-wrap-input100">
                     <span  class="label-input100">اختر القارة <span class="red">*</span></span>
                     <select class="input100" onchange="set_country(this,country,city_state)" size="1" name="region" required>
                        <option value="" selected="selected">اختر...</option>
                        <script type="text/javascript">
                           setRegions(this);
                        </script>
                     </select>
                  </div>
                  <div class="wrap-input100 bg1 rs1-wrap-input100">
                     <span  class="label-input100">اختر الدولة ( يجب إختيار القارة أولا )<span class="red"> *</span></span>
                     <select class="input100" name="country" size="1" disabled="disabled" onchange="set_city_state(this,city_state)" required></select>
                  </div>
                  <div class="wrap-input100 bg1 rs1-wrap-input100">
                     <span  class="label-input100">اختر المدينة (يجب إختيار القارة والدولة أولا)<span class="red"> *</span></span>
                     <select class="input100" name="city_state" size="1" disabled="disabled" onchange="print_city_state(country,this)" required></select>
                  </div>






                  <div class="wrap-input100 bg1 rs1-wrap-input100">
                     <span  class="label-input100">آخر مرة تبرعت بها <span class="red">*</span></span>
                     <div class="padd">
                        <select class="js-select2" name="last_Donated" required>
                           <option disabled selected value="">اختر...</option>
                           <option value="more than three months">أكثر من 3 أشهر</option>
                           <option value="more than three months">أقل من 3 أشهر</option>
                           <option value="never">لم اتبرع من قبل</option>

                        </select>
                        <div class="dropDownSelect2"></div>
                     </div>
                  </div>
                  <div class="wrap-input100 bg1 rs1-wrap-input100">
                     <span class="label-input100">رقم الهاتف <span class="red">*</span></span>
                     <input class="input100" type="tel" id="mobile" name="phone"  placeholder="00962XXXXXXX" pattern="^\d{14}$" required>
                  </div>
                  <div class="wrap-input100 bg1 rs1-wrap-input100">
                     <span class="label-input100">الايميل ( اختياري )</span>
                     <input class="input100" type="text" name="email" placeholder="example@email.com" required>
                  </div>
                  <div class="wrap-input100 input100-select bg1">
                     <span  class="label-input100">هل لديك أي من الاعراض التالية؟ <span class="red">*</span></span>
                     <div style="  padding-top: 30px;">
                        <select class="js-select2" name="side_effect" required>
                           <option disabled selected value="">اختر...</option>
                           <?php
                                        $query = "select * from side_effects";
                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='{$row['side_effect_id']}'>{$row['side_effect_name']}</option>";
                                        }
                                        ?>
                           


                        </select>
                        <div class="dropDownSelect2"></div>
                     </div>
                  </div>
                  <div class="wrap-input100 bg0 rs1-alert-validate">
                     <span class="label-input100">أي ملاحظات إضافية</span>
                     <textarea class="input100" name="notes" placeholder="...أضف ملاحظتك"></textarea>
                  </div>
                  
                  
                  <div class="container-contact100-form-btn">
                     <button name="submit" class="contact100-form-btn" onclick="clickAlert(event)">
                     <span>
                     تثبيت الطلب
                     <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                     </span>
                     </button>
                  </div> 
               </form>
            </div>
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
      <!--===============================================================================================-->
      <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/animsition/js/animsition.min.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/bootstrap/js/popper.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/select2/select2.min.js"></script>
      <script>
         $(".js-select2").each(function(){
         	$(this).select2({
         		minimumResultsForSearch: 20,
         		dropdownParent: $(this).next('.dropDownSelect2')
         	});
         
         
         	$(".js-select2").each(function(){
         		$(this).on('select2:close', function (e){
         			if($(this).val() == "Please chooses") {
         				$('.js-show-service').slideUp();
         			}
         			else {
         				$('.js-show-service').slideUp();
         				$('.js-show-service').slideDown();
         			}
         		});
         	});
         })
      </script>
      <!--===============================================================================================-->
      <script src="vendor/daterangepicker/moment.min.js"></script>
      <script src="vendor/daterangepicker/daterangepicker.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/countdowntime/countdowntime.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/noui/nouislider.min.js"></script>
      <script>
         var filterBar = document.getElementById('filter-bar');
         
         noUiSlider.create(filterBar, {
             start: [ 1500, 3900 ],
             connect: true,
             range: {
                 'min': 1500,
                 'max': 7500
             }
         });
         
         var skipValues = [
         document.getElementById('value-lower'),
         document.getElementById('value-upper')
         ];
         
         filterBar.noUiSlider.on('update', function( values, handle ) {
             skipValues[handle].innerHTML = Math.round(values[handle]);
             $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
             $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
         });
      </script>
      <!--===============================================================================================-->
      <script src="js/main.js"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-23581568-13');
      </script>
      <script>
         function clickAlert() {
            if (confirm('هل تريد تثبيت الطلب؟')) {
               yourformelement.submit();
         } else {
           return false;
         }
             }
      </script>
      









