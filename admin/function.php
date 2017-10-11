<?php

function insert_categories(){
    global $connection;
    if(isset($_POST['submit'])){
        $cat_judul = $_POST['cat_judul'];
        if($cat_judul == "" || empty($cat_judul)){ 
            echo "Tolong di Isi form Categorynya";
            }else {
            $query = "INSERT INTO categories(cat_judul)";
            $query .= "VALUE ('{$cat_judul}')";
            $create_cat_query = mysqli_query($connection, $query);
        if(!$create_cat_query){ 
            die('Query FAILED'. mysqli_error($connection));
            }
         }
    }
}


function selectcategories(){
    global $connection;
    $query = "select * from categories";
                $select_cat = mysqli_query($connection,$query);
                while ($row = mysqli_fetch_assoc($select_cat)){
                $cat_id = $row['cat_id'];
                $cat_judul = $row['cat_judul'];
                    echo "<tr>";
                    echo "<td>{$cat_id}</td>";
                    echo "<td> {$cat_judul}</td>";
                    echo "<td> <a href='categories.php?delete={$cat_id}'>Delete</a></td>";
                    echo "<td> <a href='categories.php?edit={$cat_id}'>Edit</a></td>";
                    echo "</tr>"; 
                  }
}


function deletecategories(){
    
    global $connection;
       if(isset($_GET['delete'])){
                         $del_cat_id = $_GET['delete'];
                         $query = " delete from categories where cat_id = {$del_cat_id}";
                         $delete_query = mysqli_query($connection,$query);
                         header("Location: categories.php");
                     }           
}
function confirm($result) {
    if(!$result){
        die("Query Failed.". mysqli_error($connection));
    }
    
}


?> 

