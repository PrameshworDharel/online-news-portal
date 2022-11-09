<?php   
include '../../link.php';
$id=$_REQUEST['id'];
$sql="delete from user where id='$id'";
if (mysqli_query($conn,$sql)) {
	header("location: http://localhost/online news portal/php/Admin/allusers.php");
	}
else{
echo "Unable to update";

}	
?>