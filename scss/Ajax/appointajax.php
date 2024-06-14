<?php
include("../../config/connect.php");
if(
    !empty($_POST["#firstName"]) &&
     !empty($_POST["#lastName"]) &&
      !empty($_POST["MiddleNameSignUp"]) &&
       !empty($_POST["passSignUp"]) &&
        !empty($_POST["emailSignUp"]) 
)
{
    $FisrtName=$_POST["firstNameSignUp"];
    $MiddeName=$_POST["MiddleNameSignUp"];
    $LastName=$_POST["lastNameSignUp"];
    $password=$_POST["passSignUp"];
    $emailid=$_POST["emailSignUp"];

   $registerquery="INSERT INTO `customers` (`FNAME`, `MNAME`, `LNAME`, `EMAIL_ID`, `PASSWORD`) VALUES ('$FisrtName', '$MiddeName', '$LastName', '$emailid', '$password')";

   $exutequery=mysqli_query($con,$registerquery);
   if($exutequery)
   {
    echo("1");
   }
   else{
    echo("2");
   }
}
?>