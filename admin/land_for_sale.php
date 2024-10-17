<?php
$msg ='';
 if (isset($_GET['del'])) {
  $delete = dbQuery("DELETE FROM tbl_land_for_sale WHERE `land_id`='{$_GET['del']}'");

  if ($delete) {
      $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                You have successfully deleted land for sale
      </div>";
    } else {
      $msg = "
     <div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
               Could not delete this land.Please try again or contact the administrator
      </div>";
                    }
                } ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>LAND FOR SALE SECTION</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Land</a></li>
              <li class="breadcrumb-item active"> Land for sale</li>
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
                <h3>List of land plots for sale
            
                    <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
                      <a href="<?php _link(); ?>add_land" class="glyphicon glyphicon-plus" aria-hidden="false" title="Add new land for sale" data-toggle="tooltip" data-placement="right" style="color: white;">&nbsp;New </a>&nbsp;&nbsp; 
                    </li> 
                    <li class="<?php echo ($role==1 or $role==3)?'':' hide';?> btn btn-sm btn-primary" style="float: right; margin-right: 5px;">
                      <a href="<?php _link(); ?>land_inquiry" class="fa fa-question" aria-hidden="false" title="View land Inquiries recieved" data-toggle="tooltip" data-placement="right" style="color: white;">&nbsp;Land Inquiries </a>&nbsp;&nbsp; 
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
                    <th>Plot Name</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                 <?php
         $res =  dbQuery("SELECT * FROM tbl_land_for_sale");
               $count = dbNumRows($res);
               if($count > 0) {
                  while($row=dbFetchAssoc($res)){ 
                    $land_id =  $row['land_id']; 
                    $land_code =  $row['land_code']; ?>
                <tr onClick="viewDetails(event, 'index.php?page=landDetails&Id=<?php echo $row['land_id']; ?>')"> 
                <td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['land_id']; ?>" /></td>
                    <td><?php echo $row['land_code']; ?></td>
                    <td><?php echo $row['plot_name']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><img src="<?php echo $row['photo1']; ?>" style="max-height: 80px; max-width: 60px;"></td>
                    <td>
                    <?php
                      $chk_files =  dbQuery("SELECT * FROM tbl_land_for_sale WHERE  `photo1` = '' AND land_id = '$land_id' ");
                      $countFiles = dbNumRows($chk_files);
                      if($countFiles > 0) {
                      while($rowFiles =dbFetchAssoc($chk_files)){ ?>
                         <button class="btn btn-success"><a href="index.php?page=land_files&Id=<?php echo $row['land_id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Add Photos</a></button>
                      <?php } }?>
                    
                    <button class="btn btn-primary"><a href="index.php?page=edit_land&Id=<?php echo $row['land_id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Edit</a></button>

                    <button class="btn btn-danger"><a href="index.php?page=land_for_sale&del=<?php echo $row['land_id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Delete</a></button>
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