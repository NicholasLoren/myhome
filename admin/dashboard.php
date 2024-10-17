<?php if (isset($_GET['a_status'])) {
  $update_status = dbQuery("UPDATE tbl_landlord_status SET admin_status = '1' WHERE `id`='{$_GET['a_status']}'");

  if ($update_status) {
      $msg = "
     <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                You have successfully updated message status
      </div>";
            goToPage("dashbord");
    } else {
      $msg = "
     <div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
               Could not update read status.Please try again or contact the administrator
      </div>";
                    }
  } ?> <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>New Orders</h4>
              <?php  /*Querying total of orders*/
               $ORDERS = dbQuery("SELECT COUNT(*)  AS 'myorders' FROM tbl_orders"); 
              while($orders_row =  dbFetchAssoc($ORDERS)){$countORDERS = $orders_row['myorders'];} ?>
                <span class="badge bg-warning" style="font-size: 20px; border-radius: 90px;">
                <?php echo $countORDERS; ?></span>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              
              <div class="inner">
                <h4>Apartments</h4>

               <?php 
               /*Querying total shops for sale*/
               $AS = dbQuery("SELECT COUNT(*)  AS 'sells_A' FROM tbl_apartment_for_sale"); 
              while($A_sales =  dbFetchAssoc($AS)){$countAS = $A_sales['sells_A'];} 
               /*Querying shops for rent*/
               $AR = dbQuery("SELECT COUNT(*)  AS 'A_rent' FROM tbl_apartment_rentals"); 
              while($apartment_rentals =  dbFetchAssoc($AR)){$countAR = $apartment_rentals['A_rent'];} ?>
                <span class="badge bg-warning" style="font-size: 20px; border-radius: 90px;"><?php echo $countAS; ?></span> for sale &nbsp;
               <span class="badge bg-warning" style="font-size: 20px; border-radius: 90px;"><?php echo $countAR; ?></span> for rent
              </div>
              <div class="icon">
                <i class="fas fa-building"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
               <?php 
               $CONDOS = dbQuery("SELECT COUNT(*)  AS 'condominiums' FROM tbl_condominiums"); 
              while($condos =  dbFetchAssoc($CONDOS)){$countCONDOS = $condos['condominiums'];} ?>
              <div class="inner">
                <h4>  Condominiums</h4>
                <span class="badge bg-primary" style="font-size: 20px; border-radius: 90px;"><?php echo $countCONDOS; ?></span> 
              </div>
              <div class="icon">
                <i class="fas fa-university"></i>
              </div>
              <a href="<?php _link(); ?>condominiums_for_sale" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
               <?php 
               /*Querying total shops for sale*/
               $HS = dbQuery("SELECT COUNT(*)  AS 'sellhomes' FROM tbl_home_for_sale"); 
              while($homesales =  dbFetchAssoc($HS)){$countHS = $homesales['sellhomes'];} 
               /*Querying shops for rent*/
               $HR = dbQuery("SELECT COUNT(*)  AS 'renthomes' FROM tbl_home_rentals"); 
              while($home_rentals =  dbFetchAssoc($HR)){$countHR = $home_rentals['renthomes'];} ?>
              <div class="inner">
                <h4>Homes</h4>
                <span class="badge bg-warning" style="font-size: 20px; border-radius: 90px;"><?php echo $countHS; ?></span>for sale&nbsp;
               <span class="badge bg-warning" style="font-size: 20px; border-radius: 90px;"><?php echo $countHR; ?></span>for rent
              </div>
              <div class="icon">
                <i class="fas fa-home"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
               <?php 
               /*Querying total shops for sale*/
               $OS = dbQuery("SELECT COUNT(*)  AS 'selloffices' FROM tbl_office_for_sale"); 
              while($officesales =  dbFetchAssoc($OS)){$countOS = $officesales['selloffices'];} 
               /*Querying shops for rent*/
               $OR = dbQuery("SELECT COUNT(*)  AS 'offices_rent' FROM tbl_office_rentals"); 
              while($Office_rentals =  dbFetchAssoc($OR)){$countOR = $Office_rentals['offices_rent'];} ?>
              <div class="inner">
                <h5>Offices</h5>
                <span class="badge bg-warning" style="font-size: 20px; border-radius: 90px;"><?php echo $countOS; ?></span> for sale&nbsp;
                <span class="badge bg-warning" style="font-size: 20px; border-radius: 90px;"><?php echo $countOR; ?></span> for rent
              </div>
              <div class="icon">
                <i class="fas fa-briefcase"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <?php 
               /*Querying total shops for sale*/
               $SS = dbQuery("SELECT COUNT(*)  AS 'sellshops' FROM tbl_shop_for_sale"); 
              while($shopsales =  dbFetchAssoc($SS)){$countSS = $shopsales['sellshops'];} 
               /*Querying shops for rent*/
               $SR = dbQuery("SELECT COUNT(*)  AS 'shopsrent' FROM tbl_shop_rentals"); 
              while($Shop_rentals =  dbFetchAssoc($SR)){$countSR = $Shop_rentals['shopsrent'];} ?>
              <div class="inner">
                <h4>Shops </h4>
               <span class="badge bg-warning" style="font-size: 20px; border-radius: 90px;"><?php echo $countSS; ?></span> for sale&nbsp;
                <span class="badge bg-warning" style="font-size: 20px; border-radius: 90px;"><?php echo $countSR; ?></span> for rent</h4>
              </div>
              <div class="icon">
                <i class="fas fa-market"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
               <div class="inner">
                <?php  /*Querying total of orders*/
               $LAND = dbQuery("SELECT COUNT(*)  AS 'lands' FROM tbl_land_for_sale"); 
              while($plots =  dbFetchAssoc($LAND)){$countLAND = $plots['lands'];} ?>
                <h4>Land for sale</h4>

                <span class="badge bg-primary" style="font-size: 20px; border-radius: 90px;"><?php echo $countLAND; ?></span> Plots
              </div>
              <div class="icon">
                <i class="fas fa-land"></i>
              </div>
              <a href="<?php _link(); ?>land_for_sale" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php  /*Querying total of orders*/
               $FEEDBACK = dbQuery("SELECT COUNT(*)  AS 'msgs' FROM tbl_feedback"); 
              while($messages =  dbFetchAssoc($FEEDBACK)){$countFEEDBACK = $messages['msgs'];} ?>
                <h4>Feedback</h4>
                <span class="badge bg-warning" style="font-size: 20px; border-radius: 90px;"><?php echo $countFEEDBACK; ?></span> new messages
              </div>
              <div class="icon">
                <i class="fas fa-comments"></i>
              </div>
              <a href="<?php _link(); ?>feedback" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- /. new orders-->
          <section class="col-lg-12 connectedSortable">
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  New Updates from Landlords
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
         $res =  dbQuery("SELECT * FROM tbl_landlord_status WHERE admin_status ='0' LIMIT 4");
              $x = 1;
               $count = dbNumRows($res);
               if($count > 0) {
                  while($row=dbFetchAssoc($res)){ 
                    $landlord_id =  $row['landlord_id'];
                    $adminstatus =  $row['admin_status']; ?>
                <tr> 
                    <td><?php echo $x++; ?></td>
                    <td><?php echo $row['landlord_id']; ?></td>
                    <td><?php echo $row['house_status']; ?></td>
                    <td><?php echo $row['date_added']; ?></td>
                    <td>
                    <?php if ($adminstatus !== '1') { ?>
                     <button class="btn btn-success"><a href="index.php?page=dashbord&a_status=<?php echo $row['id']; ?>" style="color: white;"><i class="fa fa-pencil"></i>Mark as read</a></button>
                   <?php } ?>
                    
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
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-primary float-right"><i class="fas fa-eye"></i> 
                  <a href="<?php _link(); ?>landlord_house_status" style="color: white;"> See All</a></button>
              </div>
            </div>
            <!-- /.card -->
          </section>
        
          <section class="col-lg-12 connectedSortable">
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Pending Feedback
                </h3>
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
                  </tr>
                  </thead>
                  <tbody>

                 <?php
         $res =  dbQuery("SELECT * FROM tbl_feedback WHERE reply = '' ORDER BY date_sent LIMIT 4");
              $x = 1;
               $count = dbNumRows($res);
               if($count > 0) {
                  while($row=dbFetchAssoc($res)){ ?> 
                <tr> 
                    <td><?php echo $x++; ?></td>
                    <td><?php echo $row['message_id']; ?></td>
                    <td><?php echo $row['sent_by']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['date_sent']; ?></td>
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
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-primary float-right"><i class="fas fa-eye"></i> 
                  <a href="<?php _link(); ?>feedback" style="color: white;"> See All</a></button>

              </div>
            </div>
            <!-- /.card -->
          </section>
          
          <!-- /.Left col -->
        </div>
      </div>
          
    <!-- /.content -->