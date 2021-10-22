
<?php
include '../includes/connection.php';
$query  = "select * from side_effects where side_effect_id = {$_GET['side_effect_id']}";
$result = mysqli_query($con, $query);
$sideEffectSet = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
    // get data from webform 
    $side_effect_name = $_POST['side_effect_name'];
    
    $query = "update side_effects set side_effect_name='$side_effect_name'
        where side_effect_id = {$_GET['side_effect_id']}";
    // perform query 
    mysqli_query($con, $query);
    header("location:manage_side_effects.php");
    
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
                            <strong>update</strong> Side Effect
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" class="form-inline">
                                <div class="form-group">
                                    <label for="exampleInputName2" class="pr-1  form-control-label">Name of side effect: </label>
                                    <input type="text" name="side_effect_name" id="exampleInputName2"   class="form-control"
                                           value="<?php echo  $sideEffectSet["side_effect_name"]?>">
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