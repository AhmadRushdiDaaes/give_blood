<?php include '../includes/connection.php';?>
<?php
if(isset($_POST['Continent'])&&!empty($_POST['Continent'])){
    
   
    $id = $_POST['Continent'];
    $query = "select * from country where Continent_id = $id";
    $do = mysqli_query($con,$query);
    $count = mysqli_num_rows($do);
    
    if($count > 0){
        while ($row = mysqli_fetch_array($do)){
            echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
        }
    }else{
        echo '<option>not countries avaliable </option>';
    }
    
    
    
    
    
}else{
    echo '<h1> error </h1>'; 
}


?>