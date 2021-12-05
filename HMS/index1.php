<html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/fontawesome.min.css">
<script src="js/bootstrap.bundle.min.js"></script>
<title>
    ALL IN ONE HOSPITAL
</title>
    <body style="background-image: url(image/images.jpg);
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
        
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
                <a class="nav-link" style="color:white;" href="login.php"><h6>login</a></h6>
                <a class="nav-link" style="color:white;" href="loginad.php"><h6>login as admin</a></h6>   
            </div>
            </div>
        </div>
        </nav>
        <div style="text-align:center; color:aliceblue"><h1><b>create an account</b></h1></div>
        <form action="connection/insert.php" method="POST">
  <div class="row mb-3" style="margin-top: 90px; margin-left: 20px; color:white;">
    <label for="inputEmail4" class="col-sm-2 col-form-label "><b>Username</b></label>
    <div class="col-sm-6">
    <input type="text" class="form-control " name="username" id="inputEmail4"></div>
  </div>
  <div class="row mb-3" style="margin-left: 20px; color:white;">
    <label for="inputcontact" class="col-sm-2 col-form-label" >contact</label>
    <div class="col-sm-6">
    <input type="tel" class="form-control" id="inputcontact" name="contact" maxlength="10"  ></div>
  </div>
  <div class="row mb-3" style="margin-left: 20px; color:white;">
    <label for="inputemail" class="col-sm-2 col-form-label" >Email</label>
    <div class="col-sm-6">
    <input type="email" class="form-control" id="inputemail" name="email" ></div>
  </div>
  <div class="row mb-3" style="margin-left: 20px; color:white;">
    <label for="inputpassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
    <input type="password" class="form-control" id="inputpassword" name="password" ></div>
  </div>
  
  <div class="row mb-3" style="margin-left: 20px; color:white;">
    <label for="inputtype" class="col-sm-2 col-form-label">Type</label>
    <div class="col-sm-6">
    <select id="inputtype" class="col-sm-2 col-form-select" name="type"></div>
    <option value="patient">Patient</option>
    <option value="doctor">Doctor</option>
    </select>
    </div>
    <div class="row mb-6" style="margin-left: 195px;  color:white;">
  <button type="submit"  class="btn btn-primary col-sm-2" style="margin-left: 30px;">Create account</button>
</div>
    </body>
</html>