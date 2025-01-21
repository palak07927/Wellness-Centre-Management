<?php

include("functions.php");

$payment_id=$_GET['payment_id'];
$query="DELETE from payment where payment_id='$payment_id'";

if (mysqli_query($con,$query)){
    header('Location: databasepayment.php');
}
else{
    echo "Error deleting record: " .mysqli_error($con);
    }
?>