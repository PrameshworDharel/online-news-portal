<?php
//session_start();
		
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device=width, initial-scale=1.0">
		<title>news</title>
		<link rel="stylesheet" href="css\style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.container{  
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    border: solid rgb(63, 63, 63) 0px;  
    width:100%;  
    align-content: center;
    border-radius: 20px;  
    margin: 10px auto;  
    background: rgb(255, 255, 255);
	margin-left: 10px;
}
#main-content{
    padding: 30px 0;
    min-height: 750px;
}

#main-content .post-container{
    background-color: #fff;
    padding: 25px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
}

.post-img{
	border: 3px solid #e7e7e7;
  display: block;
  width: 145px;
  height: auto;
  overflow: hidden;
  transition: border .3s;
}
.post-img:hover{
	border: 3px solid #1e90ff;
}
.post-container{
	background-color: #fff;
    padding: 25px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
}
.post-content{
	border-bottom: 1px solid #d1d1d1;
    padding: 0 0 30px;
    margin-bottom:30px;
}
.post-content h3{
    font-size: 21px;
    line-height: 28px;
    font-weight: 600;
    margin: 0 0 7px;

}
.post-content h3 a{
    color: #1e90ff;
    transition:all 0.3s;
}
.post-content .post-information span{
    color: #606060;
    font-size: 12px;
    text-transform: capitalize;
    margin: 0 5px 5px 0;
    display: inline-block;
}
.post-information i{
    color: #1e90ff;
    margin-right: 1px;
}
.post-content p,
#main-content .single-post p{
    color: #666;
    font-size: 14px;
    letter-spacing: 0.5px;
    margin:0 0 10px;
}
	</style>


</style>
	</head>

	<body>
		<?php
		include "header.php";
?>
					<div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- post-container -->
                    <div class="post-container">
                      <?php
                        include "link.php";

                        /* Calculate Offset Code */
                        $limit = 3;
                        if(isset($_GET['page'])){
                          $page = $_GET['page'];
                        }else{
                          $page = 1;
                        }
                        $offset = ($page - 1) * $limit;

                        $sql = "SELECT post.post_id, post.title, post.description,post.post_date,post.author,
                        category.category_name,user.Name,post.category,post.post_img FROM post
                        LEFT JOIN category ON post.category = category.category_id
                        LEFT JOIN user ON post.author = user.Id
                        ORDER BY post.post_id DESC LIMIT {$offset},{$limit}";

                        $result = mysqli_query($conn, $sql) or die("Query Failed.");
                        if(mysqli_num_rows($result) > 0){
                          while($row = mysqli_fetch_assoc($result)) {
                      ?>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-md-4">
                                  <a class="post-img" href="single.php?id=<?php echo $row['post_id']; ?>"><img src="http://localhost/online news portal/php/Admin/upload/<?php echo $row['post_img']; ?>" alt="" width="100%" hight="100%"/></a>
                                </div>
                                <div class="col-md-8">
                                  <div class="inner-content clearfix">
                                      <h3><a href='single.php?id=<?php echo $row['post_id']; ?>'><?php echo $row['title']; ?></a></h3>
                                      <div class="post-information">
                                          <span>
                                              <i class="fa fa-tags" aria-hidden="true"></i>
                                              <a href='category.php?cid=<?php echo $row['category']; ?>'><?php echo $row['category_name']; ?></a>
                                          </span>
                                          <span>
                                              <i class="fa fa-user" aria-hidden="true"></i>
                                              <a href='author.php?aid=<?php echo $row['author']; ?>'><?php echo $row['Name']; ?></a>
                                          </span>
                                          <span>
                                              <i class="fa fa-calendar" aria-hidden="true"></i>
                                              <?php echo $row['post_date']; ?>
                                          </span>
                                      </div>
                                      <p class="description">
                                          <?php echo substr($row['description'],0,130) . "..."; ?>
                                      </p>
                                      <a class='read-more pull-right' href='single.php?id=<?php echo $row['post_id']; ?>'>read more</a>
                                  </div>
                                </div>
                            </div>
                        
                        <?php
                          }
                        }else{
                          echo "<h2>No Record Found.</h2>";
                        }

                        // show pagination
                        $sql1 = "SELECT * FROM post";
                        $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                        if(mysqli_num_rows($result1) > 0){

                          $total_records = mysqli_num_rows($result1);

                          $total_page = ceil($total_records / $limit);

                          echo '<ul class="pagination admin-pagination">';
                          if($page > 1){
                            echo '<li><a href="index.php?page='.($page - 1).'">Prev</a></li>';
                          }
                          for($i = 1; $i <= $total_page; $i++){
                            if($i == $page){
                              $active = "active";
                            }else{
                              $active = "";
                            }
                            echo '<li class="'.$active.'"><a href="index.php?page='.$i.'">'.$i.'</a></li>';
                          }
                          if($total_page > $page){
                            echo '<li><a href="index.php?page='.($page + 1).'">Next</a></li>';
                          }

                          echo '</ul>';
                        }
                        ?>
                    </div><!-- /post-container -->
            </div>
        </div>
    </div>
    <div class="sidebar">
                <?php include 'sidebar.php'; ?>
                      </div>
		    </body>
		</html>
			