
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


    </style>

</head>
<body>
<?php
  //include "header.php";
  ?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div><br>
            <div class="col-md-2">
                <a class="link" href="add-category.php">Add category</a><br>
            </div><br><br>
            <div class="col-md-12">
              <?php
                include '../link.php';
              $sql = "SELECT * FROM  category ORDER BY category_id ";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                  $table = '<table class="content-table" border="1px" cellspacing="0" cellpadding="10px">';
                  $table .= '<thead>
                                  <th>S.No.</th>
                                  <th>Category Name</th>
                                  <th>No. of Posts</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </thead>
                              <tbody>';
                    // $serial = $offset + 1;
                  while($row = mysqli_fetch_assoc($result)) {
                    $table .= "<tr>
                            <td class='id'>{$row["category_id"]}</td>
                            <td>{$row["category_name"]}</td>
                            <td>{$row["post"]}</td>
                            <td class='edit'><a class=link href='update-category.php?id={$row['category_id']}' >Edit</a></td>
                            <td class='delete'><a class=link href='delete-category.php?id={$row['category_id']}'>Delete</i></a></td>
                        </tr>";
                        // $serial++;
                  }
                  $table .= '</tbody></table>';
                  // show table
                  echo $table;
              } else {
                  echo "<h3>No Results Found.</h3>";
              }
              /*
              // select count() query for pagination
              $sql1 = "SELECT COUNT(category_id) FROM category";
              $result_1 = mysqli_query($conn,$sql1);
              $row_db = mysqli_fetch_row($result_1);
              $total_record = $row_db[0];
              $total_page = ( $total_record / $limit);
              // show pagination?>
              <div class="pagination">
             <?php 
              echo  "<ul class='pagination admin-pagination'>";
                  if($page>1){
                      echo "<li><a href='category.php?page=".($page-1)."'>Prev</a></li>";
                  }
                  if($total_record > $limit){
                      for ($i=1; $i<=$total_page ; $i++) {
                          if($i == $page){
                              $cls ='btn-primary active';
                          }else{
                              $cls ='btn-primary';
                          }
                          echo"<li><a href='category.php?page=".$i."' class='{$cls}'>$i</a></li>";
                      }
                  }

                  if($total_page>$page){
                      echo"<li> <a href='category.php?page=".($page+1)."'>Next</a></li>";
                  }
              echo "</ul>";*/
              ?>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
