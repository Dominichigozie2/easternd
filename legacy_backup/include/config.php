<?php
// $servername = "localhost";
// $username = "root";
// $password = "08063334177Dom!";
// $dbname = "eastern_db";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eastern_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


