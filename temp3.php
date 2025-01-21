<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wellness Centre</title>
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
    background-image: url(mainback.jpg);
    background-size: cover;
    background-position: center;
  }

  </style>
</head>
<body>
  
  <!--NAVIGATION BAR-->
  <nav class="navbar navbar-inverse ">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Wellness Centre</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="temp3.php">Home</a></li>
        <li><a href="Facilities.php">Facilities</a></li>
        <li><a href="Packages.php">Packages</a></li>
        <li><a href="Nutrition.php">Nutrition</a></li>
        <li><a href="About.php">About Us</a></li>
        <li><a href="Contact.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Login.php"><span></span>Login</a></li>
      </ul>
    </div>
  </nav>
  


  
  <!--IMAGES-->
  
  <div class="container" style="margin-bottom: 25px; margin-top: 50px;">  
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="1.jpg" alt="1" style="width: 1500px; height: 500px;">
        </div>
        
        <div class="item">
          <img src="2.jpg" alt="2" style="width: 1500px; height: 500px;">
        </div>
        
        <div class="item">
          <img src="3.jpg" alt="3" style="width: 1500px; height: 500px;">
        </div>
        
        <div class="item">
          <img src="4.jpg" alt="4" style="width: 1500px; height: 500px;">
        </div>
      </div>
      
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  
  
  <!--BOTTOM LINKS-->
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-md-6"">
        <h3 style=" "><a href="Facilities.php">Facilities</a></h3>
        <p style="  font-size: 18px">Our centre provides different facilities to its customers
        such as:<br> <ul style="  font-size: 18px"><li>Yoga</li>
        <li>Aerobics</li>
        <li>Weight Training</li>
        <li>Counselling Sessions</li></ul>
        </p>
      </div>
      <div class="col-sm-9 col-md-6">
        <h3 style=" "><a href="Packages.php">Packages</a></h3>
        <p style="  font-size: 18px">Different packages are provided for different people
        in need of different facilities for different timeframes.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3 col-md-6"">
        <h3 style=" "><a href="Nutrition.php">Nutrition</a></h3>
        <p style="  font-size: 18px">To check the importance of balanced diets in a healthy lifestyle, and calorific values of 
        different food items, click on the above link.
        </p>
        </div>
    </div>
  </div>
  
</body>
</html>