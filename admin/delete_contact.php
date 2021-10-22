<?php include "../includes/connection.php";

$query="delete from contact_us where contact_id={$_GET['contact_id']}";
mysqli_query($con, $query);
header("location:manage_contact.php");
?>