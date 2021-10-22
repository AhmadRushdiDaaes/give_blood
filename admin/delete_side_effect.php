<?php include "../includes/connection.php";

$query="delete from side_effects where side_effect_id={$_GET['side_effect_id']}";
mysqli_query($con, $query);
header("location:manage_side_effects.php");
?>