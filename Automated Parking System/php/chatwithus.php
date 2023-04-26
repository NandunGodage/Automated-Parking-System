<?php

require 'config.php';

	$Name = $_POST['Name']; 
	$email = $_POST['email']; 
	$country = $_POST['country']; 
	$phone = $_POST['phone']; 
	
	
	$sql= "INSERT INTO chatwithus(Name,email,country,phone) VALUES('$Name','$email','$country','$phone')";
		if($con->query($sql) === TRUE){
			echo "Inserted successfully";
		}
		else{
			echo "Error:". $con->error;
		}

$con->close();
?>