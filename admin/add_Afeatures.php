<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Update with your database username
$password = ""; // Update with your database password
$dbname = "myhome_db"; // Update with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if features and apartment_code are set
if (isset($_POST['features']) && is_array($_POST['features']) && isset($_POST['apartment_code'])) {
    $apartment_code = intval($_POST['apartment_code']);

    // Prepare SQL to insert or update features
    $stmt = $conn->prepare("
        INSERT INTO tbl_rental_apartment_features (apartment_code, refrigerator, gym, washer, barbeque, hangers, microwave, sauna, dryer, laundry, shower, internet)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE 
            refrigerator = VALUES(refrigerator),
            gym = VALUES(gym),
            washer = VALUES(washer),
            barbeque = VALUES(barbeque),
            hangers = VALUES(hangers),
            microwave = VALUES(microwave),
            sauna = VALUES(sauna),
            dryer = VALUES(dryer),
            laundry = VALUES(laundry),
            shower = VALUES(shower),
            internet = VALUES(internet)
    ");

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Set default values for all features (0 for not selected, 1 for selected)
    $refrigerator = isset($_POST['features']['refrigerator']) ? 1 : 0;
    $gym = isset($_POST['features']['gym']) ? 1 : 0;
    $washer = isset($_POST['features']['washer']) ? 1 : 0;
    $barbeque = isset($_POST['features']['barbeque']) ? 1 : 0;
    $hangers = isset($_POST['features']['hangers']) ? 1 : 0;
    $microwave = isset($_POST['features']['microwave']) ? 1 : 0;
    $sauna = isset($_POST['features']['sauna']) ? 1 : 0;
    $dryer = isset($_POST['features']['dryer']) ? 1 : 0;
    $laundry = isset($_POST['features']['laundry']) ? 1 : 0;
    $shower = isset($_POST['features']['shower']) ? 1 : 0;
    $internet = isset($_POST['features']['internet']) ? 1 : 0;

    $stmt->bind_param("iiiiiiiiiiii", 
        $apartment_code, 
        $refrigerator, 
        $gym, 
        $washer, 
        $barbeque, 
        $hangers, 
        $microwave, 
        $sauna, 
        $dryer, 
        $laundry, 
        $shower, 
        $internet
    );

    if ($stmt->execute()) {
        echo "Features updated successfully.";
    } else {
        echo "Error executing query: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "No features selected or apartment_code not provided.";
}

// Close the connection
$conn->close();
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
            <!-- features -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Add Apartment Features</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<!--               <form action="update_apartment_features.php" method="post">
 -->              <form action="" method="post">
        <h2>Select Apartment Features:</h2>
        
        <input type="hidden" name="apartment_code" value="MH0002"> <!-- Replace with dynamic value -->

        <input type="checkbox" name="features[refrigerator]" value="1"> Refrigerator<br>
        <input type="checkbox" name="features[gym]" value="1"> Gym<br>
        <input type="checkbox" name="features[washer]" value="1"> Washer<br>
        <input type="checkbox" name="features[barbeque]" value="1"> Barbeque<br>
        <input type="checkbox" name="features[hangers]" value="1"> Hangers<br>
        <input type="checkbox" name="features[microwave]" value="1"> Microwave<br>
        <input type="checkbox" name="features[sauna]" value="1"> Sauna<br>
        <input type="checkbox" name="features[dryer]" value="1"> Dryer<br>
        <input type="checkbox" name="features[laundry]" value="1"> Laundry<br>
        <input type="checkbox" name="features[shower]" value="1"> Shower<br>
        <input type="checkbox" name="features[internet]" value="1"> Internet<br>
        
        <input type="submit" value="Submit">
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