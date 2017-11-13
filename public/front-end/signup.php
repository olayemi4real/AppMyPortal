<!DOCTYPE html>
<html lang="en">
<?php include 'components/session-check-index.php' ?>
<?php require '_database/database.php'; ?>

  <head>
  <title>online forum</title>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/customcss.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <script src="bootstrap-3.3.6-dist/js/jquery-1.12.3.min.js"></script>
  <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <script src="bootstrap/jquery.min.js"></script>
  </head>
  <body>

 <form class="form-horizontal" role="form" action="components/registration.php" method="post">
 <div class="form-group">
    <label class="control-label col-sm-2" for="name">First name</label>
    <div class="col-sm-10">
      <input type="firstname" class="form-control" id="name" placeholder="Enter the your first name" style="width:50%" name="user_firstname">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Last name</label>
    <div class="col-sm-10">
      <input type="lastname" class="form-control" id="name" placeholder="Enter the your lastname" style="width:50%" name="user_lastname">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Faculty</label>
    <div class="col-sm-10">
      <input type="faculty" class="form-control" id="fac" placeholder="Enter your Faculty" style="width:50%" name="user_faculty">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="matric">Matric number:</label>
    <div class="col-sm-10">
      <input type="matric" class="form-control" id="matric" placeholder="Enter your matric number" style="width:50%" name="user_matric">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="dob">DOB</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="date" style="width:50%" name="user_dob">
    </div>
  </div>
  
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="pic">Upload picture</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="upload"  style="width:50%">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email" style="width:50%" name="user_email">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username</label>
    <div class="col-sm-10">
      <input type="user" class="form-control" id="user" placeholder="Enter your username " style="width:50%" name="user_username">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" style="width:50%" name="user_password">
    </div>
  </div>
  
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default btn-lg" name="signup_button">submit</button>
    </div>
  </div>
</form>
  </body>

</html>