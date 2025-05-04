<?php
//require_once('connection.php');

// Connection

$conn = mysqli_connect('localhost', 'root','','milkshop');
 
// Check if connection is 
// Successful or not

if (!$conn) {

  die("Connection failed: ". mysqli_connect_error());
}

//echo "Connected successfully";
?>