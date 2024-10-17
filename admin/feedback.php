<?php
$msg ='';
 if (isset($_GET['del'])) {
  $delete = dbQuery("DELETE FROM tbl_feedback WHERE `id`='{$_GET['del']}'");

  if ($delete) {
      $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                You have successfully deleted feedback
      </div>";
    } else {
      $msg = "
     <div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
               Could not delete this feedback.Please try again or contact the administrator
      </div>";
                    }
                }  
  if (isset($_GET['read'])) {
  $delete = dbQuery("UPDATE tbl_feedback SET reply ='Seen & Contacted' WHERE `id`='{$_GET['read']}'");

    } ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>USER FEEDBACK SECTION</h1>
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
                <h3>List of messages from clients </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>##</th>
                    <th>Message ID</th>
                    <th>From</th>
                    <th>Message</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                 <?php
         $res =  dbQuery("SELECT * FROM tbl_feedback ORDER BY date_sent DESC");
              $x = 1;
               $count = dbNumRows($res);
               if($count > 0) {
                  while($row=dbFetchAssoc($res)){ 
                    $reply = $row['reply'];?> 
                <tr> 
                    <td><?php echo $x++; ?></td>
                    <td><?php echo $row['message_id']; ?></td>
                    <td><?php echo $row['sent_by']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['date_sent']; ?></td>
                    
                    <td>
                     <?php if ($reply =='') { ?>
                     <button class="btn btn-success"><a href="index.php?page=feedback&read=<?php echo $row['id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Mark As Read</a></button>
                    <?php } ?>
                    <button class="btn btn-danger"><a href="index.php?page=feedback&del=<?php echo $row['id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Delete</a></button>
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