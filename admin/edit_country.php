
<?php
include '../includes/connection.php';
$query  = "select * from country where country_id = {$_GET['country_id']}";
$result = mysqli_query($con, $query);
$countrySet = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
     
$country_name = $_POST['country_name'];
$Continent = $_POST['Continent'];
    
    $query = "update country set country_name='$country_name',Continent_id='$Continent'
        where country_id = {$_GET['country_id']}";
    // perform query 
    mysqli_query($con, $query);
    
    header("location:manage_country.php");
    
}

?>






<?php include '../includes/admin_header.php'; ?>



<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Update Country</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Country</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Country Name</label>
                                    <input id="cc-pament" name="country_name" type="text" class="form-control" aria-required="true" aria-invalid="false" 
                                    value="<?php echo $countrySet["country_name"] ?>"
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Continent Name</label>
                                    <select id="cc-pament" name="Continent" class="form-control">
                                        <?php
                                        $query = "select * from Continent";
                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='{$row['Continent_name']}'>{$row['Continent_name']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                
                                <div>
                                    <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">Update</span>
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






<?php include '../includes/admin_footer.php'; ?>