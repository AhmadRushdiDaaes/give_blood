<?php include "../includes/connection.php";

$query="delete from benefactor where benefactor_id={$_GET['benefactor_id']}";
mysqli_query($con, $query);
header("location:manage_benefactor.php");
?>