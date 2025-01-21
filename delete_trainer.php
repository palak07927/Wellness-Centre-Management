<?php

include("functions.php");

$trainer_id=$_GET['trainer_id'];
$query="DELETE from trainer where trainer_id='$trainer_id'";

if (mysqli_query($con,$query)){
    header('Location: databasetrainer.php');
}
else{
    echo "Error deleting record: " .mysqli_error($con);
    }
?>