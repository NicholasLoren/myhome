<?php
if (isset($_POST['submit'])) {
  //general details
   $apartment_name = $_POST['name']; 
   $location = $_POST['location']; 
   $longitude = $_POST['longitude'];  
   $latitude = $_POST['latitude']; 
   $price = $_POST['price']; 
   $period = $_POST['period']; 
   $measurement = $_POST['measurement'];  
   $description = $_POST['description'];  
   $apartment_type = $_POST['apartment_type'];  
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
   //$ground_floor = $_POST['ground_floor'];  
   $first_floor = $_POST['first_floor'];  
   $front_view = $_POST['front_view']; 
   $back_view = $_POST['back_view'];  
   $side_view = $_POST['side_view']; 
   $aerial_view = $_POST['aerial_view'];  
   $tour_video = $_POST['tour_video']; 
   $listed_by = $_SESSION['fullnames']; 
   //uploading images
   //uploading the image file path
      $uploadImageDir = 'images/apartments/';
      $valid_img_ext = array('jpeg','png','jpg');
      $imgFile = $_FILES['ground_floor']['name'];
      $tmpImgDir = $_FILES['ground_floor']['tmp_name'];
      $imgSize = $_FILES['ground_floor']['size'];
      $imgExtension = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
      $ground_floor = $uploadImageDir . rand(1000, 1000000) . "." . $imgExtension;
                    
                    
  //creating death code
  $result = @ dbQuery("SHOW TABLE STATUS LIKE  'tbl_apartment_rentals'");
  $data = @dbFetchAssoc($result);
  $next = $data['Auto_increment'];
  $prefix = "MYHOME/AR/";
  $apartment_code = sprintf("%s%03s",$prefix,$next);
                    
  $existTime = dbNumRows(dbQuery("SELECT * FROM `tbl_apartment_rentals` WHERE `apartment_name`='$apartment_name'"));
  if($existTime>0){
    warningMsg("Rental Apartment Already registered");
    }else{
        
  //insert  into database
  $apartment_rental = dbQuery("INSERT INTO tbl_apartment_rentals(`apartment_code`, `apartment_name`, `location`, `longitude`, `latitude`, `price`, `period`, `measurement`,  `description`, `apartment_type`, `year_built`, `accomodation_type`, `bedrooms`, `bathrooms`, `dining_room`, `sitting_room`, `visitors_room`, `office_room`, `kitchen`, `cooling`, `heating`, `parking`, `outdoor`, `swimming_pool`, `total_floors`, `living_area`, `ground_floor`, `first_floor`, `front_view`, `back_view`, `side_view`, `aerial_view`, `tour_video`, `listed_by`) VALUES('$apartment_code', '$apartment_name', '$location', '$longitude', '$latitude', '$price', '$period', '$measurement', '$description', '$apartment_type', '$year_built', '$accomodation_type', '$bedrooms', '$bathrooms', '$dining_room', '$sitting_room', '$visitors_room', '$office_room', '$kitchen', '$cooling', '$heating', '$parking', '$outdoor', '$swimming_pool', '$total_floors', '$living_area', '$ground_floor', '$first_floor', '$front_view', '$back_view', '$side_view', '$aerial_view', '$tour_video','$listed_by')"); 

      if($apartment_rental){
      move_uploaded_file($tmpImgDir, $adminImage);
      successMsg("New Rental Apartment Successfully Registered");
      goToPage("listApartment_rentals");
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
            <h1 class="m-0">RENTAL APARTMENTS SECTION</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Rent Apartments</li>
              <li class="breadcrumb-item active">Add New Rental Apartment</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

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
                      <label for="exampleInputtext1">Apartment Name</label>
                      <input type="text" name="name" class="form-control"  placeholder="Enter Apartment Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Physical Location</label>
                      <input type="text" name="location" class="form-control" placeholder="Enter Physical Location">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Longitude</label>
                      <input type="text" name="longitude" class="form-control"  placeholder="Enter Longitude">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Latitude</label>
                      <input type="text" name="latitude" class="form-control" placeholder="Enter Latitude">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Price</label>
                      <input type="text" name="price" class="form-control"  placeholder="Enter Price">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Period</label>
                      <input type="text" name="period" class="form-control" placeholder="Enter Period">
                    </div>
                    <div class="form-group col-md-2">
                      <label>Apartment Type</label>
                      <select name="apartment_type" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Choose Apartment type</option>
                        <option value="Family Apartment">Family Apartment</option>
                        <option value="Hotel & Lodge">Hotel & Lodge</option>
                        <option value="Overnight Stay">Overnight Stay</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Year Built</label>
                      <input type="text" name="year" class="form-control" placeholder="Enter Year Built">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Accomodation Type</label>
                      <select name="accomodation_type" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Choose Accomodation type</option>
                        <option value="Furnished">Furnished</option>
                        <option value="Un furnished">Un furnished</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Bedrooms</label>
                      <input type="text" name="bedroom" class="form-control" placeholder="Enter Bedrooms">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Bathrooms</label>
                      <input type="text" name="bathroom" class="form-control"  placeholder="Enter Bathrooms">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Dinning Room</label>
                      <input type="text" name="dining_room" class="form-control" placeholder="Enter Dinning Rooms">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Sitting Room</label>
                      <input type="text" name="sitting_room" class="form-control"  placeholder="Enter Sitting Rooms">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Visitor's Room</label>
                      <input type="text" name="visitor_room" class="form-control" placeholder="Enter Visitor's Rooms">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Office Room</label>
                      <input type="text" name="office_room" class="form-control"  placeholder="Enter Office Rooms">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Kitchen</label>
                      <input type="text" name="kitchen" class="form-control" placeholder="Enter Kitchen">
                    </div>
                    <div class="form-group col-md-2">
                      <label>Cooling</label>
                      <select name="cooling" class="form-control select2" style="width: 100%;">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Heating</label>
                      <select name="heating" class="form-control select2" style="width: 100%;">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Swimming Pool</label>
                      <select name="swimming_pool" class="form-control select2" style="width: 100%;">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Living Area</label>
                      <input type="text" name="living_area" class="form-control"  placeholder="Enter Floors">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Total Floors</label>
                      <input type="text" name="total_floors" class="form-control"  placeholder="Enter Floors">
                    </div>
                    <div class="form-group col-md-5">
                      <label for="exampleInputtext1">Parking</label>
                      <input type="text" name="parking" class="form-control"  placeholder="Describe Parking type">
                    </div>
                    <div class="form-group col-md-5">
                      <label for="exampleInputtext1">Outdoor</label>
                      <input type="text" name="outdoor" class="form-control" placeholder="Describe outdoor items">
                    </div>
                    
                    <div class="form-group col-md-12">
                      <label>Measuremnt</label>
                      <input type="text" name="measurement" class="form-control" placeholder="Describe apartment measurement">
                    </div>
                    <div class="form-group col-md-12">
                      <label>Description</label>
                      <textarea class="form-control" name="description" rows="4" placeholder="General Apartment Description..."></textarea>     
                    </div>
                  </div>
                <!-- /.row -->
              </div>
                <!-- /.card-body -->
              <!-- </form>-->
            </div>
            <!-- /.card -->

          <!-- photos and videos -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Upload Photos and Videos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- </form>-->
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputFile">Ground Floor</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="ground_floor" class="form-control" id="exampleInputFile">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputFile">First Floor</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="first_floor" class="form-control" id="exampleInputFile">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputFile">Front view</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="front" class="form-control" id="exampleInputFile">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputFile">Back view</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="back" class="form-control" id="exampleInputFile">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputFile">Side View</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="side" class="form-control" id="exampleInputFile">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputFile">Aerial View</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="aerial" class="form-control" id="exampleInputFile">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputFile">Video Tour</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="video" class="form-control" id="exampleInputFile">
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- /.row -->
              </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
            <!-- /.card -->
             </form>
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