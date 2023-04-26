<?php
$email = $_POST['email'];
$userx = $_POST['exp'];


if(!empty($email) || !empty($userx)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "asp";

    //create connection
    $conn= new mysqli($host $dbusername $dbpassword);

    if(mysqli_connect_error()) {
        die('Connect Error C'.mysqli_connect_error().')'.mysqli_connect_error());
    } else{
        $SELECT = "SELECT email from feedback where email =? Limit 1";
        $INSERT = "INSERT into feedback (email, userx) values(?,?)"
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
            $stmt->bind_param("ssssii",$email, $userx);
            if ($stmt->execute()) {
                echo "New record inserted sucessfully.";
            }
            else {
                echo $stmt->error;
            }
        }
        else {
            echo "Given feedback using this email already";
        }
        $stmt->close();
        $conn->close();
    }

} else{
    echo"All fields are required";
    die(); 
}

?>