<?php 
$hostname="localhost";
$user_name="root";
$password="";
$db_name="hospital management";
$conn=mysqli_connect($hostname,$user_name,$password,$db_name);
	
if(!$conn){
    echo "error";
}
// else{
//     echo "success";
// }

?>