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
     <form class="row g-3" method="POST" action="connection/insert_info.php">
  <div class="col-md-6">
    <label for="inputfname" class="form-label" style="color: white;"><h5>firstname</h5></label>
    <input type="text" class="form-control" id="inputfname" name="firstname">
  </div>
  <div class="col-md-6">
    <label for="inputlname" class="form-label"style="color: white;"><h5>lastname</h5></label>
    <input type="text" class="form-control" id="inputlname" name="lastname">
  </div>

  <div class="col-md-6">
    <label for="inputgender" class="form-label"style="color: white;"><h5>gender</h5></label>
    <select id="inputgender" class="form-select" name="gender">
    <option selected>. . . . .</option> 
    <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputdob" class="form-label"style="color: white;"><h5>date of birth</h5></label>
    <input type="date" class="form-control" id="inputdob" name="dob">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label"style="color: white;"> <h5>Address</h5></label>
    <input type="text" class="form-control" id="inputAddress" name="address">
  </div>
  <div class="col-md-6">
    <label for="inputdisease" class="form-label"style="color: white;"><h5>types of disease </h5></label>
    <select id="inputdisease" class="form-select" name="type_of_disease">
      <option selected>. . . . .</option>
      <option value="heart">heart</option>
      <option value="body_pain">body pain</option>
      <option value="brain">brain</option>
      <option value="accidents">accidents</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputdoctor" class="form-label"style="color: white;"><h5>doctor alloated </h5></label>
    <select id="inputdoctor" class="form-select" name="doctor_alloated">
    <option selected>. . . . .</option>
      <option value="gourav_kochar">gourav_kochar</option>
      <option value="baljinder">baljinder</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputrdate" class="form-label"style="color: white;"><h5>request date</h5></label>
    <input type="date" class="form-control" id="inputrdate" name="request_date">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">save</button>
  </div>
</form>
</body>
</html>
