<?php include '../includes/admin_header.php';?> 
 
<?php include '../includes/connection.php'; 
            echo '<div class="main-content">
	              <div class="section__content section__content--p30">
		          <div class="container-fluid">';
            $query = "select consultation_image from free_consultation where consultation_id={$_GET['consultation_id']}";
            $result = mysqli_query($con, $query);
            $consSet = mysqli_fetch_assoc($result);
                
            echo "<center>
            <img src='../uploades/{$consSet['consultation_image']}'  width='800' height='800'>;</center>"
           
           

                ?>

    <?php include '../includes/admin_footer.php';?> 