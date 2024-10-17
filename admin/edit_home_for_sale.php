<?php
$home_id = $_GET['Id'];
$msg = '';
if (isset($_POST['submit'])) {
  //general details
   $home_name = $_POST['name']; 
   $location = $_POST['location']; 
   $longitude = $_POST['longitude'];  
   $latitude = $_POST['latitude']; 
   $price = $_POST['price']; 
   $measurement = $_POST['measurement'];  
   $description = $_POST['description'];  
   $home_type = $_POST['home_type'];  
   $year_built = $_POST['year'];  
   $accomodation_type = $_POST['accomodation_type'];  
   $bedrooms = $_POST['bedroom']; 
   $bathrooms = $_POST['bathroom'];  
   $dining_room = $_POST['dining_room'];  
   $sitting_room = $_POST['sitting_room'];  
   $visitors_room = $_POST['visitor_room'];  
   $office_room = $_POST['office_room'];  
   $kitchen = $_POST['kitchen']; 
   $cooling = $_POST['cooling']; 
   $heating = $_POST['heating'];  
   $parking = $_POST['parking']; 
   $outdoor = $_POST['outdoor'];  
   $swimming_pool = $_POST['swimming_pool'];  
   $total_floors = $_POST['total_floors'];  
   $living_area = $_POST['living_area'];  
   $status = $_POST['status'];  
   $listed_by = $_SESSION['fullnames']; 
  
                    
   //update  into database
  $home_sale = dbQuery("UPDATE tbl_home_for_sale SET `home_name`='$home_name', `location`='$location', `longitude`='$longitude', `latitude`='$latitude', `price`='$price', `measurement`='$measurement',  `description`='$description', `home_type`= '$home_type', `year_built`='$year_built', `accomodation_type`='$accomodation_type', `bedrooms`='$bedrooms', `bathrooms`='$bathrooms', `dining_room`='$dining_room', `sitting_room`='$sitting_room', `visitors_room`='$visitors_room', `office_room`= '$office_room', `kitchen`= '$kitchen', `cooling`='$cooling', `heating`='$heating', `parking`='$parking', `outdoor`='$outdoor', `swimming_pool`='$swimming_pool', `total_floors`='$total_floors', `living_area`='$living_area', `status`='$status' WHERE home_id = '$home_id'"); 

      if($home_sale){
        $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                 Home Successfully Updated
      </div>";
      goToPage("edit_home_for_sale&Id=$home_id");
    }
  } 
?>
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">EDIT HOMES FOR SALE SECTION</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
            <a href="<?php _link(); ?>homes_for_sale"  aria-hidden="false" title="Back to Homes for sale" data-toggle="tooltip" data-placement="right" style="color: white;"><i class="fa fa-fast-backward"></i> &nbsp;Back </a>&nbsp;&nbsp; 
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
      <?php $res =  dbQuery("SELECT * FROM tbl_home_for_sale WHERE home_id='$home_id'");
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
                <h3 class="card-title">Edit details of <?php echo $row['home_name']; ?> [<?php echo $row['home_code']; ?>]</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Home Name</label>
                      <input type="text" name="name" class="form-control"  placeholder="Enter Apartment Name" value="<?php echo $row['home_name']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Physical Location</label>
                      <input type="text" name="location" class="form-control" placeholder="Enter Physical Location" value="<?php echo $row['location']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Longitude</label>
                      <input type="text" name="longitude" class="form-control"  placeholder="Enter Longitude" value="<?php echo $row['longitude']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Latitude</label>
                      <input type="text" name="latitude" class="form-control" placeholder="Enter Latitude" value="<?php echo $row['latitude']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Price</label>
                      <input type="text" name="price" class="form-control"  placeholder="Enter Price" value="<?php echo $row['price']; ?>">
                    </div>
                     <div class="form-group col-md-2">
                      <label>Home Type</label>
                      <select name="home_type" class="form-control select2" style="width: 100%;">
                        <option value="<?php echo $row['home_type']; ?>"><?php echo $row['home_type']; ?></option>
                        <option value="Family Apartment">Family Apartment</option>
                        <option value="Hotel & Lodge">Hotel & Lodge</option>
                        <option value="Overnight Stay">Overnight Stay</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Year Built</label>
                      <input type="text" name="year" class="form-control" placeholder="Enter Year Built" value="<?php echo $row['year_built']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Accomodation Type</label>
                      <select name="accomodation_type" class="form-control select2" style="width: 100%;">
                        <option value="<?php echo $row['accomodation_type']; ?>"><?php echo $row['accomodation_type']; ?></option>
                        <option value="Furnished">Furnished</option>
                        <option value="Un furnished">Un furnished</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Bedrooms</label>
                      <input type="text" name="bedroom" class="form-control" placeholder="Enter Bedrooms" value="<?php echo $row['bedrooms']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Bathrooms</label>
                      <input type="text" name="bathroom" class="form-control"  placeholder="Enter Bathrooms" value="<?php echo $row['bathrooms']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Dinning Room</label>
                      <input type="text" name="dining_room" class="form-control" placeholder="Enter Dinning Rooms" value="<?php echo $row['dining_room']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Sitting Room</label>
                      <input type="text" name="sitting_room" class="form-control"  placeholder="Enter Sitting Rooms" value="<?php echo $row['sitting_room']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Visitor's Room</label>
                      <input type="text" name="visitor_room" class="form-control" placeholder="Enter Visitor's Rooms" value="<?php echo $row['visitors_room']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Office Room</label>
                      <input type="text" name="office_room" class="form-control"  placeholder="Enter Office Rooms" value="<?php echo $row['office_room']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Kitchen</label>
                      <input type="text" name="kitchen" class="form-control" placeholder="Enter Kitchen" value="<?php echo $row['kitchen']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label>Cooling</label>
                      <select name="cooling" class="form-control select2" style="width: 100%;">
                        <option value="<?php echo $row['cooling']; ?>"><?php echo $row['cooling']; ?></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Heating</label>
                      <select name="heating" class="form-control select2" style="width: 100%;">
                        <option value="<?php echo $row['heating']; ?>"><?php echo $row['heating']; ?></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Swimming Pool</label>
                      <select name="swimming_pool" class="form-control select2" style="width: 100%;">
                        <option value="<?php echo $row['swimming_pool']; ?>"><?php echo $row['swimming_pool']; ?></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Living Area</label>
                      <input type="text" name="living_area" class="form-control"  placeholder="Enter Floors" value="<?php echo $row['living_area']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Total Floors</label>
                      <input type="text" name="total_floors" class="form-control"  placeholder="Enter Floors" value="<?php echo $row['total_floors']; ?>">
                    </div>
                    <div class="form-group col-md-5">
                      <label for="exampleInputtext1">Parking</label>
                      <input type="text" name="parking" class="form-control"  placeholder="Describe Parking type" value="<?php echo $row['parking']; ?>">
                    </div>
                    <div class="form-group col-md-5">
                      <label for="exampleInputtext1">Outdoor</label>
                      <input type="text" name="outdoor" class="form-control" placeholder="Describe outdoor items" value="<?php echo $row['outdoor']; ?>">
                    </div>
                    
                    <div class="form-group col-md-10">
                      <label>Measuremnt</label>
                      <input type="text" name="measurement" class="form-control" placeholder="Describe apartment measurement" value="<?php echo $row['measurement']; ?>">
                    </div>
                    <div class="form-group col-md-2">
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
                      <label>Description</label>
                      <textarea class="form-control" name="description" rows="4" placeholder=""><?php echo $row['description']; ?></textarea>     
                    </div>
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