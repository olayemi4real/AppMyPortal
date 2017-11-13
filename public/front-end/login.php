<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>My portal</title>
      <meta charset="utf-8">
      <meta charset="utf-8">
      <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/customcss.css">
      <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
      <script src="bootstrap-3.3.6-dist/js/jquery-1.12.3.min.js"></script>
      <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
      <script src="bootstrap/jquery.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  </head>
  <body id="top">
  <div class="wrapper row1">
      <header id="header" class="hoc clear">
          <!-- ################################################################################################ -->
          <div id="logo" class="fl_left">
              <h1><a href="index.html">MY PORTAL</a></h1>
          </div>
          <nav id="mainav" class="fl_right">
              <ul class="clear">
                  <li class="active"><a href="index.html">HOME</a></li>
                  <li><a class="drop" href="register.php">REGISTER</a>
                  <li><a href="login.php">LOG IN</a></li>
              </ul>
          </nav>
      </header>
  </div>
<h3 style="color:#65aeee;">Please Log In or <a href="register.php">Register</a></h3>
 <form class="form-horizontal" role="form" action="components/login-process.php" method="post" name="login">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Username/Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Enter email" style="width:50%" name="username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" style="width:50%" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default btn-lg" name="login_button">submit</button>
    </div>
  </div>
</form>
  </body>

</html>