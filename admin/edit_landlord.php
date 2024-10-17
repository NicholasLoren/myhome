<?php
$Id = $_GET['Id'];
$msg = '';
if (isset($_POST['submit'])) {
  //general details
   $fullnames = $_POST['fullnames']; 
   $phone = $_POST['phone'];  
   $location = $_POST['location'];  
   $desc = $_POST['desc']; 
   $status = $_POST['status']; 
  
  //update database
  $landlord = dbQuery("UPDATE `tbl_landlords` SET `fullnames`='$fullnames', `phone`='$phone', `location`='$location', `description`='$desc', `status`='$status' WHERE id = '$Id'"); 

      if($landlord){
         $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                Landlord details successfully Updated
      </div>";
      goToPage("edit_landlord&Id=$Id");
    }
  } 
?>
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">EDIT LANDLORD'S DETAILS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
            <a href="<?php _link(); ?>listLandlords"  aria-hidden="false" title="Back to landlords" data-toggle="tooltip" data-placement="right" style="color: white;"><i class="fa fa-fast-backward"></i> &nbsp;Back to Landlords </a>&nbsp;&nbsp; 
            </li>   
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <p><?php echo $msg; ?></p>
    <!-- Main content -->
     <?php $res =  dbQuery("SELECT * FROM tbl_landlords WHERE id='$Id'");
               $count = dbNumRows($res);
               if($count > 0) {
                  while($row=dbFetchAssoc($res)){  ?>
    <section class="content">
     <!-- body items -->
     <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit details of : <?php echo $row['fullnames']; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Fullnames</label>
                      <input type="text" name="fullnames" class="form-control" placeholder="Enter full names"  value="<?php echo $row['fullnames']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Phone</label>
                      <input type="text" name="phone" class="form-control"  placeholder="Enter phone number" value="<?php echo $row['phone']; ?>">
                    </div> 
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Location</label>
                      <input type="text" name="location" class="form-control"  placeholder="Enter physical location" value="<?php echo $row['location']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Status</label>
                      <select name="status" class="form-control select2" style="width: 100%;">
                        <option value="<?php echo $row['status']; ?>">
                          <?php
                           $status = $row['status'];
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
                    <div class="form-group col-md-12">
                      <label for="exampleInputtext1">Description</label>
                      <textarea name="desc" class="form-control"><?php echo $row['description']; ?></textarea> 
                    </div>
                <!-- /.row -->
                                <?php } } ?>
                 <div class="card-footer">
                  <input type="submit" name="submit" value="Update" class="btn btn-primary">
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