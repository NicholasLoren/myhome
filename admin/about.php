<?php
$msg = '';
if (isset($_POST['submit'])) {
  //general details
   $id = $_POST['id']; 
   $welcome_msg = $_POST['welcome_msg']; 
   $about_info = $_POST['about_info']; 
   $our_work = $_POST['our_work'];  
   $city1 = $_POST['city1']; 
   $office1 = $_POST['office1']; 
   $location1 = $_POST['location1'];  
   $phone1 = $_POST['phone1'];  
  $city2 = $_POST['city2']; 
   $office2 = $_POST['office2']; 
   $location2 = $_POST['location2'];  
   $phone2 = $_POST['phone2'];  
  $city3 = $_POST['city3']; 
   $office3 = $_POST['office3']; 
   $location3 = $_POST['location3'];  
   $phone3 = $_POST['phone3'];  
  
  //update database
  $about_us = dbQuery("UPDATE `tbl_about_us` SET `welcome_msg`='$welcome_msg',`about_info`='$about_info',`our_work`='$our_work',`city_one`='$city1',`office_one`='$office1',`location_one`='$location1',`phone1`='$phone1',`city_two`='$city2',`office_two`='$office2',`location_two`='$location2',`phone2`='$phone2',`city_three`='$city3',`office_three`='$office3',`location_three`='$location3',`phone3`='$phone3' WHERE id='$id'"); 

      if($about_us){
         $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                About us details Successfully Updated
      </div>";
      goToPage("about");
    }
  } 

?>
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> EDIT ABOUT US DETAILS</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <p><?php echo $msg; ?></p>
    <!-- Main content -->
    <?php $res =  dbQuery("SELECT * FROM tbl_about_us LIMIT 1");
               $count = dbNumRows($res);
               if($count > 0) {
                  while($row=dbFetchAssoc($res)){ $id = $row['id'];  ?>
    <section class="content">
     <!-- body items -->
     <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit details of About Us Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label>Welcome Message</label>
                      <textarea class="form-control" name="welcome_msg" rows="4" placeholder=""><?php echo $row['welcome_msg']; ?></textarea>     
                    </div>
                    <div class="form-group col-md-12">
                      <label>About us details</label>
                      <textarea class="form-control" name="about_info" rows="4" placeholder=""><?php echo $row['about_info']; ?></textarea>     
                    </div>
                    <div class="form-group col-md-12">
                      <label>What we do?</label>
                      <textarea class="form-control" name="our_work" rows="4" placeholder=""><?php echo $row['our_work']; ?></textarea>     
                    </div>
                    <!-- first branch details -->
                    <div class="form-group col-md-3">
                      <label for="exampleInputtext1">Main Branch City</label>
                      <input type="text" name="city1" class="form-control"  placeholder="Enter Plot Name" value="<?php echo $row['city_one']; ?>">
                    </div>
                   <div class="form-group col-md-3">
                      <label for="exampleInputtext1">Main Branch Office</label>
                      <input type="text" name="office1" class="form-control" placeholder="Enter Physical Location" value="<?php echo $row['office_one']; ?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="exampleInputtext1">Main Branch Location</label>
                      <input type="text" name="location1" class="form-control"  placeholder="Enter Longitude" value="<?php echo $row['location_one']; ?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="exampleInputtext1">Main Branch phone Contact</label>
                      <input type="text" name="phone1" class="form-control" placeholder="Enter Latitude" value="<?php echo $row['phone1']; ?>">
                    </div>   
                    <!-- second branch details -->
                    <div class="form-group col-md-3">
                      <label for="exampleInputtext1">2nd Branch City</label>
                      <input type="text" name="city2" class="form-control"  placeholder="Enter Plot Name" value="<?php echo $row['city_two']; ?>">
                    </div>
                   <div class="form-group col-md-3">
                      <label for="exampleInputtext1">2nd Branch Office</label>
                      <input type="text" name="office2" class="form-control" placeholder="Enter Physical Location" value="<?php echo $row['office_two']; ?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="exampleInputtext1">2nd Branch Location</label>
                      <input type="text" name="location2" class="form-control"  placeholder="Enter Longitude" value="<?php echo $row['location_two']; ?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="exampleInputtext1">2nd Branch phone Contact</label>
                      <input type="text" name="phone2" class="form-control" placeholder="Enter Latitude" value="<?php echo $row['phone2']; ?>">
                    </div>   
                    <!-- third branch details -->
                    <div class="form-group col-md-3">
                      <label for="exampleInputtext1">3rd Branch City</label>
                      <input type="text" name="city3" class="form-control"  placeholder="Enter Plot Name" value="<?php echo $row['city_three']; ?>">
                    </div>
                   <div class="form-group col-md-3">
                      <label for="exampleInputtext1">3rd Branch Office</label>
                      <input type="text" name="office3" class="form-control" placeholder="Enter Physical Location" value="<?php echo $row['office_three']; ?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="exampleInputtext1">3rd Branch Location</label>
                      <input type="text" name="location3" class="form-control"  placeholder="Enter Longitude" value="<?php echo $row['location_three']; ?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="exampleInputtext1">3rd Branch phone Contact</label>
                      <input type="text" name="phone3" class="form-control" placeholder="Enter Latitude" value="<?php echo $row['phone3']; ?>">
                    </div>   
                    <input type="text" name="id" class="form-control" value="<?php echo $id; ?>" hidden>
                  </div>
                   <?php } } ?>
                <!-- /.row -->
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