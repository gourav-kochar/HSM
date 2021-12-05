<html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/fontawesome.min.css">
<script src="js/bootstrap.bundle.min.js"></script>

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
        <div style="text-align:center; color:aliceblue"><h1><b>drop us a message</b></h1></div> 
        <form action="connection/insert_message.php" method="POST">
  <div class="row mb-3" style="margin-top: 90px; margin-left: 20px; color:white; ">
    <label for="inputname1" class="col-sm-2 col-form-label"><b>YOUR NAME</b></label>
    <div class="col-sm-3">
      <input type="name1" class="form-control" id="inputname" name="username">
    </div>
  </div>
  <div class="row mb-3" style="margin-left: 20px; color:white;">
    <label for="inputemail" class="col-sm-2 col-form-label"><b>YOUR EMAIL</b></label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputemail" name="email">
    </div>
  </div>
  <div class="row mb-3" style="margin-left: 20px; color:white;">
  <label for="inputmessage" class="col-sm-2 col-form-label"><b>YOUR MESSAGE</b></label>
  <div class="col-sm-3" >
      <input type="message" class="form-control" id="inputmessage" name="message">
    </div>
</div>
  <button type="submit"  class="btn btn-primary" style="margin-left: 30px;">Submit</button>
</form>
    </body>
</html>