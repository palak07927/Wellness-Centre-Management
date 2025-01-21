<?php
include("functions.php");
if(!$_SESSION['username']){
  header('Location: Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body{
    background-image: url('back1.jpg');
    background-size: cover;
    }
  </style>
</head>
<body>
<br><br><br><br>



<!-- Nav tabs -->
<div class="container">
  <ul class="nav nav-tabs justify-content-center" role="tablist">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="database.php" style="color: grey;">Customer</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="database.php">Customer Details</a>
        <a class="dropdown-item" href="regcustomer.php">Add Customer</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="databasetrainer.php" style="color: grey;">Trainer</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="databasetrainer.php">Trainer Details</a>
        <a class="dropdown-item" href="regtrainer.php">Add Trainer</a>      </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="databasepackage.php" style="color: grey;">Package</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="databasepackage.php">Package Details</a>
        <a class="dropdown-item" href="regpackage.php">Add Package</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="databasepayment.php" style="color: grey;">Payment</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="databasepayment.php">Payment Details</a>
        <a class="dropdown-item" href="regpayment.php">Add Payment</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="databasefood.php" style="color: grey;">Food</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="databasefood.php">Food Details</a>
        <a class="dropdown-item" href="regfood.php">Add Food</a>
    </li>
  </ul>
</div>



<!--CONTENT-->
<div class="container" style="width: 80%">
  <br>
  <br>
  <span style="font-size: 50px; font-weight: 400; color: white;">Food Details</span>
  <span style="float : right; margin-top: 25px;">
  <form class="form-group" action="foodsearch.php" method="post" style="margin-right: 50px;" >
  <div class="row">
  <div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="Search by Food Name"></div>
  <div class="col-md-2"><input type="submit" name="food_search" class="btn btn-light" value="Search"> </div></div>           
  </form>
  </span>
  <br>
  <table class="table table-hover">
        <thead>
            <tr style="color: white;">
                <th>FoodID</th>
                <th>Food Name</th>
                <th>Proteins</th>
                <th>Carbs</th>
                <th>Fibres</th>
                <th>Vitamins</th>
                <th>Fats</th>
                <th>Edit Details</th>
                <th>Delete Details</th>
            </tr>
            <?php
                $query="select * from food";
                $result=mysqli_query($con,$query);
                  if(mysqli_num_rows($result)>0){
                    while($food=mysqli_fetch_array($result)){ ?>
                    <tr style="color: rgb(240,240,240);">
                      <td><?php echo $food['food_id']; ?></td>
                      <td><?php echo $food['food_name']; ?></td>
                      <td><?php echo $food['proteins']; ?></td>
                      <td><?php echo $food['carbs']; ?></td>
                      <td><?php echo $food['fibres']; ?></td>
                      <td><?php echo $food['vitamins']; ?></td>
                      <td><?php echo $food['fats']; ?></td>
                      <td><a class="btn btn-primary" href="editfood.php?food_id=<?php echo $food['food_id']; ?>" role="button">Edit Details</a></td>
                      <td><a class="btn btn-danger" href="delete_food.php?food_id=<?php echo $food['food_id']; ?>" role="button">Delete Details</a></td>
                    </tr>
              <?php }
              }else {
                echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 0 results";
              }
            ?>
        </thead>
    </table>
    <a href="logout.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">Logout</a>
</div>
</body>
</html>