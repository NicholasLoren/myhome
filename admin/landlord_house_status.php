<?php
$msg ='';
 if (isset($_GET['a_status'])) {
  $update_status = dbQuery("UPDATE tbl_landlord_status SET admin_status = '1' WHERE `id`='{$_GET['a_status']}'");

  if ($update_status) {
      $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                You have successfully updated message status
      </div>";
            goToPage("landlords");
    } else {
      $msg = "
     <div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
               Could not update read status.Please try again or contact the administrator
      </div>";
                    }
                } ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>LANDLORDS SECTION</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Landlords</li>
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
                <h3>List of Updates from landlords
                    <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
                      <a href="<?php _link(); ?>addLandlord" class="glyphicon glyphicon-plus" aria-hidden="false" title="Add new landlord" data-toggle="tooltip" data-placement="right" style="color: white;">&nbsp;New Landlord</a>&nbsp;&nbsp; 
                    </li>   
                    
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>##</th>
                    <th>Landlord ID</th>
                    <th>Property Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                 <?php
         $res =  dbQuery("SELECT * FROM tbl_landlord_status ORDER BY admin_status ASC");
              $x = 1;
               $count = dbNumRows($res);
               if($count > 0) {
                  while($row=dbFetchAssoc($res)){ 
                    $landlord_id =  $row['landlord_id'];
                    $adminstatus =  $row['admin_status']; ?>
                <tr> 
                    <td><?php echo $x++; ?></td>
                    <td>
                      <a href="index.php?page=landlord_details&Id=<?php echo $row['landlord_id']; ?>"><?php echo $row['landlord_id']; ?></a>
                    </td>
                    <td><?php echo $row['house_status']; ?></td>
                    <td><?php echo $row['date_added']; ?></td>
                    <td>
                    <?php if ($adminstatus !== '1') { ?>
                     <button class="btn btn-success"><a href="index.php?page=landlords&a_status=<?php echo $row['id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Mark as read</a></button>
                   <?php } ?>
                    
                  </td>
                  </tr>
                  <?php
    } 
  }
  else
  {
    ?>
        <!-- <tr>
        <td colspan="9">  <center>No Records Is Found ...</center></td>
        </tr> -->
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