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
                            <small>Post</small>
                        </h1>
                        <div class="col-xs-12">
                           <?php
                              if(isset($_GET['source'])){
                              $source=$_GET['source'];
                              } else {
                                  $source='';
                              }
                              switch ($source) {
                                  case 'viewpost':
                                      include "includes/viewpost.php";
                                      break;
                                  case 'addpost':
                                      include "includes/addpost.php";
                                      break;
                                  case 'editpost':
                                      include "includes/editpost.php";
                                      break;
                                  default:
                                      include "includes/viewpost.php";
                                      break;
                              }
                              
                              
                              
                              ?>
                            
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
