<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbName = 'twitter';

$conn = new mysqli($server,$username,$password,$dbName);

if($conn->connect_error){
    die("Connection Faild");
}
?>