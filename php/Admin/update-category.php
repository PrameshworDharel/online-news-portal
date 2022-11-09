<?php
/*if($_SESSION["role"] == '0'){
  header("location: http://localhost/online news portal/php/Admin/post.php");
}*/
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
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background: rgb(211, 211, 211);  
    }
    .container {
      display: flex;
    background-color: #fff;
    width: 110vh;
    height: 40vh;
    justify-content: center;
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
<a href="http://localhost/online news portal/php/Admin/post.php"><i class="fa-solid fa-arrow-left-long"></i>Back</a>

  <div id="admin-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h1 class="admin-heading">Update Category</h1>
        </div><br><br>
        <div class="col-md-offset-3 col-md-6">
        <?php
        include '../link.php';
          $cat_id = $_GET['id'];
          /* query record for modify*/
          $sql = "SELECT * FROM category WHERE category_id ='{$cat_id}'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) { ?>
              <!-- Form Start -->
              <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                  <div class="form-group">
                      <input type="hidden" name="cat_id"  class="form-control" value="<?php echo $row['category_id']; ?>">
                  </div>
                  <div class="form-group">
                      <label>Category Name</label>
                      <input id="box" type="text" name="cat_name" class="form-control" value="<?php echo $row['category_name']; ?>"  placeholder="" required>
                  </div><br><br>
                  <input  id="btn" type="submit" name="submit" class="btn btn-primary" value="Update" />
              </form>
               <!-- Form End-->
              <?php
              }
          }
        ?>
        <?php
          if(isset($_POST['submit'])){
            $category =mysqli_real_escape_string($conn, $_POST['cat_name']);
            $cat_id =mysqli_real_escape_string($conn, $_POST['cat_id']);
            /* query for check input value exists in category table or not*/
            $sql = "SELECT category_name FROM category WHERE category_name='{$category}' AND NOT category_id='{$cat_id}'";
            $result1 = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result1)> 0) {
                // if input value exists
                echo "<p style = 'color:red;text-align:center;margin: 10px 0';> Category Name '".$category."' already exists.</p>";
            }else{
                // if input value not exists
              /* query for update category table */
              $sql1 = "UPDATE category SET category_id='{$_POST['cat_id']}', category_name='{$_POST['cat_name']}'  WHERE  category_id={$_POST['cat_id']}";

              if (mysqli_query($conn,$sql1)){
                // redirect all category page
                header("location: http://localhost/online news portal/php/Admin/category.php");
              }
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  </body>
</html>