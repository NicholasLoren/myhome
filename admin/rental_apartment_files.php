<?php include 'dbconnect.php';
$apartment_code = $_GET['Id'];
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
                    mysqli_query($conn, "UPDATE tbl_apartment_rentals SET tour_video = '$location1' WHERE apartment_id ='$apartment_code'") or die(mysqli_error());
                    echo "<script>alert('Video Uploaded')</script>";
               
            }else{
                echo "<script>alert('Wrong video format')</script>";
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
        }
    }

//upload ground floor photos
if(ISSET($_POST['save2'])){

        $file_name = $_FILES['ground_floor']['name'];
        $file_temp = $_FILES['ground_floor']['tmp_name'];
        $file_size = $_FILES['ground_floor']['size'];
        
        if($file_size < 50000000){
            $file = explode('.', $file_name);
            $end = end($file);
            $allowed_ext = array('jpeg', 'png', 'jpg');
            if(in_array($end, $allowed_ext)){
                $name = date("Ymd").time();
                $location2 = 'images/apartments/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location2)){
                    mysqli_query($conn, "UPDATE tbl_apartment_rentals SET ground_floor = '$location2' WHERE apartment_id ='$apartment_code'") or die(mysqli_error());
                    echo "<script>alert('Ground floor Image Uploaded')</script>";
                }
            }else{
                echo "<script>alert('Wrong Image format')</script>";
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
        }
    }
 //upload first floor photos
if(ISSET($_POST['save3'])){

        $file_name = $_FILES['first_floor']['name'];
        $file_temp = $_FILES['first_floor']['tmp_name'];
        $file_size = $_FILES['first_floor']['size'];
        
        if($file_size < 50000000){
            $file = explode('.', $file_name);
            $end = end($file);
            $allowed_ext = array('jpeg', 'png', 'jpg');
            if(in_array($end, $allowed_ext)){
                $name = date("Ymd").time();
                $location3 = 'images/apartments/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location3)){
                    mysqli_query($conn, "UPDATE tbl_apartment_rentals SET first_floor = '$location3' WHERE apartment_id ='$apartment_code'") or die(mysqli_error());
                    echo "<script>alert('First floor Image Uploaded')</script>";
                }
            }else{
                echo "<script>alert('Wrong Image format')</script>";
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
                $location4 = 'images/apartments/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location4)){
                    mysqli_query($conn, "UPDATE tbl_apartment_rentals SET front_view = '$location4' WHERE apartment_id ='$apartment_code'") or die(mysqli_error());
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

        $file_name = $_FILES['back_view']['name'];
        $file_temp = $_FILES['back_view']['tmp_name'];
        $file_size = $_FILES['back_view']['size'];
        
        if($file_size < 50000000){
            $file = explode('.', $file_name);
            $end = end($file);
            $allowed_ext = array('jpeg', 'png', 'jpg');
            if(in_array($end, $allowed_ext)){
                $name = date("Ymd").time();
                $location5 = 'images/apartments/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location5)){
                    mysqli_query($conn, "UPDATE tbl_apartment_rentals SET back_view = '$location5' WHERE apartment_id ='$apartment_code'") or die(mysqli_error());
                    echo "<script>alert('Back view Image Uploaded')</script>";
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

        $file_name = $_FILES['side_view']['name'];
        $file_temp = $_FILES['side_view']['tmp_name'];
        $file_size = $_FILES['side_view']['size'];
        
        if($file_size < 50000000){
            $file = explode('.', $file_name);
            $end = end($file);
            $allowed_ext = array('jpeg', 'png', 'jpg');
            if(in_array($end, $allowed_ext)){
                $name = date("Ymd").time();
                $location6 = 'images/apartments/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location6)){
                    mysqli_query($conn, "UPDATE tbl_apartment_rentals SET side_view = '$location6' WHERE apartment_id ='$apartment_code'") or die(mysqli_error());
                    echo "<script>alert('Side View Image Uploaded')</script>";
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

        $file_name = $_FILES['aerial_view']['name'];
        $file_temp = $_FILES['aerial_view']['tmp_name'];
        $file_size = $_FILES['aerial_view']['size'];
        
        if($file_size < 50000000){
            $file = explode('.', $file_name);
            $end = end($file);
            $allowed_ext = array('jpeg', 'png', 'jpg');
            if(in_array($end, $allowed_ext)){
                $name = date("Ymd").time();
                $location7 = 'images/apartments/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location7)){
                    mysqli_query($conn, "UPDATE tbl_apartment_rentals SET aerial_view = '$location7' WHERE apartment_id ='$apartment_code'") or die(mysqli_error());
                    echo "<script>alert('Aerial view Image Uploaded')</script>";
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
        $chk_files =  dbQuery("SELECT * FROM tbl_apartment_rentals WHERE apartment_id = '$apartment_code' ");
        $countFiles = dbNumRows($chk_files);
        if($countFiles > 0) {
        while($rowFiles =dbFetchAssoc($chk_files)){ 
            $ground_floor = $rowFiles['ground_floor'];  
            $first_floor = $rowFiles['first_floor'];  
            $front_view = $rowFiles['front_view']; 
            $back_view = $rowFiles['back_view'];  
            $side_view = $rowFiles['side_view']; 
            $aerial_view = $rowFiles['aerial_view'];  
            $tour_video = $rowFiles['tour_video']; 
            ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1 class="m-0">Upload Images and Video of <?php echo $rowFiles['apartment_name']; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-2">
             <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
            <a href="<?php _link(); ?>listApartment_rentals"  aria-hidden="false" title="Back to Rental Apartments" data-toggle="tooltip" data-placement="right" style="color: white;"><i class="fa fa-fast-backward"></i> &nbsp;Back </a>&nbsp;&nbsp; 
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
                      <h2>Upload tour video of the Apartment for rent</h2><hr>  
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
     <!-- Ground floor -->
      <?php if ($ground_floor =='') { ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Upload ground floor image of the Apartment for rent</h2><hr>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="ground_floor" class="form-control-file"/>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="save2" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
                    </div>
                </div>
            </form>
            <?php } ?>

            <br>
     <!-- First floor -->
      <?php if ($first_floor =='') { ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Upload First floor image of the Apartment for rent</h2><hr>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="first_floor" class="form-control-file"/>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="save3" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
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
                        <h2>Upload Front View image of the Apartment for rent</h2><hr>  
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
      <?php if ($back_view =='') { ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Upload Back View image of the Apartment for rent</h2><hr>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="back_view" class="form-control-file"/>
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
      <?php if ($side_view =='') { ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Upload Side View image of the Apartment for rent</h2><hr>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="side_view" class="form-control-file"/>
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
      <?php if ($aerial_view =='') { ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Upload Aerial View image of the Apartment for rent</h2><hr>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="aerial_view" class="form-control-file"/>
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
        