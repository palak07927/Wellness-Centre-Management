<?php
include('functions.php');

if(!$_SESSION['username']){
  header('Location: Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Customer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
      body{
        background-image: url(regback2.jpg);
        background-size: cover;
      }
      .container{
          width: 50%;
          margin-top: 75px;
          background-image: url(formback3.jpg);
          background-size: cover;
          border-radius: 20px;
          background-position: center;
      }
  </style>
</head>
<body>

<div class="container">
<br>
  <h1>Customer Details</h1>
  <hr>
  <form class="was-validated" action="functions.php" method="POST">
    <div class="form-group">
      <label for="customer_id">ID:</label>
      <input type="text" class="form-control" id="customer_id" placeholder="Enter Customer ID" name="customer_id" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="customer_name">Name:</label>
        <input type="text" class="form-control" id="customer_name" placeholder="Enter Customer Name" name="customer_name" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="customer_emailid">Email:</label>
        <input type="email" class="form-control" id="customer_emailid" placeholder="Enter Customer Email" name="customer_emailid" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="customer_phoneno">Phone No:</label>
        <input type="text" class="form-control" id="customer_phoneno" placeholder="Enter Customer Number" name="customer_phoneno" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="food_assigned">Food items:</label>
        <input type="text" class="form-control" id="food_assigned" placeholder="Enter food names" name="food_assigned" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="trainer_id">Trainer ID:</label>
        <input type="text" class="form-control" id="trainer_id" placeholder="Enter trainer id" name="trainer_id" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="package_id">Package ID:</label>
        <input type="text" class="form-control" id="package_id" placeholder="Enter package id" name="package_id" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="payment_id">Payment ID:</label>
        <input type="text" class="form-control" id="payment_id" placeholder="Enter payment id" name="payment_id" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    <button type="submit" id="inputbtn" name="customer_submit" class="btn btn-primary">Submit</button>
  </form>
  <br>
  <a class="btn btn-primary" style="margin-left: 0px; margin-bottom: 10px;" href="database.php" role="button">Go Back</a>
  <br><br>
</div>
<br><br><br>
</body>
</html>