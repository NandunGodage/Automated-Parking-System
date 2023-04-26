<?php
require 'done.php';
if(isset($_POST["submit"])){

    $fname=$_POST["fname"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];
  
   

   
   $stmt = $con->prepare("insert into help&support (fname,email,subject,message)values(?,?,?,?)");
   $stmt->bind_param("ssss", $fname,$email,$subject,$message);

   $stmt->execute();

   header("Location:help&supportdone.html");


   $stmt->close();
   $con->close();

}
?>