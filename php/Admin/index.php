<?php
 include "../link.php";
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      body{
        background: rgb(211, 211, 211);  
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
body{   
				background: rgb(211, 211, 211);  
			}  
			#admin-content{  
				font-family: Verdana, Geneva, Tahoma, sans-serif,Mangal Regular;
				border: solid rgb(63, 63, 63) 0px;  
				width:50%;  
				align-content: center;
				border-radius: 20px;  
				margin: 120px auto;  
				background: rgb(255, 255, 255);  
				padding: 50px;  
			} 
			#admin-content:hover{
				border: #337ab7;
			}
			.content-table{
				align-content: center;
			}
			.link{
				background: #3d5a80;  
				color: #fff;  
				padding: 7px;  
				margin-left: 0%; 
				border-radius: 5px; 
				text-decoration: none;
			}
			.link:hover{
 			   background:#ed6b4d ;
            }
    </style>
</head>
<body>
  <?php
  include "header.php";
  ?>
<h1><center>Admin Dashbord</center></h1>

<?php include "users.php"; 
    include "category.php";
    include "post.php";
    ?>
  </body>
</html>