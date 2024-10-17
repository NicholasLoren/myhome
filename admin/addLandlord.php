<?php
$msg = '';
if (isset($_POST['submit'])) {
  //general details
   $fullnames = $_POST['fullnames']; 
   $phone = $_POST['phone'];  
   $location = $_POST['location'];  
   $desc = $_POST['desc']; 
  
                    
  //creating death code
  $result = @ dbQuery("SHOW TABLE STATUS LIKE  'tbl_landlords'");
  $data = @dbFetchAssoc($result);
  $next = $data['Auto_increment'];
  $prefix = "MYHOME/LL/";
  $landlord_id = sprintf("%s%03s",$prefix,$next);
                    
  $existTime = dbNumRows(dbQuery("SELECT * FROM `tbl_landlords` WHERE `fullnames`='$fullnames'"));
  if($existTime>0){
    echo "<script>alert('landlord Already registered')</script>";
    //warningMsg(" land for sale Already registered");
    }else{
  //insert  into database
  $user = dbQuery("INSERT INTO `tbl_landlords`(`landlord_id`, `fullnames`, `phone`, `location`, `description`, `status`) VALUES ('$landlord_id', '$fullnames', '$phone', '$location', '$desc', '1')"); 

      if($user){
         $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                New landlord Successfully Registered
      </div>";
      goToPage("listLandlords");
    }
  } 
}
?>
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> REGISTER NEW LANDLORD</h1>
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
    <section class="content">
     <!-- body items -->
     <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">General Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Fullnames</label>
                      <input type="text" name="fullnames" class="form-control" placeholder="Enter full names">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Phone</label>
                      <input type="text" name="phone" class="form-control"  placeholder="Enter phone number">
                    </div> 
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Location</label>
                      <input type="text" name="location" class="form-control"  placeholder="Enter physical location">
                    </div> 
                    <div class="form-group col-md-12">
                      <label for="exampleInputtext1">Description</label>
                      <textarea name="desc" class="form-control" placeholder="Enter more details like proerty type owned e.g homes, apartments, shop room"></textarea> 
                    </div>
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