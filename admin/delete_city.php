<?php include "../includes/connection.php";

$query="delete from city where city_id={$_GET['city_id']}";
mysqli_query($con, $query);
header("location:manage_city.php");
?>