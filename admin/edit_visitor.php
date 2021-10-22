
<?php
include '../includes/connection.php';
$query  = "select * from visitor where visitor_id = {$_GET['visitor_id']}";
$result = mysqli_query($con, $query);
$visitorSet = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
    // get data from webform 
    $visitor_email = $_POST["visitor_email"];
	$visitor_password = $_POST["visitor_password"];
	$visitor_fullname = $_POST["visitor_fullname"];

    
    $query = "update visitor set visitor_email='$visitor_email',visitor_password='$visitor_password',visitor_fullname='$visitor_fullname'
        where visitor_id = {$_GET['visitor_id']}";
    // perform query 
    mysqli_query($con, $query);
    header("location:manage_visitor.php");
    
}

?>













<?php include '../includes/admin_header.php'; ?>






<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">visitor admin</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Creat visitor</h3>
							</div>
							<hr>
							<form action="" method="post" novalidate="novalidate">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">email</label>
									<input id="cc-pament" name="visitor_email" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $visitorSet["visitor_email"] ?>">
								</div>
								<div class="form-group has-success">
									<label for="cc-name" class="control-label mb-1">password</label>
									<input id="cc-name" name="visitor_password" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
									autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $visitorSet["visitor_password"] ?>">
									<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
								</div>
								<div class="form-group">
									<label for="cc-number" class="control-label mb-1">Full name</label>
									<input id="cc-number" name="visitor_fullname" type="tel" class="form-control cc-number identified visa"  data-val="true"
									data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
									autocomplete="cc-number" value="<?php echo $visitorSet["visitor_fullname"] ?>">
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
			</div>
		</div>

<?php include '../includes/admin_footer.php'; ?>