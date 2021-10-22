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
                  <a href="#" class="btn btn-dark" style="margin: 2px;">البحث عن متبرعين</a>
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
                  <a href="sign-in.php" class="btn btn-light" style="margin: 2px;">تسجيل الدخول</a>
               </li>
            </ul>
         </div>
      </nav>
      
      <section dir="rtl" style="padding-top: 64px;">
         <div class="container-contact100">
            <div class="wrap-contact100">
            
            <center><h1>            <img src="images/logo.png" width = '120' height='150' alt="Italian Trulli"> معلومات المتبرع بالدم  </h1> </center>


            <div dir="rtl" lang="ar">
            <?php 
            include'includes/connection.php';
							$query = "select benefactor.* 
                     ,side_effects.side_effect_name from benefactor  
                     inner join side_effects on side_effects.side_effect_id = benefactor.side_effect where benefactor_id={$_GET['benefactor_id']}";
                     
							$result = mysqli_query($con, $query);
							while($benefactorSet = mysqli_fetch_assoc($result)){
								
                        
								echo " <h5 align='right'> الاسم: {$benefactorSet['benefactor_name']}</h5>";
                        echo'<br>';




	                          
                                  if($benefactorSet['benefactor_gender']=='male')
                                  {

                                    echo "  <h5 align='justify'>الجنس: ذكر </h5>";
 
                                  }else if($benefactorSet['benefactor_gender']=='female')
                                      {
                                       echo "  <h5 align='justify'>الجنس: انثى </h5>";
                                    }

                        
                                echo'<br>';
                                echo "  <h5 align='justify'>الوزن: {$benefactorSet['benefactor_weight']}</h5>";
                                echo'<br>';
                                echo "  <h5 align='justify'>تاريخ الميلاد: {$benefactorSet['benefactor_birthday']}</h5>";
                                echo'<br>';
                                echo "  <h5 align='justify'>نوع الدم: {$benefactorSet['blood_type']}</h5>";
                                echo'<br>';
                                echo "  <h5 align='justify'>القارة: {$benefactorSet['Continent']}</h5>";
                                echo'<br>';
                                echo "  <h5 align='justify'>البلد: {$benefactorSet['country']}</h5>";
                                echo'<br>';
                                echo "  <h5 align='justify'>المدينة: {$benefactorSet['city']}</h5>";
                                echo'<br>';




                                if($benefactorSet['last_time']=='more than three months')
                                {

                                 echo "  <h5 align='justify'>اخر مرة تبرع بالدم: اكثر من 3 شهور  </h5>";

                                }else if($benefactorSet['last_time']=='less than three months')
                                    {
                                     echo "  <h5 align='justify'>اخر مرة تبرع بالدم: اقل من 3 شهور  </h5>";
                                  }

                                  else if($benefactorSet['last_time']=='never')
                                    {
                                     echo "  <h5 align='justify'>اخر مرة تبرع بالدم: لم اتبرع من قبل   </h5>";
                                  }




                                echo'<br>';
                                echo "  <h5 align='justify'>الهاتف: {$benefactorSet['benefactor_phone']}</h5>";
                                echo'<br>';
                                echo "  <h5 align='justify'>الايميل: {$benefactorSet['benefactor_email']}</h5>";
                                echo'<br>';
                                echo "  <h5 align='justify'>الاعراض الجانبية: {$benefactorSet['side_effect_name']}</h5>";

                                echo'<br>';
                                echo "  <h5 align='justify'>ملاحظات: {$benefactorSet['notes']}</h5>";
                                
                                




							}
							?>
  </div>
  

				




            </div>
         </div>
      </section>

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
   </body>
</html>