<?php include "../includes/connection.php";

$query="delete from visitor where visitor_id={$_GET['visitor_id']}";
mysqli_query($con, $query);
header("location:manage_visitor.php");
?>