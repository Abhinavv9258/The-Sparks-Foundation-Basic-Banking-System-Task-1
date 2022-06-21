<?php
$server_name = "localhost";
$uname = "root";
// $pass = "Fuzzi@#4567";
// $pass = "";
$database_name = "sparks_bank";
$conn = mysqli_connect($server_name, $uname);
//now check the connection
if (!$conn) {
die("Connection Failed:" . mysqli_connect_error());
}
mysqli_select_db($conn, $database_name);
