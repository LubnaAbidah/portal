<?php include '../admin/includes/admheader.php';?>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include '../admin/includes/admnavigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Master
                            <small>Categories</small>
                        </h1>
						
                       <div class="col-xs-6">
                            
                          
                              <?php
                                
                              insert_categories();

                            ?>
                            
                            <form action="" method="post">
                                <div class="form-group">
                                   <label> Tambah Categori </label>
                                    <input class = "form-control" type="text" name="cat_judul">
                                </div>
                                <div class="form-group">
                                    <input class ="btn btn-primary" type="submit" name="submit" value="Tambah">
                                </div>
                            </form>

<!--   form Update-->
        <?php 
                            if(isset($_GET['edit'])){
                                $cat_id = $_GET['edit'];
                            include "includes/admupdatecategories.php";
                            }            
        ?>
                            
                        </div>
                          <div class="col-xs-6">
                            <table class= "table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Categories</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    
                <?php selectcategories(); ?>
                                    
                 <?php deletecategories();   ?>      
							</tbody>
                                
                            </table>
                            
                        </div>
						
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
