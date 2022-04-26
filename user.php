<?php

include("connect.php");

$id = $_GET ['id'];

$sql = " SELECT * FROM userinfo WHERE id=".$id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $Fname = $row['Fname'];
    $Lname = $row['Lname'];
    $Email = $row['Email'];
    $Pnumber = $row['Pnumber'];
    $Event = $row['Event'];
    $Date = $row['Date'];
    $Guest = $row['Guest'];
    $Plocation = $row['Plocation'];
    $Clocation = $row['Clocation'];
    $Reception = $row['Reception'];
    $Host = $row['Host'];
    $Hmua = $row['Hmua'];
    $Gown = $row['Gown'];
    $Catering = $row['Catering'];
    $Band = $row['Band'];
    $Coordinator = $row['Coordinator'];
    $VP = $row['VP'];
    $Bcar = $row['Bcar'];
    $Church = $row['Church'];
    $Cake = $row['Cake'];
    $Gtable = $row['Gtable'];
    $Pbooth = $row['Pbooth'];
    $Invi = $row['Invi'];
    $SL = $row['SL'];
    $PS = $row['PS'];
    $Otherp = $row['Otherp'];
    $Others = $row['Others'];


echo $Fname;
echo "<br />";
echo $Lname;
echo "<br />";
echo $Email;
echo "<br />";
echo $Pnumber;
echo "<br />";
echo $Event;
echo "<br />";
echo $Date;
echo "<br />";
echo $Guest;
echo "<br />";
echo $Plocation;
echo "<br />";
echo $Clocation;
echo "<br />";
echo $Reception;
echo "<br />";
echo $Host;
echo "<br />";
echo $Hmua;
echo "<br />";
echo $Gown;
echo "<br />";
echo $Catering;
echo "<br />";
echo $Band;
echo "<br />";
echo $Coordinator;
echo "<br />";
echo $Bcar;
echo "<br />";
echo $Church;
echo "<br />";
echo $Cake;
echo "<br />";
echo $Gtable;
echo "<br />";
echo $Pbooth;
echo "<br />";
echo $Invi;
echo "<br />";
echo $SL;
echo "<br />";
echo $PS;
echo "<br />";
echo $Otherp;
echo "<br />";
echo $Others;
echo "<br />";







?>
  <form class="export-main" action="pdf.php" method="post">
      <input type="submit" name="create_pdf"  value="Create PDF" />
    </form>



