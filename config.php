<?php
session_start();
$host = "localhost"; /* Host name */
$dbname = "client"; /* Database name */

$con = mysqli_connect($host, $Fname,$dbname);

if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>