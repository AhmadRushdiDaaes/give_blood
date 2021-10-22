
<?php
include '../includes/connection.php';
$query  = "select * from Continent where Continent_id = {$_GET['Continent_id']}";
$result = mysqli_query($con, $query);
$ContinentSet = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
    // get data from webform 
    $Continent_name = $_POST['Continent_name'];
    
    $query = "update Continent set Continent_name='$Continent_name'
        where Continent_id = {$_GET['Continent_id']}";
    // perform query 
    mysqli_query($con, $query);
    header("location:manage_Continent.php");
    
}

?>


<?php include '../includes/admin_header.php'; ?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>update</strong> category
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" class="form-inline">
                                <div class="form-group">
                                    <label for="exampleInputName2" class="pr-1  form-control-label">Name of Continent: </label>
                                    <input type="text" name="Continent_name" id="exampleInputName2"   class="form-control"
                                           value="<?php echo $ContinentSet["Continent_name"]?>">
                                </div>

                            
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> update
                            </button>

                        </div>
</form>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
<?php include '../includes/admin_footer.php'; ?>