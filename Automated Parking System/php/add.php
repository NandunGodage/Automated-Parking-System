<?php

$con = new mysqli("localhost","root","","safe parking");
    if($con->connect_error){
        die("Connection Failed: ".$con->connect_error);
    }

?>