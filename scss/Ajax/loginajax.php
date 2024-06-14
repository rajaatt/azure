<?php
ob_start();
session_start();
include("../../config/connect.php");

if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $loginquery = "SELECT * FROM customers WHERE `EMAIL_ID` = '$email' AND `PASSWORD` = '$password'";
   
    $exutequery = mysqli_query($con, $loginquery);

    if ($exutequery && mysqli_num_rows($exutequery) == 1) {
        $row = mysqli_fetch_assoc($exutequery);
        $_SESSION["email"] = $row["EMAIL_ID"];
        $_SESSION["firstname"] = $row["FNAME"];
        $_SESSION["lastname"] = $row["LNAME"];
        echo "1";
    } else {
        echo "2";
    }
}

ob_flush();
?>