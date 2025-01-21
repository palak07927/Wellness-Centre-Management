<?php

$con=mysqli_connect("localhost","root","","wms");
if(!$con){
    die("Connection to the database failed due to" .mysqli_connect_error());
}
session_start();

if(isset($_POST['login_submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * from logintb where username='$username'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0){
        while($user=mysqli_fetch_assoc($result))
        {
            if($username==$user['username'] && $password==$user['password'])
            {
                $_SESSION['username']=$username;
                header('Location: database.php');
            }
            else{
                echo '<script>alert("Error! Username or password invalid.");</script>';
            }
        }
    }
    else
        {
            echo "<script>alert('Invalid credentials!')</script>";
            echo "<script>window.open('Login.php','_self')</script>";
        }
}

if(isset($_POST['food_submit']))
{
    $food_id=$_POST['food_id'];
    $food_name=$_POST['food_name'];
    $carbs=$_POST['carbs'];
    $proteins=$_POST['proteins'];
    $fats=$_POST['fats'];
    $vitamins=$_POST['vitamins'];
    $fibres=$_POST['fibres'];
    $query="INSERT into food(food_id,food_name,carbs,proteins,fats,vitamins,fibres)values('$food_id','$food_name','$carbs','$proteins','$fats','$vitamins','$fibres')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Food added.')</script>";
        echo "<script>window.open('databasefood.php','_self')</script>";
    }
}

if(isset($_POST['trainer_submit']))
{
    $trainer_id=$_POST['trainer_id'];
    $trainer_emailid=$_POST['trainer_emailid'];
    $trainer_name=$_POST['trainer_name'];
    $trainer_phoneno=$_POST['trainer_phoneno'];
    $query="INSERT into trainer(trainer_id,trainer_emailid,trainer_name,trainer_phoneno)values('$trainer_id','$trainer_emailid','$trainer_name','$trainer_phoneno')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Trainer added.')</script>";
        echo "<script>window.open('databasetrainer.php','_self')</script>";
    }
}

if(isset($_POST['package_submit']))
{
    $package_id=$_POST['package_id'];
    $package_name=$_POST['package_name'];
    $package_amount=$_POST['package_amount'];
    $query="INSERT into package1(package_id,package_name,package_amount)values('$package_id','$package_name','$package_amount')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Packages added.')</script>";
        echo "<script>window.open('databasepackage.php','_self')</script>";
    }
}

if(isset($_POST['payment_submit']))
{
    $payment_id=$_POST['payment_id'];
    $payment_name=$_POST['payment_name'];
    $payment_amount=$_POST['payment_amount'];
    $query="INSERT into payment(payment_id,payment_name,payment_amount)values('$payment_id','$payment_name','$payment_amount')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Transactions added.')</script>";
        echo "<script>window.open('databasepayment.php','_self')</script>";
    }
}

if(isset($_POST['customer_submit']))
{
    $customer_id=$_POST['customer_id'];
    $customer_emailid=$_POST['customer_emailid'];
    $customer_name=$_POST['customer_name'];
    $customer_phoneno=$_POST['customer_phoneno'];
    $food_assigned=$_POST['food_assigned'];
    $trainer_id=$_POST['trainer_id'];
    $package_id=$_POST['package_id'];
    $payment_id=$_POST['payment_id'];
    $query="INSERT into customer (customer_id,customer_emailid,customer_name,customer_phoneno,food_assigned,trainer_id,package_id,payment_id)values('$customer_id','$customer_emailid','$customer_name','$customer_phoneno','$food_assigned','$trainer_id','$package_id','$payment_id')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Customer added.')</script>";
        echo "<script>window.open('database.php','_self')</script>";
    }
}

if(isset($_POST['customer_update']))
{
    $customer_id=$_POST['customer_id'];
    $customer_emailid=$_POST['customer_emailid'];
    $customer_name=$_POST['customer_name'];
    $customer_phoneno=$_POST['customer_phoneno'];
    $food_assigned=$_POST['food_assigned'];
    $trainer_id=$_POST['trainer_id'];
    $package_id=$_POST['package_id'];
    $payment_id=$_POST['payment_id'];
    $query="UPDATE customer set customer_emailid='$customer_emailid', customer_name='$customer_name', customer_phoneno='$customer_phoneno', food_assigned='$food_assigned', trainer_id='$trainer_id', package_id='$package_id', payment_id='$payment_id' where customer_id='$customer_id'";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Customer details updated successfully.')</script>";
        echo "<script>window.open('database.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('Error updating customer details.')</script>";
        echo "<script>window.open('database.php','_self')</script>";
    }
}

