<?php

include("connect.php");

$id = $_GET ['id'];

$sql = " SELECT * FROM eevent WHERE id=".$id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $name = $row['name'];
    $email = $row['email'];
    $Pnumber = $row['Pnumber'];
    $eventtype = $row['eventtype'];
    $bdtype = $row['bdtype'];
    $venue = $row['venue'];
    $Date = $row['Date'];
    $Guest = $row['Guest'];



echo $name;
echo "<br />";
echo $email;
echo "<br />";
echo $Pnumber;
echo "<br />";
echo $eventtype;
echo "<br />";
echo $bdtype;
echo "<br />";
echo $Date;
echo "<br />";
echo $Guest;
echo "<br />";







?>



