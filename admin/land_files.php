<?php include 'dbconnect.php';
$land_code = $_GET['Id'];

 //upload photos1
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
                $location5 = 'images/land/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location5)){
                    mysqli_query($conn, "UPDATE tbl_land_for_sale SET photo1 = '$location5' WHERE land_id ='$land_code'") or die(mysqli_error());
                    echo "<script>alert('First view Image Uploaded')</script>";
                }
            }else{
                echo "<script>alert('Wrong Image format')</script>";
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
        }
    }
 //upload photos2
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
                $location6 = 'images/land/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location6)){
                    mysqli_query($conn, "UPDATE tbl_land_for_sale SET photo2 = '$location6' WHERE land_id ='$land_code'") or die(mysqli_error());
                    echo "<script>alert('Second View Image Uploaded')</script>";
                }
            }else{
                echo "<script>alert('Wrong Image format')</script>";
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
        }
    }
 //upload photos3
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
                $location7 = 'images/land/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location7)){
                    mysqli_query($conn, "UPDATE tbl_land_for_sale SET photo3 = '$location7' WHERE land_id ='$land_code'") or die(mysqli_error());
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
        $chk_files =  dbQuery("SELECT * FROM tbl_land_for_sale WHERE land_id = '$land_code' ");
        $countFiles = dbNumRows($chk_files);
        if($countFiles > 0) {
        while($rowFiles =dbFetchAssoc($chk_files)){ 
            $photo1 = $rowFiles['photo1'];  
            $photo2 = $rowFiles['photo2']; 
            $photo3 = $rowFiles['photo3'];  
            ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1 class="m-0">Upload Images and Video of <?php echo $rowFiles['plot_name']; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-2">
             <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
            <a href="<?php _link(); ?>land_for_sale"  aria-hidden="false" title="Back to lands" data-toggle="tooltip" data-placement="right" style="color: white;"><i class="fa fa-fast-backward"></i> &nbsp;Back </a>&nbsp;&nbsp; 
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
     
     <!-- photo 1 -->
      <?php if ($photo1 =='') { ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Upload First View image of the land</h2><hr>  
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
     <!-- photo2 -->
      <?php if ($photo2 =='') { ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Upload Second View image of the land</h2><hr>  
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
     <!-- photo3 -->
      <?php if ($photo3 =='') { ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Upload Third View image of the land</h2><hr>  
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
        