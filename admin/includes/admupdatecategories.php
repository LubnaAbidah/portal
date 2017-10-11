<!--   untuk menampilkan form Edit-->
                <form action="" method="post">
                            <div class="form-group">
                                <label> Tambah Categori </label>               
                                    <?php
                                    if(isset($_GET['edit'])){
                                    $cat_id = $_GET['edit'];  
                                    $query = "select * from categories where cat_id = $cat_id";
                                    $select_cat = mysqli_query($connection,$query);
                                    while ($row = mysqli_fetch_assoc($select_cat)){
                                    $cat_id = $row['cat_id'];
                                    $cat_judul = $row['cat_judul'];   
                                    ?>
                                   <input value="<?php if(isset($cat_judul))
										  {echo $cat_judul;}?>"class = "form-control" type="text" name="cat_judul">    
                                   <?php }} ?>
                                   
                                   <?php
                                    if(isset($_POST['update'])){
                                    $update_cat_judul = $_POST['cat_judul'];
                                    $query = "UPDATE categories SET cat_judul = '{$update_cat_judul}' WHERE cat_id ={$cat_id} ";
                                    $update_query = mysqli_query($connection,$query);
                                        if(!$update_query){
                                            die("QUERY GAGAL" . mysqli_error($connection));
                                        }
                                    }
								   ?>
                                </div>
                                <div class="form-group">
                                    <input class ="btn btn-primary" type="submit" name="update" value="UPDATE">
                                </div>
                            </form>