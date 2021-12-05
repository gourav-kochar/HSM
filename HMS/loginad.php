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
  <button type="button" class="btn btn-primary btn-lg" ><a href="index.php" style="color: white;">Back</a></button>
  <div style="text-align: center; color:white; "><h1>login as admin
  </h1>
  </div>
  <form action="connection/adminlogin.php" method="POST">
  <div class="row mb-3" style="margin-top: 90px; margin-left: 20px; color:white;">
    <label for="inputEmail4" class="col-sm-2 col-form-label "><b>Username</b></label>
    <div class="col-sm-6">
    <input type="text" class="form-control " name="username" id="inputEmail4"></div>
  </div>
  <div class="row mb-3" style="margin-left: 20px; color:white;">
    <label for="inputpassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
    <input type="password" class="form-control" id="inputpassword" name="password" ></div>
  </div>
  <div class="row mb-6" style="margin-left: 195px;  color:white;">
  <button type="submit"  class="btn btn-primary col-sm-1" style="margin-left: 60px;">Log in</button>
</div>


</body>   
</html>
