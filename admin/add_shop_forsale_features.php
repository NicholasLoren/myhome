<?php
$shop_code = $_GET['Id'];
?>
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">SHOPS FOR SALE FEATURES SECTION
              <li class="btn btn-sm btn-primary"style="float: right;">
                    <a href="<?php _link(); ?>shops_for_sale" aria-hidden="false"  title="View shops for sale" data-toggle="tooltip" data-placement="right" style="color: white;"><i class="fa fa-fast-backward"></i>&nbsp;Go to shops for sale</a>
                    </li> </h1>
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
            <!-- features -->
            <div class="card card-primary">
              <div class="card-header">
                <?php
                    $get_shop = dbQuery("SELECT * FROM tbl_shop_for_sale WHERE shop_code ='$shop_code' LIMIT 1");
                      $count1 = dbNumRows($get_shop);
                    if($count1 > 0) {
                      while($row1=dbFetchAssoc($get_shop)){ 
                      $name = $row1['shop_name']; ?>
                <h3 class="card-title">Add shop Features for : <?php echo $name; ?> </h3>
              <?php } } ?>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form action="features/SSF_update.php" method="post">
<input type="hidden" id="shop_code" name="shop_code" value="<?php echo $shop_code;?>" required>
                <div class="card-body">
                  <div class="row col-md-12 alert alert-success">
                    <?php
                    $get_features = dbQuery("SELECT * FROM tbl_shop_forsale_features WHERE shop_code ='$shop_code' LIMIT 1");
                      $count = dbNumRows($get_features);
                    if($count > 0) {
                      while($row=dbFetchAssoc($get_features)){ 
                      $refrigeratorRow = $row['refrigerator']; 
                      $gymRow = $row['gym']; 
                      $washerRow = $row['washer']; 
                      $barbequeRow = $row['barbeque']; 
                      $hangersRow = $row['hangers']; 
                      $microwaveRow = $row['microwave']; 
                      $saunaRow = $row['sauna']; 
                      $dryerRow = $row['dryer']; 
                      $laundryRow = $row['laundry']; 
                      $showerRow = $row['shower']; 
                      $internetRow = $row['internet'];
                    ?>
                    <hr>
                    <label>Current Existing Features: 
                      <?php 
                      if ($refrigeratorRow =='1') { echo "Refrigerator,&nbsp;&nbsp;";}
                      if ($gymRow =='1') { echo "Gym,&nbsp;&nbsp;";}
                      if ($washerRow =='1') { echo "Washer,&nbsp;&nbsp;";}
                      if ($barbequeRow =='1') { echo "Barbeque,&nbsp;&nbsp;";}
                      if ($hangersRow =='1') { echo "Hangers,&nbsp;&nbsp;";}
                      if ($microwaveRow =='1') { echo "Microwave,&nbsp;&nbsp;";}
                      if ($saunaRow =='1') { echo "Sauna,&nbsp;&nbsp;";}
                      if ($dryerRow =='1') { echo "Dryer,&nbsp;&nbsp;";}
                      if ($laundryRow =='1') { echo "Laundry,&nbsp;&nbsp;";}
                      if ($showerRow =='1') { echo "Shower,&nbsp;&nbsp;";}
                      if ($internetRow =='1') { echo "Internet,&nbsp;&nbsp;";}
                      ?>
                    </label>
                    <hr>
                  <?php //} } ?>
                  </div>
                  <div class="row col-md-12">
                    <div class="form-group col-md-3">
                      <input class="form-check-input" type="checkbox" id="refrigerator" name="features[]" value="refrigerator"
                      <?php if ($refrigeratorRow ==='1') { ?>checked="checked"<?php } ?> >
                      <label class="form-check-label"> Refrigerator</label>
                    </div>
                    <div class="form-group col-md-3">
                      <input class="form-check-input" type="checkbox" id="gym" name="features[]" value="gym"
                      <?php if ($gymRow ==='1') { ?>checked="checked"<?php } ?> >
                      <label class="form-check-label"> Gym</label>
                    </div>
                    <div class="form-group clearfix col-md-3">
                      <input class="form-check-input" type="checkbox" id="washer" name="features[]" value="washer"
                      <?php if ($washerRow ==='1') { ?>checked="checked"<?php } ?> >
                      <label class="form-check-label"> Washer</label>
                    </div>
                    <div class="form-group clearfix col-md-3">
                      <input class="form-check-input" type="checkbox" id="barbeque" name="features[]" value="barbeque"
                      <?php if ($barbequeRow ==='1') { ?>checked="checked"<?php } ?> >
                      <label class="form-check-label"> Barbeque</label>
                    </div>
                    <div class="form-group clearfix col-md-3">
                      <input class="form-check-input" type="checkbox" id="hangers" name="features[]" value="hangers"
                      <?php if ($hangersRow ==='1') { ?>checked="checked"<?php } ?> >
                      <label class="form-check-label"> Hangers</label>
                    </div>
                    <div class="form-group clearfix col-md-3">
                      <input class="form-check-input" type="checkbox" id="microwave" name="features[]" value="microwave"
                      <?php if ($microwaveRow ==='1') { ?>checked="checked"<?php } ?> >
                      <label class="form-check-label"> Microwave</label>
                    </div>
                    <div class="form-group clearfix col-md-3">
                      <input class="form-check-input" type="checkbox" id="sauna" name="features[]" value="sauna"
                      <?php if ($saunaRow ==='1') { ?>checked="checked"<?php } ?> >
                      <label class="form-check-label"> Sauna</label>
                    </div>
                    <div class="form-group clearfix col-md-3">
                      <input class="form-check-input" type="checkbox" id="dryer" name="features[]" value="dryer"
                      <?php if ($dryerRow ==='1') { ?>checked="checked"<?php } ?> >
                      <label class="form-check-label"> Dryer</label>
                    </div>
                    <div class="form-group clearfix col-md-3">
                      <input class="form-check-input" type="checkbox" id="laundry" name="features[]" value="laundry"
                      <?php if ($laundryRow ==='1') { ?>checked="checked"<?php } ?> >
                      <label class="form-check-label"> Laundry</label>
                    </div>
                    <div class="form-group clearfix col-md-3">
                      <input class="form-check-input" type="checkbox" id="shower" name="features[]" value="shower"
                      <?php if ($showerRow ==='1') { ?>checked="checked"<?php } ?> >
                      <label class="form-check-label"> Shower</label>
                    </div>
                    <div class="form-group clearfix col-md-3">
                      <input class="form-check-input" type="checkbox" id="internet" name="features[]" value="internet"
                      <?php if ($internetRow ==='1') { ?>checked="checked"<?php } ?> >
                      <label class="form-check-label"> Internet</label>
                    </div>
                  </div>
                <!-- /.row -->
                 <?php } }
                 else{
                   "
     <div class='alert alert-danger'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
               This shop has no extra features, add features by selecting from the list below.
      </div>";
                 } ?>
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="submit" value="Update" class="btn btn-primary">
                </div>
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