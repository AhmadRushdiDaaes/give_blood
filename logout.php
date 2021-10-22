<?php
session_start();
unset($_SESSION['visitor_id']);
header("location:index.php");

?>