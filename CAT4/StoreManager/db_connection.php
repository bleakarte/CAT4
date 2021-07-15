<?php
//db connection variables
$host = "localhost";
$username = "root";
$password = "";
$database = "ThriftStore";

//connection variable
$connection = mysqli_connect($host,$username,$password,$database);

//connect confirmation
if (!isset($connection)){
    die("Connection FAILED!");
}
