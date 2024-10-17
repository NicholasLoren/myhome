<?php
$msg ='';
 if (isset($_GET['del'])) {
  $delete = dbQuery("DELETE FROM tbl_landlords WHERE `id`='{$_GET['del']}'");

  if ($delete) {
      $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                You have successfully deleted a landlord
      </div>";
    } else {
      $msg = "
     <div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
               Could not delete this landlord.Please try again or contact the administrator
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
              <li class="breadcrumb-item"><a href="#">shop</a></li>
              <li class="breadcrumb-item active">Landlords</li>
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
                <h3>List of registered landlords
                    <li class="btn btn-sm btn-primary"style="float: right; margin-right: 5px;">
                    <a href="<?php _link(); ?>landlord_house_status" aria-hidden="false" class="glyphicon glyphicon-fast-backward" title="View New property updates" data-toggle="tooltip" data-placement="right" style="color: white;">&nbsp;Property status Updates</a>
                    </li> 
                    
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
                    <th>Fullnames</th>
                    <th>Location</th>
                    <th>Phone</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                 <?php
        // $res =  dbQuery("SELECT tbl_apartment_rentals.*,tbl_apartment_features.* FROM tbl_apartment_rentals INNER JOIN tbl_apartment_features ON tbl_apartment_rentals.apartment_id=tbl_apartment_features.apartment_id");
         $res =  dbQuery("SELECT * FROM tbl_landlords");
                $x = 1;
               $count = dbNumRows($res);
               if($count > 0) {
                  while($row=dbFetchAssoc($res)){ 
                    $id =  $row['id'];  ?>
                <tr> 
                    <td><?php echo $x++; ?></td>
                    <td><?php echo $row['landlord_id']; ?></td>
                    <td><?php echo $row['fullnames']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td>
                                             
                    <button class="btn btn-primary"><a href="index.php?page=edit_landlord&Id=<?php echo $row['id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Edit</a></button>

                    <button class="btn btn-danger"><a href="index.php?page=listLandlords&del=<?php echo $row['id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Delete</a></button>
                  </td>
                  </tr>
                  <?php
    } 
  }
  else
  {
    ?>
        <!-- <tr>
        <td colspan="9">  <center>No Isolation Center Records Is Found ...</center></td>
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