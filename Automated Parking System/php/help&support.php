<?php
$fname = $_POST['firstname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(!empty($fname) || !empty($email) || !empty($subject) || !empty($message)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "aps";

    //create connection
    $conn= new mysqli($host $dbusername $dbpassword);

    if(mysqli_connect_error()) {
        die('Connect Error C'.mysqli_connect_error().')'.mysqli_connect_error());
    } else{
        $SELECT = "SELECT email from help&support where email =? Limit 1";
        $INSERT = "INSERT into help&support (fname,email,subject,message) values(?,?,?,?)"
        //prepare statement
        $stmt = $conn->prepare($Select);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $stmt->fetch();
        $rnum = $stmt->num_rows;

        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("ssss",$fname, $email, $subject, $message);
            if ($stmt->execute()) {
                echo "New record inserted sucessfully.";
            }
            else {
                echo $stmt->error;
            }
        }
        else {
            echo "Someone already registers using this email.";
        }
        $stmt->close();
        $conn->close();
    }

} else{
    echo"All fields are required";
    die(); 
}

?>