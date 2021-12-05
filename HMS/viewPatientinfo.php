<html><?php session_start();
?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/fontawesome.min.css">
<script src="js/bootstrap.bundle.min.js"></script>
<title>
    ALL IN ONE HOSPITAL
</title>
<body style="background-color: grey;"> 
         <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" style="margin-top: 10px; color:white;" ><b><h2>ALL IN ONE HOSPITAL</a></h2></b>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" style="color:white; margin-left:20px" href="index.php" ><h6>Home</a></h6>
                <a class="nav-link" style="color:white;" href="contact.php"><h6>Contact us</a></h6>  
            </div>
            </div>
        </div>
        </nav>


   <?php
 include 'connection/connect.php';
$USERNAME= $_SESSION['user_name'];
 $sql= "SELECT * FROM patient_info WHERE 	user_name='$USERNAME' ";
$result = mysqli_query($conn,$sql);?>
        <table class="table" style="margin-left: 30px ; margin-top: 50px ;">
  <thead>
    <tr>
      <th scope="col">patient id</th>
      <th scope="col">name</th>
      <th scope="col">gender</th>
      <th scope="col">address</th>
      <th scope="col">DOB</th>
      <!-- <th scope="col">doctor alloted</th>
      <th scope="col">type of disease</th>
      <th scope="col">request date</th> -->
    </tr>
  </thead>
  <?php
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc())
   {
     ?>

  <tbody>
    <tr>
      <th><?php echo $row['id'] ?></th>
      <td><?php echo $row['firstname'] ?></td>
      <td><?php echo $row['gender'] ?></td>
      <td><?php echo $row['address'] ?></td>
      <td><?php echo $row['DOB'] ?></td>
      <!-- <td><?php //echo $row['doctar_username'] ?></td>
      <td><?php // echo $row['type_of_disease'] ?></td>
      <td><?php //echo $row['request_date'] ?></td> -->
    </tr>
  </tbody>
  <?php
  }
}else{
  echo "no record found";
}
 ?>
</table>
        <!-- <div class="row" style="margin-top: 10%;" >
//   <div class="col-sm-2" style="margin-left: 30%; ">
//     <div class="card">
//       <div class="card-body">
//         <h5 class="card-title">Book My Appointment</h5>
//         <a href="#" class="btn btn-primary">Book Appointment</a>
//       </div>
//     </div>
//   </div>
//   <div class="col-sm-2"style="margin-left: 10%; ">
//     <div class="card">
//       <div class="card-body">
//         <h5 class="card-title">My Appointments</h5>
//         <a href="#" class="btn btn-primary">View Appointment History</a>
//       </div>
//     </div>
//   </div>
// </div>
// <div class="col-sm-2"style="margin-left: 44%; margin-top: 5%; ">
// <div class="card">
//   <div class="card-body">
//     <h5 class="card-title">Prescriptions</h5>
//     <a href="#" class="btn btn-primary">View Prescription List</a>
//   </div>
// </div>
// </div> -->
</body>
</html>
