<?php
include_once 'connect.php';

$user_name =stripslashes($_POST['username']);
$email=stripslashes($_POST['email']);
$message =stripslashes($_POST['message']) ;

$sql="INSERT INTO `contact_us`(`user_name`, `email`, `messages`)
 VALUES ('$user_name','$email','$message');";

if($conn->query($sql) == true){
   echo "message sent";
   
}else {
    echo "sorry message not sent";
}

?>