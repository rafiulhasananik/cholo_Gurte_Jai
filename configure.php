<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'travel';

$con = mysqli_connect($hostname, $username, $password,$db);

if($con==false){
    echo "something went wrong";
}
?>