<?php
$shop_id = $_GET['Id'];
$msg = '';
if (isset($_POST['submit'])) {
  //general details
   $shop_name = $_POST['name']; 
   $total_rooms = $_POST['total_rooms']; 
   $location = $_POST['location']; 
   $longitude = $_POST['longitude'];  
   $latitude = $_POST['latitude']; 
   $price = $_POST['price']; 
   $period = $_POST['period']; 
   $measurement = $_POST['measurement'];  
   $description = $_POST['description'];  
   $shop_type = $_POST['shop_type'];  
   $year_built = $_POST['year'];  
   $store_room = $_POST['store_room'];  
   $accomodation_type = $_POST['accomodation_type'];  
   $cooling = $_POST['cooling']; 
   $heating = $_POST['heating'];  
   $parking = $_POST['parking']; 
   $outdoor = $_POST['outdoor'];  
   $status = $_POST['status'];  
   $listed_by = $_SESSION['fullnames']; 
  
   
  //update  into database
  $shop_rental = dbQuery("UPDATE tbl_shop_rentals SET `shop_name`='$shop_name', `location`='$location', `longitude`= '$longitude', `latitude`='$latitude', `price`='$price', `period`='$period', `measurement`='$measurement',  `description`='$description', `shop_type`='$shop_type', `accomodation_type`='$accomodation_type', `year_built`='$year_built', `total_rooms`='$total_rooms', `store_room`='$store_room', `cooling`='$cooling', `heating`='$heating', `parking`='$parking', `outdoor`='$outdoor', `listed_by`='$listed_by',`status`='$status' WHERE shop_id='$shop_id'");

      if($shop_rental){
         $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                 Rental shop Successfully Updated
      </div>";
      goToPage("edit_shop_rentals&Id=$shop_id");
    }
  } 
?>
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">EDIT RENTAL SHOPS SECTION</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
            <a href="<?php _link(); ?>listShop_rentals"  aria-hidden="false" title="Back to Rental Shops" data-toggle="tooltip" data-placement="right" style="color: white;"><i class="fa fa-fast-backward"></i> &nbsp;Back </a>&nbsp;&nbsp; 
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
      <?php $res =  dbQuery("SELECT * FROM tbl_shop_rentals WHERE shop_id='$shop_id'");
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
                <h3 class="card-title">Edit details of <?php echo $row['shop_name']; ?> [<?php echo $row['shop_code']; ?>]</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Shop Name</label>
                      <input type="text" name="name" class="form-control"  placeholder="Enter Apartment Name" value="<?php echo $row['shop_name']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputtext1">Physical Location</label>
                      <input type="text" name="location" class="form-control" placeholder="Enter Physical Location" value="<?php echo $row['location']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Total Rooms</label>
                      <input type="text" name="total_rooms" class="form-control"  placeholder="Enter " value="<?php echo $row['total_rooms']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="exampleInputtext1">Store Rooms</label>
                      <input type="text" name="store_room" class="form-control"  placeholder="Enter "  value="<?php echo $row['store_room']; ?>">
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
                      <label for="exampleInputtext1">Period</label>
                      <input type="text" name="period" class="form-control" placeholder="Enter Period" value="<?php echo $row['period']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label>Shop Type</label>
                      <select name="shop_type" class="form-control select2" style="width: 100%;">
                        <option value="<?php echo $row['shop_type']; ?>"><?php echo $row['shop_type']; ?></option>
                       <option value="General Shop">General shop</option>
                        <option value="Botique">Botique</option>
                        <option value="Laundry shop">Laundry shop</option>
                        <option value="Warehouse">Warehouse</option>
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
                      <textarea class="form-control" name="description" rows="4" ><?php echo $row['description']; ?></textarea>     
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