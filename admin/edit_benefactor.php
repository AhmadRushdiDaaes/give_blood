<?php
include '../includes/connection.php';

$query  = "select * from benefactor where benefactor_id = {$_GET['benefactor_id']}";
$result = mysqli_query($con, $query);
$benefactorSet = mysqli_fetch_assoc($result);



if (isset($_POST['submit'])) {
 
    // get data from webform 
    
    $benefactor_name = $_POST["full_name"];
	$benefactor_gender =$_POST["gender"];
	$benefactor_weight =$_POST["weight"];  
	$benefactor_birthday =$_POST["birthday"];
	$benefactor_blood_type =$_POST["blood_type"];
	$benefactor_continent =$_POST["Continent_name"];
	$benefactor_country =$_POST["country_name"]; 
	$benefactor_city =$_POST["city_name"];
	$benefactor_last_Donated =$_POST["last_Donated"]; 
	$benefactor_side_effect =$_POST["side_effect"]; 
	$benefactor_notes =$_POST["notes"]; 
	$benefactor_phone =$_POST["phone"]; 
	$benefactor_email =$_POST["email"]; 






   
 $query = "update benefactor set
 benefactor_name='$benefactor_name',
 benefactor_gender='$benefactor_gender',
 benefactor_weight='$benefactor_weight',
 benefactor_birthday='$benefactor_birthday',
 blood_type='$benefactor_blood_type',
 Continent='$benefactor_continent',
 country='$benefactor_country',
 city='$benefactor_city',
 last_time='$benefactor_last_Donated',
 benefactor_phone='$benefactor_phone',
 benefactor_email='$benefactor_email',
 side_effect='$benefactor_side_effect',
 notes='$benefactor_notes' where benefactor_id = {$_GET['benefactor_id']}";
    // perform query 
    mysqli_query($con, $query);
    header("location:manage_benefactor.php");
    





}
?>


<?php include '../includes/connection.php';?>
 
<?php include '../includes/admin_header.php';?>

<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">blood donor</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Add new blood donor</h3>
							</div>
							<hr>
							<form action="" method="post" novalidate="novalidate">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">full name</label>
									<input id="cc-pament" name="full_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $benefactorSet["benefactor_name"] ?>" >
								</div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1"> gender</label>
                                    <select id="cc-pament" name="gender" class="form-control"  >
                                    
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1"> Weight in Kg</label>
                                    <select id="cc-pament" name="weight" class="form-control"  >
                                    
                                    <option value="+50">اكثر من 50 كيلو</option>
									<option value="-50">اقل من 50 كيلو</option>
									

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">benefactor birthday</label>
                                    <input id="cc-number" name="birthday" type="date" class="form-control cc-number identified visa" value="" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1"> Blood type</label>
                                    <select id="cc-pament" name="blood_type" class="form-control"  >
                                    
                                    <option value="a+">a+</option>
									<option value="a-">a-</option>
									<option value="b+">b+</option>
									<option value="b-">b-</option>
									<option value="o+">o+</option>
									<option value="o-">o-</option>
									<option value="ab+">ab+</option>
									<option value="ab-">ab-</option>

                                    </select>
                                </div>

                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Continent name</label>
									<input id="cc-pament" name="Continent_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $benefactorSet["Continent"] ?> ">
								</div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">country name</label>
									<input id="cc-pament" name="country_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $benefactorSet["country"] ?>">
								</div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">city name</label>
									<input id="cc-pament" name="city_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $benefactorSet["city"] ?>" >
								</div>












                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1"> last time Donated</label>
                                    <select id="cc-pament" name="last_Donated" class="form-control"  >
                                    
                                    <option value="more than three months">اكثر من 3 شهور</option>
                                    <option value="less than three months">اقل من 3 شهور</option>
                                    <option value="never">لم اتبرع من قبل</option>

                                    </select>
                                    
                                </div>

								<div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Side Effect</label>
                                    <select  name="side_effect" class="form-control">
                                        <option value disabled selected>Choose side effect</option>
                                        <?php
                                        $query = "select * from side_effects";
                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='{$row['side_effect_id']}'>{$row['side_effect_name']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
								
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">add notes</label>
									<input id="cc-pament" name="notes" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $benefactorSet["notes"] ?>" >
								</div>

								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">benefactor phone</label>
									<input id="cc-pament" name="phone" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $benefactorSet["benefactor_phone"] ?>" >
								</div>

								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Email (optional)</label>
									<input id="cc-pament" name="email" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $benefactorSet["benefactor_email"] ?> " >
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




<?php include '../includes/admin_footer.php';?>