<?php
require 'config.php';
if(isset($_POST["submit"])){

    $fName=$_POST["fName"];
    $lName=$_POST["lName"];
    $uName=$_POST["uName"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $zip=$_POST["zip"];
   

   
   $stmt = $con->prepare("insert into myaccount(fName,lName,uName,city,state,zip)values(?,?,?,?,?,?)");
   $stmt->bind_param("sssssi", $fName,$lName,$uName,$city,$state,$zip);

   $stmt->execute();

   header("Location:LoginPage.php");


   $stmt->close();
   $con->close();

}
?>