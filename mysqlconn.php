<?php
$servername = "plearnja.com";
$username = "plearnja_cpsu6";
$password = "Lj5bU2bW";
$dbname = "plearnja_cpsu6";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
  mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>