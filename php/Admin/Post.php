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
				font-family: Verdana, Geneva, Tahoma, sans-serif;
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
.admin-heading{
  text-align: Center;
}

    </style>
</head>
<body>
  

<?php
 // include "header.php";
  ?>

  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div class="col-md-2">
                  <a class="link" href="add-post.php">add post</a>
              </div><br><br>
              <div class="col-md-12">
                <?php
                  //include "../link.php";
                  /* // database configuration Calculate Offset Code 
                  $limit = 3;
                  if(isset($_GET['page'])){
                    $page = $_GET['page'];
                  }else{
                    $page = 1;
                  }
                  $offset = ($page - 1) * $limit;
*/
                  
                    /* select query of post table for admin user */
                   
                    $sql = "SELECT post.post_id, post.title, post.description,post.post_date,
                    category.category_name,user.Name,post.category FROM post
                    LEFT JOIN category ON post.category = category.category_id
                    LEFT JOIN user ON post.author = user.Id
                    ORDER BY post.post_id";
                
                    
                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                ?>
                  <table class="content-table" border="1px" cellspacing="0" cellpadding="10px">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        <?php
                       // $serial = $offset + 1;
                        while($row = mysqli_fetch_assoc($result)) {?>
                          <tr>
                              <td class='id'><?php echo $row['post_id']; ?></td>
                              <td><?php echo $row['title']; ?></td>
                              <td><?php echo $row['category_name']; ?></td>
                              <td><?php echo $row['post_date']; ?></td>
                              <td><?php echo 'Prameshwor and Safal '?></td>
                              <td class='edit'><a class="link" href='update-post.php?id=<?php echo $row['post_id']; ?>'>Update</a></td>
                              <td class='delete'><a class="link" href='delete-post.php?id=<?php echo $row['post_id']; ?>&catid=<?php echo $row['category']; ?>'>Delete</i></a></td>
                          </tr>
                          <?php
                          //$serial++;
                        } ?>
                      </tbody>
                  </table>
                  <?php
                }else {
                  echo "<h3>No Results Found.</h3>";
                }
                // show pagination
              
                  /* select query of post table for admin user
                  $sql1 = "SELECT * FROM post";
               
                $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                if(mysqli_num_rows($result1) > 0){

                  $total_records = mysqli_num_rows($result1);

                  $total_page = ceil($total_records / $limit);

                  echo '<ul class="pagination admin-pagination">';
                  if($page > 1){
                    echo '<li><a href="post.php?page='.($page - 1).'">Prev</a></li>';
                  }
                  for($i = 1; $i <= $total_page; $i++){
                    if($i == $page){
                      $active = "active";
                    }else{
                      $active = "";
                    }
                    echo '<li class="'.$active.'"><a href="post.php?page='.$i.'">'.$i.'</a></li>';
                  }
                  if($total_page > $page){
                    echo '<li><a href="post.php?page='.($page + 1).'">Next</a></li>';
                  }

                  echo '</ul>';
                } */
                  ?>
              </div>
          </div>
      </div>
  </div>

  <?php

  ?>
  </body>
</html>