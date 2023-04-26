<?php
$ccname = $_POST['cc-name'];
$ccnumber = $_POST['cc-number'];
$ccexp = $_POST['cc-exp'];
$cccvv = $_POST['cc-cvv'];

if(!empty($ccname) || !empty($ccnumber || !empty($ccexp || !empty($cccvv)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "asp";

    //create connection
    $conn= new mysqli($host $dbusername $dbpassword);

    if(mysqli_connect_error()) {
        die('Connect Error C'.mysqli_connect_error().')'.mysqli_connect_error());
    } else{
        $SELECT = "SELECT ccnumber from paymentportal1 where ccnumber =? Limit 1";
        $INSERT = "INSERT into payment (ccname,ccnumber,ccexp,cccvv) values(?,?,?,?)"
        //prepare statement
        $stmt = $conn->prepare($Select);
        $stmt->bind_param("s", $ccnumber);
        $stmt->execute();
        $stmt->bind_result($ccnumber);
        $stmt->store_result();
        $stmt->fetch();
        $rnum = $stmt->num_rows;

        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("ssssii",$ccname, $ccnumber, $ccexp, $cccvv);
            if ($stmt->execute()) {
                echo "New record inserted sucessfully.";
            }
            else {
                echo $stmt->error;
            }
        }
        else {
            echo "Someone already payed using this card.";
        }
        $stmt->close();
        $conn->close();
    }

} else{
    echo"All fields are required";
    die(); 
}

?>