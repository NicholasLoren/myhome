<?php
$msg ='';
 if (isset($_GET['del'])) {
  $delete = dbQuery("DELETE FROM tbl_condominiums WHERE `condo_id`='{$_GET['del']}'");

  if ($delete) {
      $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                You have successfully deleted a condominium for sale
      </div>";
    } else {
      $msg = "
     <div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
               Could not delete this condominium.Please try again or contact the administrator
      </div>";
                    }
                } ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CONDOMINIUMS FOR SALE SECTION</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Condominiumns for sale</li>
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
                <h3>List of Condominiums for sale
                    
                    <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
                      <a href="<?php _link(); ?>add_condominium" class="glyphicon glyphicon-plus" aria-hidden="false" title="Add new condominium for sale" data-toggle="tooltip" data-placement="right" style="color: white;">&nbsp;New </a>&nbsp;&nbsp; 
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
                    <th>Condo Name</th>
                    <th>Location</th>
                    <th>Sell Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                 <?php
        // $res =  dbQuery("SELECT tbl_apartment_rentals.*,tbl_apartment_features.* FROM tbl_apartment_rentals INNER JOIN tbl_apartment_features ON tbl_apartment_rentals.apartment_id=tbl_apartment_features.apartment_id");
         $res =  dbQuery("SELECT * FROM tbl_condominiums");
               $count = dbNumRows($res);
               if($count > 0) {
                  while($row=dbFetchAssoc($res)){ 
                    $condo_id =  $row['condo_id'];
                    $condo_code =  $row['condo_code']; ?>
                <tr onClick="viewDetails(event, 'index.php?page=condoDetails&AP_Id=<?php echo $row['condo_id']; ?>')"> 
                <td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['condo_id']; ?>" /></td>
                    <td><?php echo $row['condo_id']; ?></td>
                    <td><?php echo $row['condo_name']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><img src="<?php echo $row['front_view']; ?>" style="max-height: 80px; max-width: 60px;"></td>
                    <td>
                    <?php
                      $chk_files =  dbQuery("SELECT * FROM tbl_condominiums WHERE  `front_view` = '' AND condo_id = '$condo_id' ");
                      $countFiles = dbNumRows($chk_files);
                      if($countFiles > 0) {
                      while($rowFiles =dbFetchAssoc($chk_files)){ ?>
                         <button class="btn btn-success"><a href="index.php?page=condo_files&Id=<?php echo $row['condo_id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Add Photos</a></button>
                      <?php } }?>

                         <button class="btn btn-success"><a href="index.php?page=add_condominium_features&Id=<?php echo $row['condo_code']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Features</a></button>
                    
                    <button class="btn btn-primary"><a href="index.php?page=edit_condominium&Id=<?php echo $row['condo_id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Edit</a></button>

                    <button class="btn btn-danger"><a href="index.php?page=condominiums_for_sale&del=<?php echo $row['condo_id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Delete</a></button>
                  </td>
                  </tr>
                  <?php }  } ?>
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