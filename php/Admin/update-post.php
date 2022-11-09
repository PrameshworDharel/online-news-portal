<?php 
/*if($_SESSION["role"] == 0){
  include "../link.php";
  $post_id = $_GET['id'];
  $sql2 = "SELECT author FROM post WHERE post_id = {$post_id}";
  $result2 = mysqli_query($conn, $sql2) or die("Query Failed.");

  $row2 = mysqli_fetch_assoc($result2);

  if($row2['author'] != $_SESSION["Id"]){
    header("location: http://localhost/online news portal/php/Admin/post.php");
  }

}*/
?>
<style>
        body{   
    background: rgb(211, 211, 211);  
  
   
}  
.container{  
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    border: solid rgb(63, 63, 63) 0px;  
    width:25%;  
    align-content: center;
    border-radius: 20px;  
    margin: 120px auto;  
    background: rgb(255, 255, 255);  
   
    padding: 50px;  }
    .box{
        width: 240px;
        height: 40px;
        border-radius: 10px;
        padding-left: 10px;
        opacity: 50%;

}
.box:hover{
    box-shadow: #303030 1px 1px 1px 1px;
    opacity: 100%;

}
.bigbox{
        width: 240px;
        height: 40px;
        border-radius: 10px;
        padding-left: 10px;
        padding-top: 10px;
        opacity: 50%;
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

  </style>
<a href="http://localhost/online news portal/php/Admin/post.php"><i class="fa-solid fa-arrow-left-long"></i>Back</a>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Post</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">
      <?php
        include "../link.php";
        $post_id = $_GET['id'];
        $sql = "SELECT post.post_id, post.title, post.description,post.post_img,
        category.category_name, post.category FROM post
        LEFT JOIN category ON post.category = category.category_id
        LEFT JOIN user ON post.author = user.Id
        WHERE post.post_id = {$post_id}";

        $result = mysqli_query($conn, $sql) or die("Query Failed.");
        if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)) {
      ?>
        <!-- Form for show edit-->
        <form action="save-update-post.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="post_id"  class="form-control" value="<?php echo $row['post_id']; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label><br>
                <input class="box" type="text" name="post_title"  class="form-control" id="exampleInputUsername" value="<?php echo $row['title']; ?>">
            </div><br><br>
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label><br>
                <textarea class="bigbox" name="postdesc" class="form-control"  required rows="5">
                    <?php echo $row['description']; ?>
                </textarea>
            </div><br><br>
            <div class="form-group">
                <label for="exampleInputCategory">Category</label>
                <select class="form-control" name="category">
                  <option disabled> Select Category</option>
                  <?php
                    include "../link.php";
                    $sql1 = "SELECT * FROM category";

                    $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                    if(mysqli_num_rows($result1) > 0){
                      while($row1 = mysqli_fetch_assoc($result1)){
                        if($row['category'] == $row1['category_id']){
                          $selected = "selected";
                        }else{
                          $selected = "";
                        }
                        echo "<option {$selected} value='{$row1['category_id']}'>{$row1['category_name']}</option>";
                      }
                    }
                  ?>
                </select>
                <input type="hidden" name="old_category" value="<?php echo $row['category']; ?>">
            </div><br><br>
            <div class="form-group">
                <label for="">Post image</label>
                <input type="file" name="new-image">
                <img  src="upload/<?php echo $row['post_img']; ?>" height="150px">
                <input type="hidden" name="old_image" value="<?php echo $row['post_img']; ?>">
            </div><br><br>
            <input type="submit" name="submit" id="btn" value="Update" />
        </form>
        <!-- Form End -->
        <?php
          }
        }else{
          echo "Result Not Found.";
        }
        ?>
      </div>
    </div>
  </div>
</div>

