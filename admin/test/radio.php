<?php 
 include '../dbconnect.php';
if(ISSET($_POST['save'])){
     if (isset($_POST['heat'])) {
        //foreach ($_POST['heat'] as $gym) {
         //   $heating = $gym;
        //}
        echo "<p>You have selected :".$_POST['heat']."</p>";
        $heating = $_POST['heat'];
     }
                    mysqli_query($conn, "INSERT INTO tbl_home_features(`gym`) VALUES('$heating')") or die(mysqli_error());
                    echo "<script>alert('Successful')</script>";
     }?>
    <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-12 well">
        <h3 class="text-primary">Radio buttons</h3>
        <hr style="border-top:1px dotted #ccc;"/>
      <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Heating<span class="text-danger">*</span></label>
                                <input class="form-control" type="radio" name="heat" value="1">
                                <input class="form-control" type="radio" name="heat" value="2">
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