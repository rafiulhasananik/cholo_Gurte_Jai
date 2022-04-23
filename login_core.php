<?php
require_once('configure.php');

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];


$auth="SELECT * FROM `auth_info` WHERE `email`='$email' AND `password`='$password'";

$runQuery=mysqli_query($con,$auth);

$chakeCount= mysqli_num_rows($runQuery);

if($runQuery==true){
    if($chakeCount===1){
        setcookie("currentAdmin",$email,time()+(86400*7));
        header("location:dashboard.php");

    }else{
        header('location:login.php?wrong');
    }
}

?>