<?php
include("connection.php");
$id= $_REQUEST["del"];
$sql= "DELETE FROM `form` WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
if ($data) 
{
	header("location:display.php");
}
else
{
	echo "Delete not performed";
}
?>