<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "DBNAME";


$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
   //  echo"<h1 style='color:red'>Connected</h1>";
   }
?>