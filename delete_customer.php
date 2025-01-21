<?php

include("functions.php");

$customer_id=$_GET['customer_id'];
$query="DELETE from customer where customer_id='$customer_id'";

if (mysqli_query($con,$query)){
    header('Location: database.php');
}
else{
    echo "Error deleting record: " .mysqli_error($con);
    }
?>