<?php
$msg ='';
 if (isset($_GET['del'])) {
  $delete = dbQuery("DELETE FROM tbl_land_inquiries WHERE `inquiry_id`='{$_GET['del']}'");

  if ($delete) {
      $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                You have successfully deleted an inquiry
      </div>";
    } else {
      $msg = "
     <div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
               Could not delete this inquiry.Please try again or contact the administrator
      </div>";
                    }
                }
  if (isset($_GET['read'])) {
  $delete = dbQuery("UPDATE tbl_land_inquiries SET inquiry_status ='1' WHERE `inquiry_id`='{$_GET['read']}'");

    } ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>LAND FOR SALE INQUIRIES SECTION</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Land for sale</a></li>
              <li class="breadcrumb-item active"> Inquiries</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
              <p><?php echo $msg; ?></p>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3>List of Inquiries about land plots for sale
  
                    <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
                      <a href="<?php _link(); ?>land_for_sale" class="fa fa-folder" aria-hidden="false" title="Back to land for sale" data-toggle="tooltip" data-placement="right" style="color: white;">&nbsp;Land for sale </a>&nbsp;&nbsp; 
                    </li>   
                    
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>##</th>
                    <th>Inquiry ID</th>
                    <th>From</th>
                    <th>Phone</th>
                    <th>Plot Name</th>
                    <th>Inquiry</th>
                    <th>Date of Inquiry</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                 <?php
         $res =  dbQuery("SELECT tbl_land_inquiries.*, tbl_land_for_sale.* FROM tbl_land_inquiries INNER JOIN tbl_land_for_sale ON tbl_land_inquiries.land_id=tbl_land_for_sale.land_id ORDER BY inquiry_date, inquiry_status DESC");
              $x = 1;
               $count = dbNumRows($res);
               if($count > 0) {
                  while($row=dbFetchAssoc($res)){ 
                    $status = $row['inquiry_status'];?>
                <tr> 
                    <td><?php echo $x++; ?></td>
                    <td><?php echo $row['inquiry_code']; ?></td>
                    <td><?php echo $row['inquiry_by']; ?></td>
                    <td><?php echo $row['sender_phone']; ?></td>
                    <td><?php echo $row['plot_name']; ?></td>
                    <td><?php echo $row['inquiry']; ?></td>
                    <td><?php echo $row['inquiry_date']; ?></td>
                    <td>
                    <?php if ($status =='0') { ?>
                     <button class="btn btn-success"><a href="index.php?page=land_inquiry&read=<?php echo $row['inquiry_id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Mark As Read</a></button>
                    <?php } ?>
                    <button class="btn btn-danger"><a href="index.php?page=land_inquiry&del=<?php echo $row['inquiry_id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Delete</a></button>
                  </td>
                  </tr>
                  <?php
    } 
  }
  else
  {
    ?>
        <tr>
        <td colspan="9">  <center>No Records Is Found ...</center></td>
        </tr> 
        <?php
  }
?>

<?php     
       if($count > 0)
{
  ?>
   
    <?php
}

?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->