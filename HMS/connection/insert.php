 <?php
include_once 'connect.php';
session_start();

$user_name =stripslashes($_POST['username']);
$contact=stripslashes($_POST['contact']);
$email=stripslashes($_POST['email']);
$password =md5(stripslashes($_POST['password']));
$type =stripslashes($_POST['type']);

$sql="INSERT INTO `login_info`(`user_name`,`contact`,`e_mail`,`password`,`type`)
VALUES ('$user_name', '$contact', '$email', '$password', '$type');";
$_SESSION['user_name']="$user_name";
if($conn->query($sql) == true){
    if($type=='doctor'){
        header('location:../homeDoctor.php');
    }else{
        header('location:../homePatient.php');
    }
}else {
    echo "error";
}
$conn->close();
?> 
