
<?php
include '../includes/connection.php';
if(isset($_POST["submit"])){
    
    $side_effect_name = $_POST["side_effects"];//category_name
    $query = "insert side_effects(side_effect_name)
         values('$side_effect_name')";
    mysqli_query($con, $query);
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
                            <strong>Add</strong> Side Effects
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" class="form-inline">
                                <div class="form-group">
                                    <label for="exampleInputName2" class="pr-1  form-control-label">Name of side effect: </label>
                                    <input type="text" name="side_effects" id="exampleInputName2"   class="form-control">
                                </div>

                            
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Add
                            </button>

                        </div>
</form>
                    </div>
                </div>
            </div>

            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Side effects</th>

                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $query = "select * from side_effects";
                        $result = mysqli_query($con, $query);
                        while ($sideEffectSet = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>{$sideEffectSet['side_effect_id']}</td>";
                            echo "<td>{$sideEffectSet['side_effect_name']}</td>";

                            echo "<td><a href='edit_side_effect.php?side_effect_id={$sideEffectSet['side_effect_id']}'>Edit</a></td>";
                            echo "<td><a href='delete_side_effect.php?side_effect_id={$sideEffectSet['side_effect_id']}'>Delete</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include '../includes/admin_footer.php'; ?>