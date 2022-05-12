<?php
include('connect.php');
if(isset($_GET['Del']))
{
    $id = $_GET['Del'];
    $query = " delete from eevent where id = '".$id."'";
    $result = mysqli_query($con,$query);
    if($result)
    { 
        
        header("location:list.php");
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}
else
{
    header("location:list.php");
}
?>