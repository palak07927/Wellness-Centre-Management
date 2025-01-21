<?php

include('functions.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .navbar-nav > li > a{
    padding: 25px;
    }
    .navbar-header{
    padding: 10px;
    }
    body
  {
    background-image: url(loginlogin.jpg);
    background-size: cover;
    background-position: center;
  }
  </style>
</head>
<body>
  
  <!--NAVIGATION BAR-->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="temp3.php">Wellness Centre</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="temp3.php">Home</a></li>
        <li><a href="Facilities.php">Facilities</a></li>
        <li><a href="Packages.php">Packages</a></li>
        <li><a href="Nutrition.php">Nutrition</a></li>
        <li><a href="About.php">About Us</a></li>
        <li><a href="Contact.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="Login.php"><span></span>Login</a></li>
      </ul>
    </div>
  </nav>
  
  
  <!--LOGIN LOGO PIC-->
  <div class="container" style="display: flex;justify-content: center;">
    <img src="logo.svg" class="img-circle" alt="loginlogo" width="230" height="270" ;"> 
  </div>
  
  
  <!--FORM-->
  <div class="container" style="width: 600px; justify-content: center;">
    <h2 style="text-align: center; margin-bottom: 20px;">ADMIN LOGIN</h2>
    <form class="form-horizontal" action="functions.php" method="POST">
      <div class="form-group">
        <label class="control-label col-sm-4" for="username" style="margin-left: 5px;">Login ID:</label>
        <div class="col-sm-5" style="margin-left: 10px;">
          <input type="text" class="form-control" id="username" placeholder="Enter LoginID" name="username">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="password" style="margin-left: 5px;">Password:</label>
        <div class="col-sm-5" style="margin-left: 10px;">          
          <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox" name="remember" style="text-align: center;"> Remember me</label>
          </div>
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" id="inputbtn" name="login_submit" class="btn btn-default" style="margin-left: 5px;">Submit</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
</body>
</html>