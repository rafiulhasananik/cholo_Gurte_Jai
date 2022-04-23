<?php
require_once('configure.php');

if(isset($_REQUEST['id']));
$id=$_REQUEST['id'];


$deleteQuery="DELETE FROM `booking_info` WHERE `id`='$id'";
$runQuery=mysqli_query($con,$deleteQuery);

if($runQuery){
    header("location:dashboard.php?right");
}else{
    echo "something went wrong";
}
?>