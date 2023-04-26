<?php

$con = new mysqli("localhost","root","","parking");
    if($con->connect_error){
        die("Connection Failed: ".$con->connect_error);
    }

?>
