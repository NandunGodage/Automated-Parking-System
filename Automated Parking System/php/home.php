<?php

require 'add.php';


	$Pplace = $_POST["Pplace"];
	$Adatetime= $_POST["Adatetime"];	
    	$Ddatetime= $_POST["Ddatetime"];


$sql= "INSERT INTO homepage(Pplace,Adatetime,Ddatetime) VALUES('$Pplace','$Adatetime','$Ddatetime')";
		if($con->query($sql) === TRUE){
			echo "Inserted successfully";
		}
		else{
			echo "Error:". $con->error;
		}

$con->close();
?>
