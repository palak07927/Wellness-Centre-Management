<?php

include("functions.php");

$food_id=$_GET['food_id'];
$query="DELETE from food where food_id='$food_id'";

if (mysqli_query($con,$query)){
    header('Location: databasefood.php');
}
else{
    echo "Error deleting record: " .mysqli_error($con);
    }
?>