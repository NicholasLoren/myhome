<?php
$msg ='';
 if (isset($_GET['del'])) {
  $delete = dbQuery("DELETE FROM tbl_home_for_sale WHERE `home_id`='{$_GET['del']}'");

  if ($delete) {
      $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                You have successfully deleted a home
      </div>";
    } else {
      $msg = "
     <div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
               Could not delete this home.Please try again or contact the administrator
      </div>";
                    }
                } ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> HOMES FOR SALE SECTION</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Homes for sale</li>
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
                <h3>List of Homes for sale
                    <li class="btn btn-sm btn-primary"style="float: right; margin-right: 5px;">
                    <a href="<?php _link(); ?>listHome_rentals" aria-hidden="false" class="glyphicon glyphicon-fast-backward" title="View Homes for Renting" data-toggle="tooltip" data-placement="right" style="color: white;">&nbsp;Homes for Rent</a>
                    </li> 
                    
                    <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
                      <a href="<?php _link(); ?>addHome_for_sale" class="glyphicon glyphicon-plus" aria-hidden="false" title="Add new Home for sale" data-toggle="tooltip" data-placement="right" style="color: white;">&nbsp;New </a>&nbsp;&nbsp; 
                    </li>   
                    
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>##</th>
                    <th>ID</th>
                    <th>Home Name</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                 <?php
        // $res =  dbQuery("SELECT tbl_apartment_rentals.*,tbl_apartment_features.* FROM tbl_apartment_rentals INNER JOIN tbl_apartment_features ON tbl_apartment_rentals.apartment_id=tbl_apartment_features.apartment_id");
         $res =  dbQuery("SELECT * FROM tbl_home_for_sale");
               $count = dbNumRows($res);
               if($count > 0) {
                  while($row=dbFetchAssoc($res)){ 
                    $home_id =  $row['home_id'];
                    $home_code =  $row['home_code']; ?>
                <tr onClick="viewDetails(event, 'index.php?page=homeDetails&AP_Id=<?php echo $row['home_id']; ?>')"> 
                <td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['home_id']; ?>" /></td>
                    <td><?php echo $row['home_code']; ?></td>
                    <td><?php echo $row['home_name']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><img src="<?php echo $row['front_view']; ?>" style="max-height: 80px; max-width: 60px;"></td>
                    <td>
                    <?php
                      $chk_files =  dbQuery("SELECT * FROM tbl_home_for_sale WHERE  `front_view` = '' AND home_id = '$home_id' ");
                      $countFiles = dbNumRows($chk_files);
                      if($countFiles > 0) {
                      while($rowFiles =dbFetchAssoc($chk_files)){ ?>
                         <button class="btn btn-success"><a href="index.php?page=home_forsale_files&Id=<?php echo $row['home_id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Add Photos</a></button>
                      <?php } }?>

                     
                         <button class="btn btn-success"><a href="index.php?page=add_home_forsale_features&Id=<?php echo $row['home_code']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Features</a></button>
                                             
                    <button class="btn btn-primary"><a href="index.php?page=edit_home_for_sale&Id=<?php echo $row['home_id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Edit</a></button>

                    <button class="btn btn-danger"><a href="index.php?page=homes_for_sale&del=<?php echo $row['home_id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Delete</a></button>
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