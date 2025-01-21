<?php
include('functions.php');

if(!$_SESSION['username']){
  header('Location: Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Food</title>
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
  <h1>Update Food Details</h1>
  <hr>
  <form class="was-validated" action="functions.php" method="POST">
  <?php
        $food_id=$_GET['food_id'];
        $query="select * from food where food_id='$food_id'";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){
            while($food=mysqli_fetch_array($result)){ ?>
                <div class="form-group">
                <label for="food_id">ID:</label>
                <input type="text" class="form-control" id="food_id" placeholder="Enter Food ID" name="food_id" value="<?php echo $food['food_id']; ?>" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="food_name">Name:</label>
                    <input type="text" class="form-control" id="food_name" placeholder="Enter Food Name" name="food_name" value="<?php echo $food['food_name']; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="proteins">Proteins:</label>
                    <input type="text" class="form-control" id="proteins" placeholder="Enter Proteins Amount" name="proteins" value="<?php echo $food['proteins']; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="carbs">Carbs:</label>
                    <input type="text" class="form-control" id="carbs" placeholder="Enter Carbs Amount" name="carbs" value="<?php echo $food['carbs']; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="fibres">Fibres:</label>
                    <input type="text" class="form-control" id="fibres" placeholder="Enter Fibres Amount" name="fibres" value="<?php echo $food['fibres']; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="vitamins">Vitamins:</label>
                    <input type="text" class="form-control" id="vitamins" placeholder="Enter Vitamins Amount" name="vitamins" value="<?php echo $food['vitamins']; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="fats">Fats:</label>
                    <input type="text" class="form-control" id="fats" placeholder="Enter Fats Amount" name="fats" value="<?php echo $food['fats']; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            <button type="submit" id="inputbtn" name="food_update" class="btn btn-primary" style="margin-bottom: 10px;">Update Details</button>
        <?php }
        }else {
           echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 0 results";
        }
        ?>
  </form>
  <a class="btn btn-primary" style="margin-left: 0px; margin-bottom: 10px;" href="databasefood.php" role="button">Go Back</a>
  <br><br>
</div>
<br><br><br>
</body>
</html>