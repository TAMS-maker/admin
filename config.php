<?php
session_start();
$host = "localhost"; /* Host name */
$dbname = "event"; /* Database name */

$con = mysqli_connect($host, $name,$dbname);

if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>