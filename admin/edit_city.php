<?php
include '../includes/connection.php';

$query  = "select * from city where city_id = {$_GET['city_id']}";
$result = mysqli_query($con, $query);
$citySet = mysqli_fetch_assoc($result);



if (isset($_POST['submit'])) {
 
    // get data from webform 
    
    $Continent_id= $_POST['Continent_name'];
    $country_id = $_POST['country_name'];
    $city = $_POST['city'];
   
 $query = "update city set Continent_id='$Continent_id',country_id='$country_id',city_name='$city' where city_id = {$_GET['city_id']}";
    // perform query 
    mysqli_query($con, $query);


    header("location:manage_city.php");
    





}
?>





<?php include '../includes/admin_header.php'; ?>



<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Update city</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Cities</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Continent Name</label>
                                    <select id="Continent_name" name="Continent_name" class="form-control">
                                        <option value disabled selected> Select Continent</option>
                                        <?php
                                        $query = "select * from continent";
                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='{$row['Continent_id']}'>{$row['Continent_name']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                 
                                 <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Country Name</label>
                                    <select id="country_name" name="country_name" class="form-control">
                                      <option value disabled selected> Select country </option>
                                        
                                    </select>
                                </div>



                                 <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">City</label>
                                    <input id="cc-pament" name="city" type="text" class="form-control" aria-required="true" aria-invalid="false"
                                    value="<?php echo $citySet["city_name"] ;  ?>" >
                                </div>
                                
                                <div>
                                    <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">Save</span>
                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
       

       </div>
     </div>
 </div>
        

 <script src="selectElement.js" type="text/javascript"></script>
<script type="text/javascript">

$(function(){
           $("#Continent_name").on("change",function(){
            var CID =$(this).val();
           $.ajax({
              method:"POST",
              url:"ajaxpro.php",//default current url
              data:{Continent:CID},
              success:function(data){
                  $("#country_name").html(data);
                  
              },
              error:function(){
   
                  $('#country_name').html('<option> select Continent first </option>');
              }
           });
                
           }) ;
        });
        

</script>














<?php include '../includes/admin_footer.php'; ?>



