<?php include 'dbconnect.php';
$shop_code = $_GET['Id'];
//upload video
if(ISSET($_POST['save'])){

        $file_name = $_FILES['video']['name'];
        $file_temp = $_FILES['video']['tmp_name'];
        $file_size = $_FILES['video']['size'];
        
        if($file_size < 50000000){
            $file = explode('.', $file_name);
            $end = end($file);
            $allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
            if(in_array($end, $allowed_ext)){
                $name = date("Ymd").time();
                $location1 = 'video/'.$name.".".$end;
                move_uploaded_file($file_temp, $location1);
                    mysqli_query($conn, "UPDATE tbl_shop_rentals SET tour_video = '$location1' WHERE shop_id ='$shop_code'") or die(mysqli_error());
                    echo "<script>alert('Video Uploaded')</script>";
               
            }else{
                echo "<script>alert('Wrong video format')</script>";
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
        }
    }

 //upload front view photos
if(ISSET($_POST['save4'])){

        $file_name = $_FILES['front_view']['name'];
        $file_temp = $_FILES['front_view']['tmp_name'];
        $file_size = $_FILES['front_view']['size'];
        
        if($file_size < 50000000){
            $file = explode('.', $file_name);
            $end = end($file);
            $allowed_ext = array('jpeg', 'png', 'jpg');
            if(in_array($end, $allowed_ext)){
                $name = date("Ymd").time();
                $location4 = 'images/shops/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location4)){
                    mysqli_query($conn, "UPDATE tbl_shop_rentals SET front_view = '$location4' WHERE shop_id ='$shop_code'") or die(mysqli_error());
                    echo "<script>alert('Front view Image Uploaded')</script>";
                }
            }else{
                echo "<script>alert('Wrong Image format')</script>";
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
        }
    }
 //upload back view photos
if(ISSET($_POST['save5'])){

        $file_name = $_FILES['photo1']['name'];
        $file_temp = $_FILES['photo1']['tmp_name'];
        $file_size = $_FILES['photo1']['size'];
        
        if($file_size < 50000000){
            $file = explode('.', $file_name);
            $end = end($file);
            $allowed_ext = array('jpeg', 'png', 'jpg');
            if(in_array($end, $allowed_ext)){
                $name = date("Ymd").time();
                $location5 = 'images/shops/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location5)){
                    mysqli_query($conn, "UPDATE tbl_shop_rentals SET photo1 = '$location5' WHERE shop_id ='$shop_code'") or die(mysqli_error());
                    echo "<script>alert('First view Image Uploaded')</script>";
                }
            }else{
                echo "<script>alert('Wrong Image format')</script>";
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
        }
    }
 //upload side view photos
if(ISSET($_POST['save6'])){

        $file_name = $_FILES['photo2']['name'];
        $file_temp = $_FILES['photo2']['tmp_name'];
        $file_size = $_FILES['photo2']['size'];
        
        if($file_size < 50000000){
            $file = explode('.', $file_name);
            $end = end($file);
            $allowed_ext = array('jpeg', 'png', 'jpg');
            if(in_array($end, $allowed_ext)){
                $name = date("Ymd").time();
                $location6 = 'images/shops/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location6)){
                    mysqli_query($conn, "UPDATE tbl_shop_rentals SET photo2 = '$location6' WHERE shop_id ='$shop_code'") or die(mysqli_error());
                    echo "<script>alert('Second View Image Uploaded')</script>";
                }
            }else{
                echo "<script>alert('Wrong Image format')</script>";
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
        }
    }
 //upload aerial view photos
if(ISSET($_POST['save7'])){

        $file_name = $_FILES['photo3']['name'];
        $file_temp = $_FILES['photo3']['tmp_name'];
        $file_size = $_FILES['photo3']['size'];
        
        if($file_size < 50000000){
            $file = explode('.', $file_name);
            $end = end($file);
            $allowed_ext = array('jpeg', 'png', 'jpg');
            if(in_array($end, $allowed_ext)){
                $name = date("Ymd").time();
                $location7 = 'images/shops/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location7)){
                    mysqli_query($conn, "UPDATE tbl_shop_rentals SET photo3 = '$location7' WHERE shop_id ='$shop_code'") or die(mysqli_error());
                    echo "<script>alert('Third view Image Uploaded')</script>";
                }
            }else{
                echo "<script>alert('Wrong Image format')</script>";
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
        }
    }
    ?>
    <!-- Content Wrapper. Contains page content -->
     <?php
        $chk_files =  dbQuery("SELECT * FROM tbl_shop_rentals WHERE shop_id = '$shop_code' ");
        $countFiles = dbNumRows($chk_files);
        if($countFiles > 0) {
        while($rowFiles =dbFetchAssoc($chk_files)){ 
            $front_view = $rowFiles['front_view']; 
            $photo1 = $rowFiles['photo1'];  
            $photo2 = $rowFiles['photo2']; 
            $photo3 = $rowFiles['photo3'];  
            $tour_video = $rowFiles['tour_video']; 
            ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1 class="m-0">Upload Images and Video of <?php echo $rowFiles['shop_name']; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-2">
             <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
            <a href="<?php _link(); ?>listShop_rentals"  aria-hidden="false" title="Back to Rental Shops" data-toggle="tooltip" data-placement="right" style="color: white;"><i class="fa fa-fast-backward"></i> &nbsp;Back </a>&nbsp;&nbsp; 
            </li>   
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<?php } }?>
    <!-- Main content -->
    <section class="content">
     <!-- body items -->
     <!-- Tour video -->
      <?php if ($tour_video =='') { ?>
     <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                      <h2>Upload tour video of the Shop for rent</h2><hr>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Upload File</label>
                                <input type="file" name="video" class="form-control-file"/>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
                    </div>
                </div>
            </form>
          <?php } ?>

            <br>
    
     <!-- Front View -->
        <?php if ($front_view =='') { ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Upload Front View image of the Shop for rent</h2><hr>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="front_view" class="form-control-file"/>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="save4" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
                    </div>
                </div>
            </form>
          <?php } ?>

            <br>
     <!-- Back View -->
      <?php if ($photo1 =='') { ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Upload First View image of the Shop for rent</h2><hr>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="photo1" class="form-control-file"/>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="save5" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
                    </div>
                </div>
            </form>
            <?php } ?>

            <br>
     <!-- Side View -->
      <?php if ($photo2 =='') { ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Upload Second View image of the Shop for rent</h2><hr>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="photo2" class="form-control-file"/>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="save6" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
                    </div>
                </div>
            </form>
            <?php } ?>

            <br>
     <!-- Aerial View -->
      <?php if ($photo3 =='') { ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Upload Third View image of the Shop for rent</h2><hr>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="photo3" class="form-control-file"/>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="save7" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
                    </div>
                </div>
            </form>
        <?php } ?>
    </section>
        