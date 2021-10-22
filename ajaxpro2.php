<?php include '../includes/connection.php';?>
<?php
if(isset($_POST['country'])&&!empty($_POST['country'])){
    
   
    $id = $_POST['country'];
    $query = "select * from city where country_id = $id";
    $do = mysqli_query($con,$query);
    $count = mysqli_num_rows($do);
    
    if($count > 0){
        while ($row = mysqli_fetch_array($do)){
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }else{
        echo '<option>not cities avaliable </option>';
    }
    
    
    
    
    
}else{
    echo '<h1> error </h1>'; 
}


?>