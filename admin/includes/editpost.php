<?php
if(isset($_GET['pid'])){
$post_edit = $_GET['pid']; 

}
  $query = "select * from post where post_id = $post_edit";
    $select_post = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select_post)){
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_categories = $row['post_categories'];
    $post_judul = $row['post_judul'];
    $post_date = $row['post_date'];
    $post_image= $row['post_image'];
    $post_content = $row['post_content'];
    $post_tags = $row['post_tags'];
    $post_comment= $row['post_comment'];
    } 

    
    if(isset($_POST['post_update'])){
        $post_author = $_POST['post_author'];    
        $post_judul = $_POST['post_judul'];
        $post_categories = $_POST['post_categories'];
        $post_image = $_FILES['post_image']['name'];
        $post_image_temp = $_FILES['post_image']['tmp_name'];
        $post_content = $_POST['post_content'];
        $post_tags = $_POST['post_tags'];
        $post_comment = $_POST['post_comment'];
        move_uploaded_file($post_image_temp,"../images/$post_image");
        if (empty($post_image)){
            $query = "SELECT * FROM post where post_id= {$post_edit}";
            $select_image = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_image)){
            $post_image = $row['post_image'];
            }
        }

        $query = "UPDATE post SET ";
        $query .="post_categories = '{$post_categories}', ";
        $query .="post_judul = '{$post_judul}', ";
        $query .="post_author = '{$post_author}', ";
        $query .="post_date = now(), ";
        $query .="post_image= '{$post_image}', ";
        $query .="post_content= '{$post_content}', ";
        $query .="post_tags= '{$post_tags}', ";
        $query .="post_comment = '{$post_comment}', ";
        $query .="WHERE post_id = {$post_edit}";
        
       $update_post = mysqli_query($connection,$query);
      
          }

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
       <label> Post Author </label>
       <input value =" <?php echo $post_author;?> "class = "form-control" type="text" name="post_author">
    </div>
    <div class="form-group">
       <label> Post Title </label>
       <input  value =" <?php echo $post_judul;?>"class = "form-control" type="text" name="post_judul">
    </div>
    <div class="form-group">
       <label> Post Categories </label><br>
       <select name="post_categories" id="">
       <?php
        $query = "select * from categories ";
        $select_catid = mysqli_query($connection,$query);
        confirm($select_catid);
        while ($row = mysqli_fetch_assoc($select_catid)){
        $cat_id = $row['cat_id'];
        $cat_judul = $row['cat_judul'];
        echo  "<option value='$cat_id'>{$cat_judul}</option>";
        }
       ?>    
       </select>
       
    </div>
    <div class="form-group">
        <label for="post_image">Post Images </label> <br>
        <img width =" 100" src="../images/<?php echo $post_image;?>"><br>
        <input type="file" name="post_image">
    </div>
    <div class="form-group">
       <label> Post Content </label>
        <input value =" <?php echo $post_content;?>"class = "form-control" type="text" name="post_content">
    </div>
    <div class="form-group">
       <label> Post Tags </label>
        <input value ="<?php echo $post_tags;?>"class = "form-control" type="text" name="post_tags">
    </div>
    <div class="form-group">
       <label> Post Comment </label>
       <textarea class = "form-control" type="text" name="post_comment"><?php echo $post_comment;?></textarea>
    </div>
    <div class="form-group">
        <input class ="btn btn-primary" type="submit" name="post_update" value="Update">
    </div>
 </form>