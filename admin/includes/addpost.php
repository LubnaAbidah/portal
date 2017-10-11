
<?php 
if(isset($_POST['post'])){
        $post_author = $_POST['post_author'];    
        $post_judul = $_POST['post_judul'];
        $post_categories = $_POST['post_categories'];
        $post_image = $_FILES['post_image']['name'];
        $post_image_temp = $_FILES['post_image']['tmp_name'];
        $post_content = $_POST['post_content'];
        $post_tags = $_POST['post_tags'];
        $post_comment = $_POST['post_comment'];
        $post_date=date('d-m-y');
        move_uploaded_file($post_image_temp,"../images/$post_image");
        if($post_judul == "" || empty($post_judul)){ 
            echo "Tolong di Isi semua form";
        }else {
       $query= "INSERT INTO post (post_categories, post_judul, post_author, post_date, post_image, post_content, post_tags,post_comment)"; 
       $query.="VALUES ('{$post_categories}','{$post_judul}', '{$post_author}',now(), '{$post_image}', '{$post_content}', '{$post_tags}', '{$post_comment}')";
       $create_post_query = mysqli_query($connection,$query);
       confirm($create_post_query);
  } 
         }
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
       <label> Post Author </label>
        <input class = "form-control" type="text" name="post_author">
    </div>
    <div class="form-group">
       <label> Post Title </label>
        <input class = "form-control" type="text" name="post_judul">
    </div>
   
    <div class="form-group">
       <label> Post Categories </label>
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
        <label for="post_image"> Post Images </label>
        <input type="file" name="post_image">
    </div>
    <div class="form-group">
       <label> Post Content </label>
        <input class = "form-control" type="text" name="post_content">
    </div>
    <div class="form-group">
       <label> Post Tags </label>
        <input class = "form-control" type="text" name="post_tags">
    </div>
    <div class="form-group">
       <label> Post Comment </label>
       <textarea class = "form-control" type="text" name="post_comment"></textarea>
    </div>
    <div class="form-group">
        <input class ="btn btn-primary" type="submit" name="post" value="Tambah">
    </div>
 </form>