<?php
require 'config.php';
if(isset($_POST["submit"])){

    $email=$_POST["email"];
    $passwrd=$_POST["passwrd"];
   
   

   
   $stmt = $con->prepare("insert into email_and_passwrd(email,passwrd) values(?,?)");
   $stmt->bind_param("ss", $email,$passwrd);

   $stmt->execute();

   header("Location:HomePage.php");


   $stmt->close();
   $con->close();

}
?>