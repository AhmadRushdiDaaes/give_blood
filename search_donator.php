
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
                  <a href="index.php" class="btn btn-outline-secondary active" style="margin: 2px;">الرئيسية <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a href="sign-in.php" class="btn btn-dark" style="margin: 2px;">تبرع الان</a>
               </li>
               <li class="nav-item">
                  <a href="#" class="btn btn-dark" style="margin: 2px;">البحث عن متبرعين</a>
               </li>
               <li class="nav-item">
                  <a  href="#Benefit" class="btn btn-dark" style="margin: 2px;">فوائد المتبرع</a>
               </li>
               <li class="nav-item">
                  <a href="#ourTeam" class="btn btn-dark" style="margin: 2px;">من نحن</a>
               </li>
               <li class="nav-item">
                  <a href="#contactUs" class="btn btn-dark" style="margin: 2px;">تواصل معنا</a>
               </li>
               <li class="nav-item">
                  <a href="sign-in.php" class="btn btn-light" style="margin: 2px;">تسجيل الدخول</a>
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


      <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<div class="container">
<h2>Blood Donators</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Cities" title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">City</th>
    <th style="width:40%;">Name</th>
    <th style="width:40%;"> Profile</th>
  </tr>
  
  <?php 
  include 'includes/connection.php';
$query = "select * from benefactor";

$result=mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result)) {
   echo "<tr>";
   echo "<td>{$row['city']}</td>";
   echo "<td>{$row['benefactor_name']}</td>";
   
   echo "<td><button class='btn btn-danger'><a href='view_profile.php?benefactor_id={$row['benefactor_id']}' view profile</a> profile</button>
   </td>";
   echo "</tr>"; 
}
  ?>
  
    
  
  
  
</table>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


