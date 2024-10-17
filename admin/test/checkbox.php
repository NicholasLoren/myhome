<?php 
 include '../dbconnect.php';
if(ISSET($_POST['save'])){
     if (isset($_POST['gym']) !='') {
        echo "<p>You have selected :".$_POST['gym']."</p>";
        $gym = $_POST['gym'];
     }else{   $gym = '0';}
      if (isset($_POST['washer']) !='') {
        echo "<p>You have selected :".$_POST['washer']." for washer "."</p>";
        $washer = $_POST['washer'];
     }else{ $washer = '0';
}
                    mysqli_query($conn, "INSERT INTO tbl_home_features(`gym`,`washer`) VALUES('$gym','$washer')") or die(mysqli_error());
                    echo "<script>alert('Successful')</script>";
     }?>
    <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-12 well">
        <h3 class="text-primary">Radio buttons</h3>
        <hr style="border-top:1px dotted #ccc;"/>
      <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gym<span class="text-danger">*</span></label>
                                <input class="form-control" type="checkbox" name="gym" value="1">
                            </div>
                        </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Washer<span class="text-danger">*</span></label>
                                <input class="form-control" type="checkbox" name="washer" value="1">
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
                    </div>
                </div>
            </form>
        <br /><br />
     
    </div>
</body>
</html>

<?php
$apartment_code = $_GET['Id'];

if (isset($_POST['submit'])) { 
  //add refrigerator
  if (!isset($_POST['refrigerator'])) { //echo "<p>You have selected refrigerator</p>";
        $refrigerator = $_POST['refrigerator'];
     }else{   $refrigerator = '0';}
  //add gym
  if (!isset($_POST['gym']) !='') { //echo "<p>You have selected Gym</p>";
        $gym = $_POST['gym'];
     }else{   $gym = '0';}
  //add 
  if (!isset($_POST['washer']) !='') { //echo "<p>You have selected washer</p>";
        $washer = $_POST['washer'];
     }else{   $washer = '0';}
  //add barbeque
  if (!isset($_POST['barbeque']) !='') { //echo "<p>You have selected barbeque</p>";
        $barbeque = $_POST['barbeque'];
     }else{   $barbeque = '0';}
  //add hangers
  if (!isset($_POST['hangers']) !='') { //echo "<p>You have selected hangers</p>";
        $hangers = $_POST['hangers'];
     }else{   $hangers = '0';}
  //add microwave
  if (!isset($_POST['microwave']) !='') { //echo "<p>You have selected microwave</p>";
        $microwave = $_POST['microwave'];
     }else{   $microwave = '0';}
  //add sauna
  if (!isset($_POST['sauna']) !='') { //echo "<p>You have selected sauna</p>";
        $sauna = $_POST['sauna'];
     }else{   $sauna = '0';}
  //add dryer
  if (!isset($_POST['dryer']) !='') { //echo "<p>You have selected dryer</p>";
        $dryer = $_POST['dryer'];
     }else{   $dryer = '0';}
  //add laundry
  if (!isset($_POST['laundry']) !='') { //echo "<p>You have selected laundry</p>";
        $laundry = $_POST['laundry'];
     }else{   $laundry = '0';}
  //add shower
  if (!isset($_POST['shower']) !='') { //echo "<p>You have selected shower</p>";
        $shower = $_POST['shower'];
     }else{   $shower = '0';}
  // add internet
  if (!isset($_POST['internet']) !='') { //echo "<p>You have selected internet</p>";
        $internet = $_POST['internet'];
     }else{ $internet = '0';}
  //update features table
  dbQuery("UPDATE tbl_rental_apartment_features SET `refrigerator`='$refrigerator', `gym`='$gym', `washer`='$washer', `barbeque`='$barbeque', `hangers`='$hangers', `microwave`='$microwave', `sauna`='$sauna', `dryer`='$dryer', `laundry`='$laundry', `shower`='$shower', `internet`='$internet' WHERE apartment_code = '$apartment_code' ");

    echo "<script>alert('Successfully added apartment features')</script>";
    goToPage("add_rental_apartment_features&Id=$apartment_code");

}
?>