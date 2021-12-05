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
        <div class="list-group; col-md-3" style="margin-top: 10% ; margin-left: 20px" >
  <a href="viewpatientinfo.php" class="list-group-item list-group-item-action" >
  my detail
  </a>
  <a href="viewmyappointment.php" class="list-group-item list-group-item-action">my Appointments</a>

  <a href="" class="list-group-item list-group-item-action">book Appointment </a>

</div>
</body>
</html>