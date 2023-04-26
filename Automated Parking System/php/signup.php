<?php

require 'config.php';

	$Firstname = $_POST['FirstName']; 
	$Lastname = $_POST['Lastname']; 
	$UserName = $_POST['UserName']; 
	$password = $_POST['password']; 
	$Repeatpassword = $_POST['Repeatpassword']; 
	$city = $_POST['city']; 
	
	$sql= "INSERT INTO registration(FirstName,Lastname,UserName,UserName,password,Repeatpassword,city) VALUES('$Firstname','$Lastname','$UserName','$password','$Repeatpassword','$city')";
		if($con->query($sql) === TRUE){
			echo "Inserted successfully";
		}
		else{
			echo "Error:". $con->error;
		}

$con->close();
?>