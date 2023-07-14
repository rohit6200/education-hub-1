<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform1";

// $mysqli = new mysqli("localhost","root","","responsiveform1");

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
//    echo "Connection Success"; 
}
else
{
    echo "Connection falied".mysqli_connection_error();
}

?>