<?php 
include '../includes/connection.php'; 

if (isset($_POST['submit'])) {
    $path = "../uploades/";
    $tmp_name = $_FILES['expert_image']['tmp_name'];
    $file_name = $_FILES['expert_image']['name'];
    move_uploaded_file($tmp_name, $path . $file_name);

    // get data from webform 
    $expert_name = $_POST['expert_name'];
    $expert_position = $_POST['expert_position'];
    $expert_description = $_POST['expert_description'];
    
    

    $query = "insert into our_experts(expert_name,expert_description,expert_photo,expert_position)
        values('$expert_name','$expert_description','$file_name','$expert_position')";
    // perform query 
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
                        <div class="card-header">Add New Experts</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Our Experts</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Expert name</label>
                                    <input id="cc-pament" name="expert_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                </div>

                                

                                
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Expert Position</label>
                                    <input id="cc-number" name="expert_position" type="text" class="form-control cc-number identified visa" value="" data-val="true"
                                           
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                   <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Expert Description</label>
                                    <input id="cc-number" name="expert_description" type="text" class="form-control cc-number identified visa" value="" data-val="true"
                                           
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>

                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Expert image</label>
                                    <input id="cc-number" name="expert_image" type="file" class="form-control cc-number identified visa" value="" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
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


 <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Expert id</th>
                        <th>Expert name</th>
                        <th>Expert position</th>
                        <th>Expert description</th>
                         <th>Expert image</th>
                         <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $query = "select * from our_experts";
                    $result = mysqli_query($con, $query);
                    while ($expertSet = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$expertSet['expert_id']}</td>";
                        echo "<td>{$expertSet['expert_name']}</td>";
                        echo "<td>{$expertSet['expert_position']}</td>"; 
                        
                        echo "<td>{$expertSet['expert_description']}</td>";

                        echo "<td><img src='../uploades/{$expertSet['expert_photo']}' width='200' height='300'></td>";
                        echo "<td><a href='edit_expert.php?expert_id={$expertSet['expert_id']}'>Edit</a></td>";
                        echo "<td><a href='delete_expert.php?expert_id={$expertSet['expert_id']}'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>








                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->













            </div>
        </div>










<?php include '../includes/admin_footer.php'; ?>

