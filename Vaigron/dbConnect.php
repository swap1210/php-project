
<?php
//error_reporting(E_NOTICE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vaigron";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


?>