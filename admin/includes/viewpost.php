 <table class= "table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Author</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Categories</th>
                                        <th>Images</th>
                                        <th>Content</th>
                                        <th>tags</th>
                                        <th>Comment</th>
                                    </tr>
                                </thead>
                                <tbody>   
                                    <?php
                                     $query = "select * from post";
                                     $select_postid = mysqli_query($connection,$query);
                                        while ($row = mysqli_fetch_assoc($select_postid)){
                                        $post_id = $row['post_id'];
                                        $post_author = $row['post_author'];
                                        $post_categories = $row['post_categories'];
                                        $post_title = $row['post_judul'];
                                        $post_date = $row['post_date'];
                                        $post_image= $row['post_image'];
                                        $post_content = $row['post_content'];
                                        $post_tags = $row['post_tags'];
                                        $post_comment = $row['post_comment'];
                                            echo "<tr>";
                                            echo "<td>{$post_id}</td>";
                                            echo "<td>{$post_author}</td>";
											 $query = "select * from categories where cat_id= {$post_categories} ";
                                            $select_catid = mysqli_query($connection,$query);
                                            confirm($select_catid);
                                            while ($row = mysqli_fetch_assoc($select_catid)){
                                            $cat_id = $row['cat_id'];
                                            $cat_judul = $row['cat_judul'];
                                            echo "<td>{$cat_judul}</td>";
                                            } 
                                            echo "<td>{$post_title}</td>";
                                            echo "<td>{$post_date}</td>";
                                            
                                            
                                            echo "<td><img width= 100 class='img-responsive' src ='../images/$post_image'></td>";
                                            echo "<td>{$post_content}</td>";
                                            echo "<td>{$post_tags}</td>";
                                            echo "<td>{$post_comment}</td>";
                                            echo "<td><a href ='post.php?source=editpost&pid={$post_id}'>Edit</a></td>";
                                            echo "<td><a href ='post.php?delete={$post_id}'>Delete</a></td>";
                                            echo "</tr>"; 
                  }
                                    ?>                                    
                                </tbody>   
                            </table>
<?php

if(isset($_GET['delete'])){
    $del_post_id= $_GET['delete'];
    $query= "Delete From post where post_id= {$del_post_id}";
    $delete_query=  mysqli_query($connection, $query);
    header("Location: post.php");
}


?>