<?php
$user_id = $_GET['Id'];
$msg = '';
if (isset($_POST['submit'])) {
 //general details
   $username = $_POST['username']; 
   $fullnames = $_POST['fullnames']; 
   $phone = $_POST['phone'];  
   $email = $_POST['email']; 
   $old_password = $_POST['old_password']; 
   $password = $_POST['password'];
   $rePassword = $_POST['re-password'];
   $user_role = $_POST['user_role']; 
   $status = $_POST['status']; 
   
  if($password == ''){
      $pass = $old_password;
      }else{
        if($password!= $rePassword){
            $msg = "
     <div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                Passwords do not Match
      </div>";
          }else{
            $pass = sha1($password);
          }
        }  
   
  //insert  into database
  $user = dbQuery("UPDATE tbl_users SET  `username`= '$username', `fullnames`='$fullnames', `password`='$pass', `phone`='$phone', `email`='$email', `user_role`='$user_role', `user_status`='$status' WHERE id = '$user_id'");
      if($user){
         $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                User Successfully Updated
      </div>";
      goToPage("edit_user&Id=$user_id");
    }
  }
?>
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">EDIT USER DETAILS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
            <a href="<?php _link(); ?>users"  aria-hidden="false" title="Back to users" data-toggle="tooltip" data-placement="right" style="color: white;"><i class="fa fa-fast-backward"></i> &nbsp;Back </a>&nbsp;&nbsp; 
            </li>   
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <p><?php echo $msg; ?></p>
    <!-- Main content -->
    <section class="content">
     <!-- body items -->
      <?php $res =  dbQuery("SELECT * FROM tbl_users WHERE id='$user_id'");
               $count = dbNumRows($res);
               if($count > 0) {
                  while($row=dbFetchAssoc($res)){  ?>
     <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit details of <?php echo $row['fullnames']; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">

                  <div class="row">
                    <div class="form-group col-md-12">
                        <div class="modal-content">
                          <div class="modal-body row">
                            <div class="form-group col-md-6">
                              <label for="exampleInputtext1">Profile Pic</label><br>
                              <img src="<?php echo $row['photo']; ?>" class="img-circle elevation-2" alt="User Image"height= "165px" width= "165px">
                            </div>
                            <div class="form-group col-md-6">
                              <div class="form-group"><br><br><br>
                                <button class="btn btn-primary"><a href="index.php?page=update_userpic&Id=<?php echo $user_id; ?>" style="color: white;"><i class="fa fa-pencil"></i>Change Photo</a></button>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>

                <hr style="color: black;">
                  <div class="row">
                    <div class="modal-content">
                      <div class="modal-body row">
                      <input type="hidden" name="old_password" class="form-control" value="<?php echo $row['password']; ?>">

                     <div class="form-group col-md-6">
                      <label for="exampleInputtext1">User Name</label>
                      <input type="text" name="username" class="form-control"  placeholder="Enter Username" value="<?php echo $row['username']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Fullnames</label>
                      <input type="text" name="fullnames" class="form-control" placeholder="Enter full names" value="<?php echo $row['fullnames']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Phone</label>
                      <input type="text" name="phone" class="form-control"  placeholder="Enter phone number" value="<?php echo $row['phone']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Email</label>
                      <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $row['email']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label>User Role</label>
                      <select name="user_role" class="form-control select2" style="width: 100%;">
                           <option value="<?php echo $row['user_role']; ?>">
                          <?php
                           $role = $row['user_role'];
                           if ($role =='1') {echo "Admin";} 
                           if ($role =='2') {echo "Data Entrant";} 
                           if ($role =='3') {echo "Secretary";} 
                           ?>
                            
                          </option>                        
                          <option value="1">Admin</option>
                          <option value="2">Date Entrant</option>
                        <option value="3">Secretary</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Password</label>
                      <input type="password" name="password" class="form-control"  placeholder="Enter password">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Confirm Password</label>
                      <input type="password" name="re-password" class="form-control"  placeholder="Re-enter password">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Status</label>
                      <select name="status" class="form-control select2" style="width: 100%;">
                        <option value="<?php echo $row['user_status']; ?>">
                          <?php
                           $status = $row['user_status'];
                           if ($status =='1') {echo "Active";} 
                           if ($status =='0') {echo "Deactivated";} 
                           if ($status =='2') {echo "Sold Out";} 
                           ?>
                            
                          </option>
                        <option value="1">Active</option>
                        <option value="0">Deactivate</option>
                        <option value="2">Sold Out</option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
                  <?php } } ?>
                <!-- /.row -->
                 <div class="card-footer">
                  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
              </div>
                <!-- /.card-body -->
               </form>
            </div>
            <!-- /.card -->
          </div>
            <!-- /.card -->

            
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
     
    </section>
        <!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })
  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>