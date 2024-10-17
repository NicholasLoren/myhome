<?php include 'dbconnect.php';
$user_id = $_GET['Id'];

 //upload photo
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
                $location5 = 'images/offices/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location5)){
                    mysqli_query($conn, "UPDATE tbl_users SET photo = '$location5' WHERE id='$user_id'") or die(mysqli_error());
                    echo "<script>alert('User Image Successfully Updated')</script>";
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
        $chk_files =  dbQuery("SELECT * FROM tbl_users WHERE id='$user_id'");
        $countFiles = dbNumRows($chk_files);
        if($countFiles > 0) {
        while($rowFiles =dbFetchAssoc($chk_files)){ ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1 class="m-0">Update Photo of <?php echo $rowFiles['fullnames']; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-2">
             <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
            <a href="<?php _link(); ?>edit_user&Id=<?php echo $user_id; ?>"  aria-hidden="false" title="Back to Users" data-toggle="tooltip" data-placement="right" style="color: white;"><i class="fa fa-fast-backward"></i> &nbsp;Back </a>&nbsp;&nbsp; 
            </li>   
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
     <!-- body items -->
 
   
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body row">
                            <div class="form-group col-md-6">
                              <label for="exampleInputtext1">Profile Pic</label><br>
                              <img src="<?php echo $rowFiles['photo']; ?>" class="img-circle elevation-2" alt="User Image"height= "165px" width= "165px">
                            </div>
                            <?php } }?>

                            <div class="form-group col-md-6">
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

    </section>
        