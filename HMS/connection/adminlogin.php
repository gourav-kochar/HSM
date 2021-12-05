<?php
include_once 'connect.php';

$user_name =stripslashes($_POST['username']);
$password =md5(stripslashes( $_POST['password']));
$sec_password = md5($password);

$sql="SELECT * FROM admin_login WHERE user_name='$user_name' AND password='$password'";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    echo 'Login Successful';
}

?>