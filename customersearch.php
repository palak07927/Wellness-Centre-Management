<?php
include('functions.php');

if(!$_SESSION['username']){
  header('Location: Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer Details</title>
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
  <span style="font-size: 50px; font-weight: 400; color: white;">Customer Details</span>
  <br>
  <br>
  <table class="table table-hover">
      <thead>
        <tr style="color: white;">
          <th>Customer ID</th>
          <th>Customer Name</th>
          <th>Customer Email ID</th>
          <th>Customer Phone No</th>
          <th>Food Itmes Assigned</th>
          <th>Trainer ID</th>
          <th>Package ID</th>
          <th>Payment ID</th>
          <th>Edit Details</th>
          <th>Delete Details</th>
        </tr>
        <?php
        if(isset($_POST['customer_search'])){
            $customer_name=$_POST['search'];
            $query="select * from customer where customer_name='$customer_name'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0){
            while($customer=mysqli_fetch_array($result)){ ?>
            <tr style="color: rgb(240,240,240);">
              <td><?php echo $customer['customer_id']; ?></td>
              <td><?php echo $customer['customer_name']; ?></td>
              <td><?php echo $customer['customer_emailid']; ?></td>
              <td><?php echo $customer['customer_phoneno']; ?></td>
              <td><?php echo $customer['food_assigned']; ?></td>
              <td><?php echo $customer['trainer_id']; ?></td>
              <td><?php echo $customer['package_id']; ?></td>
              <td><?php echo $customer['payment_id']; ?></td>
              <td><a class="btn btn-primary" href="editcustomer.php?customer_id=<?php echo $customer['customer_id']; ?>" role="button">Edit Details</a></td>
              <td><a class="btn btn-danger" href="delete_customer.php?customer_id=<?php echo $customer['customer_id']; ?>" role="button">Delete Details</a></td>
            </tr>
          <?php }
          }else {
            echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 0 results";
          }
        }
        ?>
      </thead>
    </table>
    <a href="database.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">Go Back</a>
  </div>