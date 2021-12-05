<?php
include_once 'connect.php';
session_start();



$user_name =stripslashes($_POST['username']);
$password =md5(stripslashes( $_POST['password']));
$type =stripslashes($_POST['type']) ;
$email=stripslashes($_POST['email']);
$sec_password = md5($password);

$sql="SELECT * FROM LOGIN_INFO WHERE user_name='$user_name' AND e_mail='$email' AND password='$password' AND type='$type'";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    if($type=='doctor'){
        header('location:../Doctorpanel.php');   
    }else{
        header('location:../Patientpanel.php');
    }
 $_SESSION['user_name']="$user_name";   
}else{
    echo"wrong";
   header('location:../login.php');
}

?>