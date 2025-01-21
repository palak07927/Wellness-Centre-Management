<?php
include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nutrition</title>
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
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="temp3.php">Wellness Centre</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="temp3.php">Home</a></li>
        <li><a href="Facilities.php">Facilities</a></li>
        <li><a href="Packages.php">Packages</a></li>
        <li class="active"><a href="Nutrition.php">Nutrition</a></li>
        <li><a href="About.php">About Us</a></li>
        <li><a href="Contact.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Login.php"><span></span> Login</a></li>
      </ul>
    </div>
  </nav>
  
<br>
<div class="container" style="width: 80%" >
<h1 style=" ">Health And Nutrition</h1>
<p style="  font-size: 18px">Today everyone wants a healthy body without any kind of diseases so that they ca have a healthy lifestyle.
A healthy eating plan is very important in maintaining a healthy lifestyle. This eating plan is called a Balanced Diet.</p>

<br>

<h1 style="">What Is A Balanced Diet ?</h1>
<p style="font-size: 18px">A balanced diet gives your body the nutrients it needs to function 
correctly. To get the nutrition you need, most of your daily calories 
should come from:
<ul style="  font-size: 18px">
<li>Fresh Fruits</li>
<li>Fresh Vegetables</li>
<li>Whole Grains</li>
<li>Legumes</li>
<li>Nuts</li>
<li>Lean Proteins</li>
</ul>
</p>

<br>

<h1 style=" ">Why Balanced Diet ?</h1>
<p style="  font-size: 18px">
A balanced diet supplies the nutrients your body needs to work 
effectively. Without balanced nutrition, your body is more prone to 
disease, infection, fatigue, and low performance.
Without exercise, they’ll also have a higher risk of obesity and various diseases 
that make up metabolic syndrome, such as type 2 diabetes and high blood pressure.
According to the Center for Science in the Public Interest, 4 of the 
top 10 leading causes of death in the United States are directly linked to diet.
These are:
<ul style="  font-size: 18px">
<li>Heart disease</li>
<li>Cancer</li>
<li>Stroke</li>
<li>Type 2 diabetes</li>
</ul>
</p>

<br>

<h1 style=" ">About calories</h1>
<p style="  font-size: 18px">The number of calories in a food refers to the amount of energy stored in that food. Your body uses calories from food for walking, thinking, breathing, and other important functions.

The average person needs about 2,000 calories every day to maintain their weight, but the amount will depend on their age, sex, and physical activity level.

Males tend to need more calories than females, and people who exercise need more calories than people who don’t.

Following are the calorie intakes for males and females of different ages:
</p>
<br>


<table class="table table-hover" style="margin-left: 50px;   font-size: 18px">
<tbody><tr><td><strong>Person</strong></td><td><strong>Calorie requirements</strong></td></tr><tr><td>Sedentary children: 2–8 years</td><td>1,000–1,400</td></tr><tr><td>Active children: 2–8 years</td><td>1,000–2,000</td></tr><tr><td>Females: 9–13 years</td><td>1,400–2,200</td></tr><tr><td>Males: 9–13 years</td><td>1,600–2,600</td></tr><tr><td>Active females: 14–30 years</td><td>2,400</td></tr><tr><td>Sedentary females: 14–30 years</td><td>1,800–2,000</td></tr><tr><td>Active males: 14–30 years</td><td>2,800–3,200</td></tr><tr><td>Sedentary males: 14–30 years</td><td>2,000–2,600</td></tr><tr><td>Active people: 30 years and over</td><td>2,000–3,000</td></tr><tr><td>Sedentary people: 30 years and over</td><td>1,600–2,400</td></tr></tbody>
</table>
<p style="  font-size: 18px">&nbsp &nbsp &nbsp &nbsp &nbsp Following table contains nutrients among diiferent food items.</p>

</div> 
  
<div class="container" style="width: 80%">
  <span style="margin: 50px; font-size: 50px; font-weight: 400;  ">Food Details</span>
  <span style="float : right; margin-top: 25px;">
  <form class="form-group" action="foodsearch.php" method="post">
  <div class="row">         
  </form>
  </span>
  <table class="table table-hover" style="margin-right:500px;  font-size: 18px">
        <thead>
            <tr>
                <th>FoodID</th>
                <th>Food Name</th>
                <th>Proteins</th>
                <th>Carbs</th>
                <th>Fibres</th>
                <th>Vitamins</th>
                <th>Fats</th>
            </tr>
        </thead>
        <?php
          get_food();
        ?>
    </table>
</div>
</body>
</html>