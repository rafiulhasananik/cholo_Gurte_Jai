<?php
require_once('configure.php');

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];
$location=$_REQUEST['location'];
$guests=$_REQUEST['guests'];
$arrivals=$_REQUEST['arrivals'];
$leaving=$_REQUEST['leaving'];

$insertQuery="INSERT INTO `booking_info`(`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`)
VALUES 
('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

$runQuery=mysqli_query($con,$insertQuery);

if($runQuery){
    header('location: book.php?right');
}else{
    echo "something went wrong";
}

?>