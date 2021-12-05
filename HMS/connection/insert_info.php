<?php
include_once 'connect.php';
session_start();

$firstname =stripslashes($_POST['firstname']);
$lastname=stripslashes($_POST['lastname']);
$gender=stripslashes($_POST['gender']);
$address =stripslashes($_POST['address']);
$type_of_disease =stripslashes($_POST['type_of_disease']);
$doctor_alloated =stripslashes($_POST['doctor_alloated']);
$USERNAME= $_SESSION['user_name'];
$dob =stripslashes($_POST['dob']);
$request_date=stripslashes($_POST['request_date']);


$sql="INSERT INTO `patient_info`(`user_name`, `firstname`, `lastname`, `gender`, `address`, `type_of_disease`, `request_date`, `doctar_alloted`, `doctar_username`, `DOB`)
VALUES ('$USERNAME', '$firstname', '$lastname', '$gender', '$address', '$type_of_disease','$request_date','$doctor_alloated','$doctor_alloated','$dob');";

if($conn->query($sql) == true){
    header('location:../patientpanel.php');
   
}else {
    echo "error";
}

?> 
