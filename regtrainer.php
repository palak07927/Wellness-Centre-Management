<?php
include('functions.php');

if(!$_SESSION['username']){
  header('Location: Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Trainer</title>
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
  <h1>Trainer Details</h1>
  <hr>
  <form class="was-validated" action="functions.php" method="POST">
    <div class="form-group">
      <label for="trainer_id">ID:</label>
      <input type="text" class="form-control" id="trainer_id" placeholder="Enter Trainer ID" name="trainer_id" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="trainer_emailid">Email:</label>
        <input type="email" class="form-control" id="trainer_emailid" placeholder="Enter Trainer Email" name="trainer_emailid" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    <div class="form-group">
        <label for="trainer_name">Name:</label>
        <input type="text" class="form-control" id="trainer_name" placeholder="Enter Trainer Name" name="trainer_name" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="trainer_phoneno">Number:</label>
        <input type="text" class="form-control" id="trainer_phoneno" placeholder="Enter Trainer Number" name="trainer_phoneno" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    <button type="submit" id="inputbtn" name="trainer_submit" class="btn btn-primary">Submit</button>
  </form>
  <br>
  <a class="btn btn-primary" style="margin-left: 0px; margin-bottom: 10px;" href="databasetrainer.php" role="button">Go Back</a>
  <br><br>
</div>
<br><br><br>
</body>
</html>