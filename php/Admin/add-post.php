
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     
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

</head>
<body>
<a href="http://localhost/online news portal/php/Admin/post.php"><i class="fa-solid fa-arrow-left-long"></i>Back</a>
 <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Post</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="save-post.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="post_title">Title</label><br>
                          <input class="box" type="text" name="post_title" class="form-control" autocomplete="off" required>
                      </div><br><br>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label><br>
                          <textarea class="bigbox"name="postdesc" class="form-control" rows="5"  required></textarea>
                      </div><br><br>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Category</label>
                          <select name="category" class="form-control">
                              <option disabled selected> Select Category</option>
                              <?php
                                include "../link.php";
                                $sql = "SELECT * FROM category";

                                $result = mysqli_query($conn, $sql) or die("Query Failed.");

                                if(mysqli_num_rows($result) > 0){
                                  while($row = mysqli_fetch_assoc($result)){
                                    echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                                  }
                                }
                              ?>
                          </select>
                      </div><br><br>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Post image</label>
                          <input type="file" name="fileToUpload" required>
                      </div><br><br>
                      <input type="submit" name="submit" id="btn" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>

