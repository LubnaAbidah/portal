<div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
						<?php 
							$query ="select * from categories";
							$pilih_categories =mysqli_query($connection,$query);
							while($row = mysqli_fetch_assoc($pilih_categories)){
			
								$cat_judul=$row['cat_judul'];
							?>
                            <ul class="list-unstyled">
							
                                <li><a href="#"><?php echo $cat_judul?></a>
                                </li>
							<?php } ?>
                                
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>