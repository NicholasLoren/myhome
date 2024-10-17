<?php 
 include '../dbconnect.php';
if(ISSET($_POST['save'])){
     $title = $_POST['title'];
    $courseunit = $_POST['courseunit'];


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
                    // mysqli_query($conn, "INSERT INTO tbllesson(lesson_title, course_unit, FileLocation, Category) VALUES('$title', '$courseunit', '$location', 'Video')") or die(mysqli_error());
                    mysqli_query($conn, "UPDATE tbl_apartment_rentals SET tour_video = '$location1' WHERE apartment_id ='6'") or die(mysqli_error());
                    echo "<script>alert('Video Uploaded')</script>";
                    echo "<script>window.location = 'video.php'</script>";
               
            }else{
                echo "<script>alert('Wrong video format')</script>";
                echo "<script>window.location = 'video.php'</script>";
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
            echo "<script>window.location = 'video.php'</script>";
        }
    }?>
    <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-12 well">
        <h3 class="text-primary">Upload lecture video</h3>
        <hr style="border-top:1px dotted #ccc;"/>
      <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Video Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="title">
                            </div>
                            
                            <div class="form-group">
                                <label>Video File</label>
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
        <br /><br />
     
    </div>
</body>
</html>