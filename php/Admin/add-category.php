<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
        body{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background: rgb(211, 211, 211);  
    }
    .container {
    display: inline-flex;
    background-color: #fff;
    width: 110vh;
    height: 30vh;
    justify-content: space-around;
    margin-left: 45vh;
    border-radius: 10px;
    border-radius: 10px;
    margin-top: 5vh;
}
    .col-md-12{
    background-color: #337ab7;
    width: 120%;
    height: 25%;
    border-radius: 40px;
    color: #fff;
}
    .admin-heading{
        text-align: center;
    }
    #box{
            width: 240px;
            height: 40px;
            border-radius: 10px;
            padding-left: 10px;
            opacity: 50%;

    }
    #box:hover{
        box-shadow: #303030 1px 1px 1px 1px;
        opacity: 100%;

    }

    #btn:hover{
        background:#ed6b4d ;
        
    }
    #btn{  
    color: #fff;  
    background: #1c53e7;  
    padding: 7px;  
    margin-left: 50%; 
    border-radius: 5px; 
}
    </style>
    


</head>
<body>
    
<a href="http://localhost/online news portal/php/Admin/index.php"><i class="fa-solid fa-arrow-left-long"></i>Back</a>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1><br><br>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                      <div class="form-group"><br>
                          <label>Category Name</label>
                          <input type="text" name="cat" id="box" class="form-control" placeholder="Category Name" required>
                      </div>
                      <br><br>
                      <input type="submit" name="save" id="btn" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
                  <?php
                    if( isset($_POST['save']) ){
                        // database configuration
                        include '../link.php';
                        $category =mysqli_real_escape_string($conn, $_POST['cat']);
                        /* query for check input value exists in category table or not*/
                        $sql = "SELECT category_name FROM category where category_name='{$category}'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result)> 0) {
                            // if input value exists
                            echo "<p style = 'color:red;text-align:center;margin: 10px 0';> Category already exists.</p>";
                        }else{
                            // if input value not exists
                            /* query for insert record in category name */
                            $sql = "INSERT INTO category (category_name)
                                    VALUES ('{$category}')";

                            if (mysqli_query($conn, $sql)){
                                header("location: http://localhost/online news portal/php/Admin/allcategory.php");
                            }else{
                            echo "<p style = 'color:red;text-align:center;margin: 10px 0';>Query Failed.</p>";
                            }
                        }
                    }
                   //mysqli_close($conn);
                ?>
              </div>
          </div>
      </div>
  </div>
  
  </body>
</html>