if(isset($_POST['trainer_update']))
{
    $trainer_id=$_POST['trainer_id'];
    $trainer_emailid=$_POST['trainer_emailid'];
    $trainer_name=$_POST['trainer_name'];
    $trainer_phoneno=$_POST['trainer_phoneno'];
    $query="UPDATE trainer set trainer_emailid='$trainer_emailid', trainer_name='$trainer_name', trainer_phoneno='$trainer_phoneno' where trainer_id='$trainer_id'";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Trainer details updated successfully.')</script>";
        echo "<script>window.open('databasetrainer.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('Error updating trainer details.')</script>";
        echo "<script>window.open('databasetrainer.php','_self')</script>";
    }
}

if(isset($_POST['package_update']))
{
    $package_id=$_POST['package_id'];
    $package_name=$_POST['package_name'];
    $package_amount=$_POST['package_amount'];
    $query="UPDATE package1 set package_name='$package_name', package_name='$package_name', package_amount='$package_amount' where package_id='$package_id'";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Package details updated successfully.')</script>";
        echo "<script>window.open('databasepackage.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('Error updating package details.')</script>";
        echo "<script>window.open('databasepackage.php','_self')</script>";
    }
}

if(isset($_POST['payment_update']))
{
    $payment_id=$_POST['payment_id'];
    $payment_name=$_POST['payment_name'];
    $payment_amount=$_POST['payment_amount'];
    $query="UPDATE payment set payment_name='$payment_name', payment_name='$payment_name', payment_amount='$payment_amount' where payment_id='$payment_id'";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Payment details updated successfully.')</script>";
        echo "<script>window.open('databasepayment.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('Error updating payment details.')</script>";
        echo "<script>window.open('databasepayment.php','_self')</script>";
    }
}

if(isset($_POST['food_update']))
{
    $food_id=$_POST['food_id'];
    $food_name=$_POST['food_name'];
    $carbs=$_POST['carbs'];
    $proteins=$_POST['proteins'];
    $fats=$_POST['fats'];
    $vitamins=$_POST['vitamins'];
    $fibres=$_POST['fibres'];
    $query="UPDATE food set food_name='$food_name', carbs='$carbs', proteins='$proteins', fats='$fats', vitamins='$vitamins', fibres='$fibres' where food_id='$food_id'";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Food details updated successfully.')</script>";
        echo "<script>window.open('databasefood.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('Error updating food details.')</script>";
        echo "<script>window.open('databasefood.php','_self')</script>";
    }
}



function get_trainer(){
    global $con;
    $query="select * from trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $trainer_id=$row['trainer_id'];
        $trainer_emailid=$row['trainer_emailid'];
        $trainer_name=$row['trainer_name'];
        $trainer_phoneno=$row['trainer_phoneno'];
        echo"<tr>
        <td>$trainer_id</td>
        <td>$trainer_name</td>
        <td>$trainer_emailid</td>
        <td>$trainer_phoneno</td>
        </tr>";
    }
}

function get_customer(){
    global $con;
    $query="select * from customer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $customer_id=$_POST['customer_id'];
        $customer_emailid=$_POST['customer_emailid'];
        $customer_name=$_POST['customer_name'];
        $customer_phoneno=$_POST['customer_phoneno'];
        $food_id=$_POST['food_id'];
        $trainer_id=$_POST['trainer_id'];
        $package_id=$_POST['package_id'];
        $payment_id=$_POST['payment_id'];
        echo"<tr>
        <td>$customer_id</td>
        <td>$customer_emailid</td>
        <td>$customer_name</td>
        <td>$customer_phoneno</td>
        <td>$food_id</td>
        <td>$trainer_id</td>
        <td>$package_id</td>
        <td>$payment_id</td>
        </tr>";
    }
}

function get_package(){
    global $con;
    $query="select * from package1";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $package_id=$row['package_id'];
        $package_name=$row['package_name'];
        $package_amount=$row['package_amount'];
        echo"<tr>
        <td>$package_id</td>
        <td>$package_name</td>
        <td>$package_amount</td>
        </tr>";
    }
}

function get_payment(){
    global $con;
    $query="select * from payment";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $payment_id=$row['payment_id'];
        $payment_name=$row['payment_name'];
        $payment_amount=$row['payment_amount'];
        echo"<tr>
        <td>$payment_id</td>
        <td>$payment_name</td>
        <td>$payment_amount</td>
        </tr>";
    }
}

function get_food(){
    global $con;
    $query="select * from food";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $food_id=$row['food_id'];
        $food_name=$row['food_name'];
        $carbs=$row['carbs'];
        $proteins=$row['proteins'];
        $fats=$row['fats'];
        $vitamins=$row['vitamins'];
        $fibres=$row['fibres'];
        echo"<tr>
        <td>$food_id</td>
        <td>$food_name</td>
        <td>$carbs</td>
        <td>$proteins</td>
        <td>$fats</td>
        <td>$vitamins</td>
        <td>$fibres</td>
        </tr>";
    }
}

?>