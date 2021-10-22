<?php
// connect to DB
    $con = mysqli_connect("localhost","root","","give_blood");
    if(!$con){
        die("cannot connect to server");
    }
    ?>