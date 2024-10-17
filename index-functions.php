<?php
include 'admin/dbconnect.php';

//apartment rentals 
$res =  mysqli_query($conn,"SELECT * FROM tbl_apartment_rentals  WHERE front_view !='' LIMIT 1");
    $count = mysqli_num_rows($res);
    if($count > 0) {
        while($row=mysqli_fetch_assoc($res)){ 
            $RA_apartment_id =  $row['apartment_id'];
            $RA_front_view =  $row['front_view'];
            $RA_apartment_name =  $row['apartment_name']; 
            $RA_location =  $row['location'];
            $RA_bedrooms =  $row['bedrooms'];
            $RA_bathrooms =  $row['bathrooms']; 
            $RA_living_area =  $row['living_area']; 
            $RA_price =  $row['price']; 
            $RA_period =  $row['period'];  
            $RA_parking =  $row['parking'];  
        }
    }

//apartment for sale 
$res =  mysqli_query($conn,"SELECT * FROM tbl_apartment_for_sale  WHERE front_view !='' LIMIT 1");
    $count = mysqli_num_rows($res);
    if($count > 0) {
        while($row2=mysqli_fetch_assoc($res)){ 
            $AS_apartment_id =  $row2['apartment_id'];
            $AS_front_view =  $row2['front_view'];
            $AS_apartment_name =  $row2['apartment_name']; 
            $AS_location =  $row2['location'];
            $AS_bedrooms =  $row2['bedrooms'];
            $AS_bathrooms =  $row2['bathrooms']; 
            $AS_living_area =  $row2['living_area']; 
            $AS_price =  $row2['price']; 
            $AS_parking =  $row2['parking'];  
        }
    }

//Home for sale 
$home_sale =  mysqli_query($conn,"SELECT * FROM tbl_home_for_sale  WHERE front_view !='' LIMIT 1");
    $count = mysqli_num_rows($home_sale);
    if($count > 0) {
        while($row3=mysqli_fetch_assoc($home_sale)){ 
            $HS_home_id =  $row3['home_id'];
            $HS_front_view =  $row3['front_view'];
            $HS_home_name =  $row3['home_name']; 
            $HS_location =  $row3['location'];
            $HS_bedrooms =  $row3['bedrooms'];
            $HS_bathrooms =  $row3['bathrooms']; 
            $HS_living_area =  $row3['living_area']; 
            $HS_price =  $row3['price']; 
            $HS_parking =  $row3['parking'];  
        }
    }

 //Home for RENT 
$home_rental =  mysqli_query($conn,"SELECT * FROM tbl_home_rentals  WHERE front_view !='' LIMIT 1");
    $count = mysqli_num_rows($home_rental);
    if($count > 0) {
        while($row4=mysqli_fetch_assoc($home_rental)){ 
            $HR_home_id =  $row4['home_id'];
            $HR_front_view =  $row4['front_view'];
            $HR_home_name =  $row4['home_name']; 
            $HR_location =  $row4['location'];
            $HR_bedrooms =  $row4['bedrooms'];
            $HR_bathrooms =  $row4['bathrooms']; 
            $HR_living_area =  $row4['living_area']; 
            $HR_price =  $row4['price']; 
            $HR_period =  $row4['period']; 
            $HR_parking =  $row4['parking'];  
        }
    }

//Office for sale 
$office_sale =  mysqli_query($conn,"SELECT * FROM tbl_office_for_sale  WHERE front_view !='' LIMIT 1");
    $count = mysqli_num_rows($office_sale);
    if($count > 0) {
        while($row5=mysqli_fetch_assoc($office_sale)){ 
            $OS_office_id =  $row5['office_id'];
            $OS_front_view =  $row5['front_view'];
            $OS_office_name =  $row5['office_name']; 
            $OS_total_rooms =  $row5['total_rooms']; 
            $OS_waiting_room =  $row5['waiting_room']; 
            $OS_location =  $row5['location'];
            $OS_price =  $row5['price']; 
            $OS_outdoor =  $row5['outdoor'];  
        }
    }
//Office for rent 
$office_rental = mysqli_query($conn,"SELECT * FROM tbl_office_rentals  WHERE front_view !='' LIMIT 1");
    $count = mysqli_num_rows($office_rental);
    if($count > 0) {
        while($row6=mysqli_fetch_assoc($office_rental)){ 
            $OR_office_id =  $row6['office_id'];
            $OR_front_view =  $row6['front_view'];
            $OR_office_name =  $row6['office_name']; 
            $OR_total_rooms =  $row6['total_rooms']; 
            $OR_waiting_room =  $row6['waiting_room']; 
            $OR_location =  $row6['location'];
            $OR_price =  $row6['price']; 
            $OR_period =  $row6['period']; 
            $OR_outdoor =  $row6['outdoor'];  
        }
    }

//Shop for sale 
$shop_sale = mysqli_query($conn,"SELECT * FROM tbl_shop_for_sale  WHERE front_view !='' LIMIT 1");
    $count = mysqli_num_rows($shop_sale);
    if($count > 0) {
        while($row7=mysqli_fetch_assoc($shop_sale)){ 
            $SS_shop_id =  $row7['shop_id'];
            $SS_front_view =  $row7['front_view'];
            $SS_shop_name =  $row7['shop_name']; 
            $SS_total_rooms =  $row7['total_rooms']; 
            $SS_store_room =  $row7['store_room']; 
            $SS_location =  $row7['location'];
            $SS_price =  $row7['price']; 
            $SS_measurement =  $row7['measurement']; 
            $SS_outdoor =  $row7['outdoor'];  
        }
    }

//Shop for rent 
$shop_rental = mysqli_query($conn,"SELECT * FROM tbl_shop_rentals  WHERE front_view !='' LIMIT 1");
    $count = mysqli_num_rows($shop_rental);
    if($count > 0) {
        while($row8=mysqli_fetch_assoc($shop_rental)){ 
            $SR_shop_id =  $row8['shop_id'];
            $SR_front_view =  $row8['front_view'];
            $SR_shop_name =  $row8['shop_name']; 
            $SR_total_rooms =  $row8['total_rooms']; 
            $SR_store_room =  $row8['store_room']; 
            $SR_location =  $row8['location'];
            $SR_price =  $row8['price']; 
            $SR_period =  $row8['price']; 
            $SR_measurement =  $row8['measurement']; 
            $SR_outdoor =  $row8['outdoor'];  
        }
    }
//Condominuim for sale 
$Condo =  mysqli_query($conn,"SELECT * FROM tbl_condominiums  WHERE front_view !='' LIMIT 1");
    $count = mysqli_num_rows($Condo);
    if($count > 0) {
        while($row2=mysqli_fetch_assoc($Condo)){ 
            $CS_condo_id =  $row2['condo_id'];
            $CS_front_view =  $row2['front_view'];
            $CS_condo_name =  $row2['condo_name']; 
            $CS_location =  $row2['location'];
            $CS_bedrooms =  $row2['bedrooms'];
            $CS_bathrooms =  $row2['bathrooms']; 
            $CS_living_area =  $row2['living_area']; 
            $CS_price =  $row2['price']; 
            $CS_parking =  $row2['parking'];  
        }
    }

?>