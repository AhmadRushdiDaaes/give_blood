<?php include "../includes/connection.php";

$query="delete from country where country_id={$_GET['country_id']}";
mysqli_query($con, $query);
header("location:manage_country.php");
?>