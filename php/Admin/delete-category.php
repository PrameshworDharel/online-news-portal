<?php
    include '../link.php';
   /* if($_SESSION["role"] == '0'){
      header("location: http://localhost/online news portal/php/Admin/post.php");
    }*/
    $cat_id = $_GET["id"];

    /*sql to delete a record*/
    $sql = "DELETE FROM category WHERE category_id ='{$cat_id}'";

    if (mysqli_query($conn, $sql)) {
        header("location: http://localhost/online news portal/php/Admin/allcategory.php");
    }

    mysqli_close($conn);

?>
