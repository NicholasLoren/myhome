<?php

ob_start();

require_once 'library/config.php';
require_once 'library/functions.php';

checkUser();

$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';

switch ($page) {

/*<!--contents on the dashboard section-->*/
    
    case 'dashboard':
        $content = 'dashboard.php';
        $pageTitle = 'MyHome Real Estate';
        break;  

/*<!--files section-->*/
    
    case 'rental_apartment_files':
        $content = 'rental_apartment_files.php';
        $pageTitle = 'MyHome Real Estate';
        break;  

    case 'rental_home_files':
        $content = 'rental_home_files.php';
        $pageTitle = 'MyHome Real Estate';
        break;  

    case 'rental_office_files':
        $content = 'rental_office_files.php';
        $pageTitle = 'MyHome Real Estate';
        break;  
    
    case 'rental_shop_files':
        $content = 'rental_shop_files.php';
        $pageTitle = 'MyHome Real Estate';
        break;  
    case 'apartment_forsale_files':
        $content = 'apartment_forsale_files.php';
        $pageTitle = 'MyHome Real Estate';
        break;  

    case 'home_forsale_files':
        $content = 'home_forsale_files.php';
        $pageTitle = 'MyHome Real Estate';
        break;  

    case 'office_forsale_files':
        $content = 'office_forsale_files.php';
        $pageTitle = 'MyHome Real Estate';
        break;  

    case 'shop_forsale_files':
        $content = 'shop_forsale_files.php';
        $pageTitle = 'MyHome Real Estate';
        break; 

    case 'condo_files':
        $content = 'condo_files.php';
        $pageTitle = 'MyHome Real Estate';
        break;  

    case 'land_files':
        $content = 'land_files.php';
        $pageTitle = 'MyHome Real Estate';
        break;  


/*<!--features section-->*/
    
    case 'add_rental_apartment_features':
        $content = 'add_rental_apartment_features.php';
        $pageTitle = 'MyHome Real Estate';
        break;  

    case 'add_apartment_forsale_features':
        $content = 'add_apartment_forsale_features.php';
        $pageTitle = 'MyHome Real Estate';
        break;  

    case 'add_rental_home_features':
        $content = 'add_rental_home_features.php';
        $pageTitle = 'MyHome Real Estate';
        break;  
    case 'add_home_forsale_features':
        $content = 'add_home_forsale_features.php';
        $pageTitle = 'MyHome Real Estate';
        break;  

    case 'add_rental_office_features':
        $content = 'add_rental_office_features.php';
        $pageTitle = 'MyHome Real Estate';
        break;  
    case 'add_office_forsale_features':
        $content = 'add_office_forsale_features.php';
        $pageTitle = 'MyHome Real Estate';
        break;  

    case 'add_rental_shop_features':
        $content = 'add_rental_shop_features.php';
        $pageTitle = 'MyHome Real Estate';
        break;  
    case 'add_shop_forsale_features':
        $content = 'add_shop_forsale_features.php';
        $pageTitle = 'MyHome Real Estate';
        break;  

    case 'add_condominium_features':
        $content = 'add_condominium_features.php';
        $pageTitle = 'MyHome Real Estate';
        break;  


/*apartment rentals section*/
    case 'addApartment_rentals':
        $content = 'addApartment_rentals.php';
         $pageTitle = 'Add Rental Apartment';
        break;

    case 'listApartment_rentals':
        $content = 'listApartment_rentals.php';
        $pageTitle = 'list Rental Apartments';
        break;

    case 'edit_apartment_rentals':
        $content = 'edit_apartment_rentals.php';
         $pageTitle = 'Edit Rental Apartment';
        break;

/*Home rentals section*/
    case 'addHome_rentals':
        $content = 'addHome_rentals.php';
         $pageTitle = 'Add Rental Home';
        break;

    case 'listHome_rentals':
        $content = 'listHome_rentals.php';
        $pageTitle = 'list Rental Homes';
        break;

    case 'edit_home_rentals':
        $content = 'edit_home_rentals.php';
         $pageTitle = 'Edit Rental Home';
        break;

/*office rentals section*/
    case 'addOffice_rentals':
        $content = 'addOffice_rentals.php';
         $pageTitle = 'Add Rental Office';
        break;

    case 'listOffice_rentals':
        $content = 'listOffice_rentals.php';
        $pageTitle = 'list Rental Offices';
        break;

    case 'edit_office_rentals':
        $content = 'edit_office_rentals.php';
         $pageTitle = 'Edit Rental Offices';
        break;

/*shop rentals section*/
    case 'addShop_rentals':
        $content = 'addShop_rentals.php';
         $pageTitle = 'Add Rental Shop';
        break;

    case 'listShop_rentals':
        $content = 'listShop_rentals.php';
        $pageTitle = 'list Rental Shops';
        break;

    case 'edit_shop_rentals':
        $content = 'edit_shop_rentals.php';
         $pageTitle = 'Edit Rental Shops';
        break;

/*apartment for sale section*/
    case 'addApartment_for_sale':
        $content = 'addApartment_for_sale.php';
         $pageTitle = 'Add Apartment for sale';
        break;

    case 'apartments_for_sale':
        $content = 'apartments_for_sale.php';
        $pageTitle = 'list Apartments for sale';
        break;

    case 'edit_apartment_for_sale':
        $content = 'edit_apartment_for_sale.php';
         $pageTitle = 'Edit Apartment for sale';
        break;

/*Home for sale section*/
    case 'addHome_for_sale':
        $content = 'addHome_for_sale.php';
         $pageTitle = 'Add Home for sale';
        break;

    case 'homes_for_sale':
        $content = 'homes_for_sale.php';
        $pageTitle = 'list Homes for sale';
        break;

    case 'edit_home_for_sale':
        $content = 'edit_home_for_sale.php';
         $pageTitle = 'Edit Home for sale';
        break;

/*office for sale section*/
    case 'addOffice_for_sale':
        $content = 'addOffice_for_sale.php';
         $pageTitle = 'Add Office for sale';
        break;

    case 'offices_for_sale':
        $content = 'offices_for_sale.php';
        $pageTitle = 'list Offices for sale';
        break;

    case 'edit_office_for_sale':
        $content = 'edit_office_for_sale.php';
         $pageTitle = 'Edit Office for sale';
        break;

/*shop for sale section*/
    case 'addShop_for_sale':
        $content = 'addShop_for_sale.php';
         $pageTitle = 'Add Shop for sale';
        break;

    case 'shops_for_sale':
        $content = 'shops_for_sale.php';
        $pageTitle = 'list Shops for sale';
        break;

    case 'edit_shop_for_sale':
        $content = 'edit_shop_for_sale.php';
         $pageTitle = 'Edit Shops for sale';
        break;

/*condominiums for sale section*/
    case 'add_condominium':
        $content = 'add_condominium.php';
         $pageTitle = 'Add Condominium for sale';
        break;

    case 'condominiums_for_sale':
        $content = 'condominiums_for_sale.php';
        $pageTitle = 'list Condominiums for sale';
        break;

    case 'edit_condominium':
        $content = 'edit_condominium.php';
         $pageTitle = 'Edit condominium for sale';
        break;

/*condominiums for sale section*/
    case 'add_land':
        $content = 'add_land.php';
         $pageTitle = 'Add land for sale';
        break;

    case 'land_for_sale':
        $content = 'land_for_sale.php';
        $pageTitle = 'list land for sale';
        break;

    case 'edit_land':
        $content = 'edit_land.php';
         $pageTitle = 'Edit land for sale';
        break;

    case 'land_inquiry':
        $content = 'land_inquiry.php';
         $pageTitle = 'land for sale Inquiries';
        break;

    /*feedback section*/
    case 'feedback':
        $content = 'feedback.php';
         $pageTitle = 'User feedback';
        break;

    /*admin settings section*/
    case 'admin':
        $content = 'admin.php';
         $pageTitle = 'Admin settings page';
        break;

    case 'about':
        $content = 'about.php';
         $pageTitle = 'About page';
        break;

    case 'users':
        $content = 'users.php';
         $pageTitle = 'Users page';
        break;
    case 'addUser':
        $content = 'addUser.php';
         $pageTitle = 'Users page';
        break;

    case 'edit_user':
        $content = 'edit_user.php';
         $pageTitle = 'Users page';
        break;

    case 'update_userpic':
        $content = 'update_userpic.php';
         $pageTitle = 'Users page';
        break;

 
/*email section*/
    case 'mailbox':
        $content = 'mailbox.php';
         $pageTitle = 'Emails';
        break;

    case 'compose':
        $content = 'compose.php';
         $pageTitle = 'Emails';
        break;
    case 'read-mail':
        $content = 'read-mail.php';
         $pageTitle = 'Emails';
        break;

 


/*landlords section*/
    case 'landlord_house_status':
        $content = 'landlord_house_status.php';
         $pageTitle = 'Landlord House status';
        break;

    case 'addLandlord':
        $content = 'addLandlord.php';
         $pageTitle = 'Landlords';
        break;

    case 'listLandlords':
        $content = 'listLandlords.php';
         $pageTitle = 'Landlords';
        break;

    case 'edit_landlord':
        $content = 'edit_landlord.php';
         $pageTitle = 'Edit Landlords';
        break;

    case 'landlord_details':
        $content = 'landlord_details.php';
         $pageTitle = 'View Landlord details';
        break;


/*<!--contents on the admin dashboard section as a default-->*/

    default :
        $content = 'dashboard.php';
        $pageTitle = 'MyHome Admin';
}

$scripts = array();

require_once 'theme.php';

ob_flush();
?>