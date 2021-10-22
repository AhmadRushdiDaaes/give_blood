<?php include "../includes/connection.php";

$query="delete from Continent where Continent_id={$_GET['Continent_id']}";
mysqli_query($con, $query);
header("location:manage_Continent.php");
?>