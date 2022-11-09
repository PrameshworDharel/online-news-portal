<?php
  include "../link.php";
  if(isset($_FILES['fileToUpload'])){
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
   
      move_uploaded_file($file_tmp,'upload/'.$file_name);
    }
  $title = mysqli_real_escape_string($conn, $_POST['post_title']);
  $description = mysqli_real_escape_string($conn, $_POST['postdesc']);
  $category = mysqli_real_escape_string($conn, $_POST['category']);
  $date = date("d M, Y");
  /*$author = $_SESSION['Name'];*/
  $sql = "INSERT INTO post(title,description,category,post_date,author,post_img)
  VALUES('{$title}','{$description}',{$category},'{$date}','{$_SESSION['Name']}','{$file_name}');";
$sql .= "UPDATE category SET post = post + 1 WHERE category_id = {$category}";

  if(mysqli_multi_query($conn, $sql)){
    header("location: http://localhost/online news portal/php/Admin/allpost.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
