<?php 
include("connection.php");
$id=$_REQUEST["uid"];
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$address=$_REQUEST["address"];
$phone=$_REQUEST["phone"];
$gender=$_REQUEST["gender"];
$degree=$_REQUEST["degree"];
$language=implode(",",$_REQUEST['language']);
$filename=$_FILES["uploadimage"]["name"]; ///type of file
$tmpname=$_FILES["uploadimage"]["tmp_name"];///path of file
$folder="image/".$filename;
move_uploaded_file($tmpname,$folder);
echo "<img src='$folder' height='100' width='100'>";
$sql="UPDATE `form` SET `name`='$name',`email`='$email',`address`='$address',`phone`='$phone',`gender`='$gender',`degree`='$degree',`language`='$language',`picsource`='$folder' WHERE user_id='$id' ";
$data=mysqli_query($conn,$sql);
if($data)
{
	header("location:display.php");
}
else
{
	echo "not connected";
}
?>