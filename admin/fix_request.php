<?php include '../includes/connection.php ' ;  
$query = "select * from fixer ";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
use PHPMailer\PHPMailer\PHPMailer;
if(isset($_POST['submit'])){
  
  $customer_id = $_GET['customer_id'];
  $fixer_email = $row['fixer_email'] ; 
  $fixer_id = $row['fixer_id'] ;




    // get data from webform 
    $mail_to=$fixer_email;
    $mail_subject=$_POST["fixer_subject"];
    $mail_message=$_POST["message"];
    
    require_once 'PHPMailer/PHPMailer.php ';
    require_once 'PHPMailer/SMTP.php ';
    require_once 'PHPMailer/Exception.php ';

    $mail = new PHPMailer();
    //smtp setting 
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->SMTPAuth=true;
    $mail->Username="mobifixcomany14@gmail.com";
    $mail->Password="Mobifix123456";
    $mail->Port="465";
    $mail->SMTPSecure ="ssl";


    //emaill settings
    $mail->isHTML(true); 
    $mail->SetFrom("mobifixcomany14@gmail.com");   
    $mail->AddAddress($mail_to);
    $mail->Subject=$mail_subject;
    $mail->Body=$mail_message;
    
    // validation if email sent or not 
    $email_sent = "email sent ";
    $email_notSent = "email maybe not sent";
    if($mail->send())
    {
      $email_sent;
    }
    else
    {
      $email_notSent;
    }



$query = "update customer set fixer_id = $fixer_id where customer_id = $customer_id";
  mysqli_query($con,$query); 



}



?> 



<?php include '../includes/admin_header.php'; ?>




<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">

<form method="post" action="">
  <div class="form-group">
    <label for="exampleFormControlInput1">Fixer email address</label>
    <select name="fixer_id" class="form-control">
    	<option disabled selected > select fixer email </option>
    	<?php
    	include '../includes/connection.php';
    	$query = "select * from fixer ";
    	$result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='{$row['fixer_id']}'>{$row['fixer_email']}</option>";
        }

    	?>
    </select>
  </div>
  
<div class="form-group">
    <label for="exampleFormControlInput1">Subject</label>
    <input type="text" class="form-control" name="fixer_subject" id="exampleFormControlInput1" placeholder="subject" value="you have new customer" >
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">write message to fixer here  : </label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3">
    	please check your account in mobifix now ! 
    	we have a new customer 
    	if you cant proceed with the request kindly get back to us  . 

    </textarea>
  </div>


<div class="form-group">
    
    <input type="submit" name='submit'
    value="send" class="btn btn-primary" id="exampleFormControlInput1" >
  <?php if(isset($email_sent)){
    echo "<p> $email_sent </p>";
  }
  else if(isset($email_notSent)){
    echo "<p>$email_notSent</p>";
  } ?>
  </div>

</form>

</div>
</div>
</div>


	


<?php include '../includes/admin_footer.php'; ?>