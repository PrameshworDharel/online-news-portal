<?php 
include '../php/Link.php';
	$name=$_REQUEST['uname'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password_1'];
	//echo $name;
		$sql="select Email from user where Email='$email'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			echo "Provided Email address is already used..";
		}
		else{
			$sqli="insert into user(Name,Email,Password,role)values('$name','$email','$password','0')";
			if (mysqli_query($conn,$sqli)) {
				header("location: http://localhost/online news portal/web/login.php");
			}
			else{
				echo "Query Failed";
			}
		}
 ?>