<?php

include("functions.php");

$package_id=$_GET['package_id'];
$query="DELETE from package1 where package_id='$package_id'";

if (mysqli_query($con,$query)){
    header('Location: databasepackage.php');
}
else{
    echo "Error deleting record: " .mysqli_error($con);
    }
?>