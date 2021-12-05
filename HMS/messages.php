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
            </div>
            </div>
        </div>
        </nav>


   <?php
 include 'connection/connect.php';

 $sql= "SELECT * FROM `contact_us` ";
$result = mysqli_query($conn,$sql);?>
        <table class="table" style="margin-left: 30px ; margin-top: 50px ;">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">messages</th>
      <!-- <th scope="col">DOB</th>
      <th scope="col">doctor alloted</th>
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
      <th><?php echo $row['user_name'] ?></th>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['messages'] ?></td>
    </tr>
  </tbody>
  <?php
  }
}else{
  echo "no messages";
}
 ?>
</table>
</body>
</html>
