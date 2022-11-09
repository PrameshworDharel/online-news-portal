<?php
session_start();
		
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device=width, initial-scale=1.0">
		<title>news</title>
		<!-- <link rel="stylesheet" href="css\style.css"> -->
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<style>
.menu{
    display: flex;
    justify-content: center;
    color: #000;
	background-color: #333;
} 
ul li{
	margin: 10px;
}
.menu  a {
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 9px 20px;
  text-decoration: none;
  font-size: 17px;
  width: auto;
}
.menu  a:hover {
  background-color: #337ab7;
  color: black;
}

.menu  a.active {
  background-color: #ed6b4d;
  color: white;
}

    </style>
</head>
<body>
<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 87 13.52">
			<defs>
				<style>.cls-1{fill:#3d5a80;}.cls-2{fill:#ed6b4d;}</style>
			</defs>
			<path class="cls-1" d="M5.31,41.51h2.5V54.76H5.31Zm.91,0H14v2.41H6.22Zm0,5.59H13v2.4H6.22Z" transform="translate(-5.31 -41.37)"/>
			<path class="cls-2" d="M16.86,41.5h2.5V54.76h-2.5Zm1,5.52h4.61a1.2,1.2,0,0,0,.68-.19,1.27,1.27,0,0,0,.45-.54,2.1,2.1,0,0,0,.17-.82,1.91,1.91,0,0,0-.16-.82,1.3,1.3,0,0,0-.45-.55,1.21,1.21,0,0,0-.69-.19H17.85V41.5h4.82a3.78,3.78,0,0,1,1.92.49,3.37,3.37,0,0,1,1.28,1.39,5,5,0,0,1,0,4.17,3.27,3.27,0,0,1-1.29,1.39,3.65,3.65,0,0,1-1.91.49H17.85Zm2.79,2,2.67-.42,3.57,6.16h-3Z" transform="translate(-5.31 -41.37)"/>
			<path class="cls-2" d="M30,41.51h2.5V54.76H30Zm.9,0h8v2.41h-8Zm0,5.47h7v2.41h-7Zm0,5.38h8v2.4h-8Z" transform="translate(-5.31 -41.37)"/>
			<path class="cls-2" d="M45.84,41.51h1.58l5.07,13.25H49.8l-3.17-9-3.17,9H40.77Zm-2.63,8.72h7v2.41h-7Z" transform="translate(-5.31 -41.37)"/>
			<path class="cls-2" d="M55.07,41.51h2.49V54.76H55.07Zm1.25,10.85H59.5a2.77,2.77,0,0,0,1.91-.6,2.09,2.09,0,0,0,.67-1.67v-3.9a2.1,2.1,0,0,0-.67-1.68,2.77,2.77,0,0,0-1.91-.59H56.32V41.51h3.13a6.55,6.55,0,0,1,2.83.56,4,4,0,0,1,1.78,1.62,5.07,5.07,0,0,1,.61,2.57V50a5,5,0,0,1-.59,2.5,4,4,0,0,1-1.76,1.66,6.4,6.4,0,0,1-2.88.59H56.32Z" transform="translate(-5.31 -41.37)"/>
			<path class="cls-1" d="M69.91,54.29a4.18,4.18,0,0,1-1.7-1.71,5.3,5.3,0,0,1-.6-2.57V46.26a5.33,5.33,0,0,1,.6-2.57A4.24,4.24,0,0,1,69.91,42,5.59,5.59,0,0,1,75,42a4.24,4.24,0,0,1,1.7,1.71,5.33,5.33,0,0,1,.6,2.57V50a5.3,5.3,0,0,1-.6,2.57A4.18,4.18,0,0,1,75,54.29a5.59,5.59,0,0,1-5.08,0Zm3.72-2.18a1.93,1.93,0,0,0,.79-.81,2.53,2.53,0,0,0,.28-1.22V46.2A2.57,2.57,0,0,0,74.42,45a1.93,1.93,0,0,0-.79-.81,2.37,2.37,0,0,0-1.18-.29,2.44,2.44,0,0,0-1.19.29,1.91,1.91,0,0,0-.78.81,2.57,2.57,0,0,0-.28,1.23v3.88a2.53,2.53,0,0,0,.28,1.22,1.91,1.91,0,0,0,.78.81,2.33,2.33,0,0,0,1.19.29A2.27,2.27,0,0,0,73.63,52.11Z" transform="translate(-5.31 -41.37)"/>
			<path class="cls-1" d="M89,41.51h3.29V54.76H90V44.47l.09.59L87.6,53.29H85.39l-2.53-8,.09-.77V54.76H80.68V41.51H84l2.53,8.93Z" transform="translate(-5.31 -41.37)"/>
		</svg>
        <div class="menu">      
        <?php
                
                include "link.php";

                if(isset($_GET['cid'])){
                  $cat_id = $_GET['cid'];
                }

                $sql = "SELECT * FROM category WHERE post > 0";
                $result = mysqli_query($conn, $sql) or die("Query Failed. : Category");
                if(mysqli_num_rows($result) > 0){
                  $active = "";
              ?>
                <ul class='menu'>
                  <li><a href='index.php'>Home</a></li>
                  <?php while($row = mysqli_fetch_assoc($result)) {
                    if(isset($_GET['cid'])){
                      if($row['category_id'] == $cat_id){
                        $active = "active";
                      }else{
                        $active = "";
                      }
                    }
                    echo "<li><a class='{$active}' href='category.php?cid={$row['category_id']}'>{$row['category_name']}</a></li>";
                  } ?>
               
                <?php } ?>
					
						<?php

							if (isset($_REQUEST['submit'])) {
							$conn=mysqli_connect('localhost','root','','newsportal') or die("Connection error"."".mysqli_connec_error());
							$result=mysqli_query($conn,$sql);
							while ($rows=mysqli_fetch_assoc($result)) {
							session_start();
							$_SESSION['Name']=$rows['Name'];
							$_SESSION['Id']=$rows['Id'];
							$id=$_SESSION['Id'];
							echo $id;
							$sql1="SELECT Name FROM user where Id='$id'";
							$_SESSION['Name']=$rows['Name'];
						   if($_SESSION['Name']>0){
								echo "Welcome".$_SESSION['Name']."";
							}
							else{
								echo "Log In";
							}
						}
					} ?>
					 <?php 
					  if(isset($_SESSION['Email'])){
						 echo '<a href="logout.php"><i class ="fa fa-fw fa-sign-out"></i>'.$_SESSION['Email'].' Log out</a>';
					   }
					   else{
						echo '<a href="login.php"><i class ="fa fa-fw fa-user"></i>Log in</a>';
					   }
					   ?>
					</ul>
				</div>
					 
						</div>
					</div>