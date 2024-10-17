<?php include 'admin/dbconnect.php'; 
$land_id=$_GET['id'];
//sending order on office
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['comment'];
    //order code
      $result = @ mysqli_query($conn,"SHOW TABLE STATUS LIKE  'tbl_land_inquiries'");
      $data = @mysqli_fetch_assoc($result);
      $next = $data['Auto_increment'];
      $prefix = "MYHOME/L/I/";
      $order_code = sprintf("%s%03s",$prefix,$next);

    $msg = mysqli_query($conn,"INSERT INTO tbl_land_inquiries( `inquiry_code`, `land_id`, `inquiry_by`, `sender_phone`, `inquiry`) VALUES('$order_code','$land_id','$name','$phone','$message') ");
    echo "<script>alert('You Inquiry has been sent. We will call you soon. Thanks...')</script>";
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <title>MY HOME REAL ESTATE</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="css/vendors.min.css"/>
        <link rel="stylesheet" href="css/icon.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/responsive.css"/>
        <link rel="stylesheet" href="demos/real-estate/real-estate.css" />
    </head>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light bg-white border-bottom border-color-extra-medium-gray header-reverse" data-header-hover="light">
                <div class="container-fluid"> 
                    <div class="col-auto">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/demo-real-estate-logo-black.png" data-at2x="images/demo-real-estate-logo-black@2x.png" alt="" class="default-logo">
                            <img src="images/demo-real-estate-logo-black.png" data-at2x="images/demo-real-estate-logo-black@2x.png" alt="" class="alt-logo">
                            <img src="images/demo-real-estate-logo-black.png" data-at2x="images/demo-real-estate-logo-black@2x.png" alt="" class="mobile-logo">
                        </a>
                    </div>
                    <div class="col-auto menu-order left-nav ps-60px lg-ps-20px">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
<ul class="navbar-nav alt-font">
<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li> 
<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
<li class="nav-item dropdown submenu">
<a href="rentals.php" class="nav-link">Rent</a>
<i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
<div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink1"> 
    <div class="d-lg-flex mega-menu m-auto ps-5 pe-5 md-ps-0 md-pe-0 md-pt-15px">
        <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 w-100 mx-0 align-items-center justify-content-center">
            <div class="col md-mb-30px">
                <a href="apartment_rentals.php" class="opacity-10 text-center justify-content-center flex-column d-flex">
                    <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                        <img src="images/demo-real-estate-icon-apartment.svg" class="w-50px" alt="">
                    </span>
                    <span class="alt-font fw-600 fs-17 text-dark-gray">Rent Apartment</span>
                </a>
            </div>
            <div class="col md-mb-30px">
                <a href="home_rentals.php" class="opacity-10 text-center justify-content-center flex-column d-flex">
                    <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                        <img src="images/demo-real-estate-icon-home.svg" class="w-50px" alt="">
                    </span>
                    <span class="alt-font fw-600 fs-17 text-dark-gray">Rent Home</span>
                </a>
            </div>
            <div class="col xs-mb-30px">
                <a href="office_rentals.php" class="opacity-10 text-center justify-content-center flex-column d-flex">
                    <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                        <img src="images/demo-real-estate-icon-office.svg" class="w-50px" alt="">
                    </span>
                    <span class="alt-font fw-600 fs-17 text-dark-gray">Rent Office</span>
                </a>
            </div>
            <div class="col">
                <a href="shop_rentals.php" class="opacity-10 text-center justify-content-center flex-column d-flex">
                    <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                        <img src="images/demo-real-estate-icon-shop.svg" class="w-50px" alt="">
                    </span>
                    <span class="alt-font fw-600 fs-17 text-dark-gray">Rent Shop</span>
                </a>
            </div>
        </div>
    </div> 
</div>
</li>
<li class="nav-item dropdown submenu">
<a href="real-estate-sell.php" class="nav-link">Buy</a>
<i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
<div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink2"> 
    <div class="d-lg-flex mega-menu m-auto ps-5 pe-5 md-ps-0 md-pe-0 md-pt-15px">
        <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 w-100 mx-0 align-items-center justify-content-center">
            <div class="col md-mb-30px">
                <a href="apartments-for-sale.php" class="opacity-10 text-center justify-content-center flex-column d-flex">
                    <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                        <img src="images/demo-real-estate-icon-apartment.svg" class="w-50px" alt="">
                    </span>
                    <span class="alt-font fw-600 fs-17 text-dark-gray">Buy Apartment</span>
                </a>
            </div>
            <div class="col md-mb-30px">
                <a href="condominium-for-sale.php" class="opacity-10 text-center justify-content-center flex-column d-flex">
                <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                    <img src="images/demo-real-estate-icon-condominium.svg" class="w-50px" alt="">
                </span>
                <span class="alt-font fw-600 fs-17 text-dark-gray">Buy Condominium</span>
                </a>
            </div>
            <div class="col md-mb-30px">
                <a href="home-for-sale.php" class="opacity-10 text-center justify-content-center flex-column d-flex">
                <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                <img src="images/demo-real-estate-icon-home.svg" class="w-50px" alt="">
                </span>
                <span class="alt-font fw-600 fs-17 text-dark-gray">Buy Home</span>
                </a>
            </div>
            <div class="col xs-mb-30px">
                <a href="office-for-sale.php" class="opacity-10 text-center justify-content-center flex-column d-flex">
                <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                <img src="images/demo-real-estate-icon-office.svg" class="w-50px" alt="">
                </span>
                <span class="alt-font fw-600 fs-17 text-dark-gray">Buy Office</span>
                </a>
            </div>
            <div class="col">
                <a href="shop-for-sale.php" class="opacity-10 text-center justify-content-center flex-column d-flex">
                <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                <img src="images/demo-real-estate-icon-shop.svg" class="w-50px" alt="">
                </span>
                <span class="alt-font fw-600 fs-17 text-dark-gray">Buy Shop</span>
                </a>
            </div>
        </div>
    </div> 
</div>
            </li>
            
            <li class="nav-item"><a href="land-for-sale.php" class="nav-link">Land for sale</a></li>
<!--             <li class="nav-item"><a href="real-estate-blog.php" class="nav-link">Blog</a></li>
 -->            <li class="nav-item"><a href="real-estate-contact.php" class="nav-link">Contact</a></li>
        </ul>
    </div>
</div>
<div class="col-auto ms-auto ps-lg-0 d-none d-sm-flex"> 
    <div class="d-none d-xl-flex me-25px">
        <div class="d-flex align-items-center widget-text fw-600 alt-font"><a href="tel:1234567890" class="d-inline-block"><span class="d-inline-block align-middle me-10px bg-base-color-transparent h-45px w-45px text-center rounded-circle fs-16 lh-46 text-base-color"><i class="feather icon-feather-phone-outgoing"></i></span><span class="d-none d-xxl-inline-block">+256 704 771596</span></a></div>
    </div>
    <div class="header-icon">
        <div class="header-button">
            <a href="real-estate-sell.php" class="btn btn-base-color btn-small btn-round-edge btn-hover-animation-switch">
            <span> 
                <span class="btn-text">Buy property</span> 
                <span class="btn-icon"><i class="feather icon-feather-arrow-right icon-very-small"></i></span>
                <span class="btn-icon"><i class="feather icon-feather-arrow-right icon-very-small"></i></span>
            </span>
            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
        <?php $res =  mysqli_query($conn,"SELECT * FROM tbl_land_for_sale WHERE land_id = '$land_id'");
            $count = mysqli_num_rows($res);
            if($count > 0) {
                while($row=mysqli_fetch_assoc($res)){ ?>
        <!-- start page title -->
        <section class="cover-background page-title-big-typography ipad-top-space-margin" style="background-image: url('admin/<?php echo $row['photo1']; ?>'); background-repeat: no-repeat;">
            <div class="container">
                <font color="white"><b> 
                <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
                    <div class="col-xl-7 col-lg-8 position-relative page-title-extra-small md-mb-30px md-mt-auto" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font fw-600 text-white mb-15px ls-minus-1px"><?php echo $row['plot_name']; ?></h3>
                        <h1 class="mb-0 d-flex"><i class="feather icon-feather-map-pin icon-extra-medium text-base-color me-5px"></i><?php echo $row['location']; ?></h1>
                    </div>
                    <div class="col-lg-3 offset-xl-2 offset-lg-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                        <h4 class="text-white fw-700 alt-font mb-5px"><?php echo $row['price']; ?></h4>
                    </div>
                </div>
            </b></font>
            </div>
        </section><br>
        <!-- end page title -->
        <!-- start section -->
        <section class="p-0 overflow-hidden">
            <div class="container-fluid p-0"> 
                <div class="row row-cols-1 justify-content-center">
                    <!-- start content carousal item -->
                    <div class="col">
                        <div class="swiper magic-cursor slider-four-slide swiper-dark-pagination swiper-pagination-style-3" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 20, "loop": true, "pagination": { "el": ".slider-four-slide-pagination", "clickable": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start content carousal item -->
                                <div class="swiper-slide">
                                    <img src="admin/<?php echo $row['photo1']; ?>" alt="" class="w-100"  style="max-width: 500px; max-height: 316px;"/>
                                </div>
                                 <!-- start content carousal item -->
                                <div class="swiper-slide">
                                    <img src="admin/<?php echo $row['photo2']; ?>" alt="" class="w-100"  style="max-width: 500px; max-height: 316px;"/>
                                </div>
                                <!-- end content carousal item -->
                                <!-- start content carousal item -->
                                <div class="swiper-slide">
                                    <img src="admin/<?php echo $row['photo3']; ?>" alt="" class="w-100"  style="max-width: 500px; max-height: 316px;"/>
                                </div>
                                <!-- end content carousal item --> 
                                
                            </div>
                            <!-- start slider navigation -->
                            <!-- <div class="slider-one-slide-prev-1 icon-very-small bg-white h-40px w-40px swiper-button-prev slider-navigation-style-01"><i class="feather icon-feather-arrow-left fs-20 text-light-gray"></i></div>
                            <div class="slider-one-slide-next-1 icon-very-small bg-white h-40px w-40px swiper-button-next slider-navigation-style-01"><i class="feather icon-feather-arrow-right fs-20 text-light-gray"></i></div> -->
                            <!-- end slider navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section --> 
        <!-- start section --> 
        <section class="pt-30px pb-30px border-bottom border-color-extra-medium-gray">
            <div class="container"> 
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                    <div class="col text-center border-end xs-border-end-0 border-color-extra-medium-gray alt-font md-mb-15px">
                        <span class="fs-19 text-dark-gray fw-600">Land size:</span> <?php echo $row['measurements']; ?>
                    </div>
                    <div class="col text-center border-end md-border-end-0 border-color-extra-medium-gray alt-font md-mb-15px">
                        <span class="fs-19 text-dark-gray fw-600">Land Type:</span> <?php echo $row['land_type']; ?>
                    </div>
                    <div class="col text-center border-end xs-border-end-0 border-color-extra-medium-gray alt-font sm-mb-15px">
                        <span class="fs-19 text-dark-gray fw-600">Price:</span> <?php echo $row['price']; ?>
                    </div>
                    <div class="col text-center alt-font">
                        <span class="fs-19 text-dark-gray fw-600">Contact :</span> <?php echo $row['phone']; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->  
        <section class="position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 md-mb-50px">
                        <div class="row mb-15px">
                            <div class="col-12">
                                <span class="text-dark-gray fs-24 fw-600 alt-font mb-15px d-block">Land description</span>
                                <p><?php echo $row['description']; ?></p>
                            </div>
                        </div>
                        <div class="row mt-7">
                            <div class="col-12">
                                <span class="text-dark-gray fs-24 fw-600 alt-font mb-25px d-block">Specification</span>
                            </div>
                            <div class="col-xl-12">
                                <div class="row g-0 align-items-center mb-15px pb-15px border-bottom border-color-extra-medium-gray">
                                    <div class="col">
                                        <!-- start features box item -->
                                        <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                            <div class="feature-box-icon me-10px">
                                                <img src="images/demo-real-estate-property-details-08.svg" class="w-25px" alt="">
                                            </div>
                                            <div class="feature-box-content">
                                                <span class="text-dark-gray">Property ID:</span>
                                            </div>
                                        </div>
                                        <!-- end features box item -->
                                    </div>
                                    <div class="col"><?php echo $row['land_code']; ?></div>
                                </div>
                                <div class="row g-0 align-items-center mb-15px pb-15px border-bottom border-color-extra-medium-gray">
                                    <div class="col">
                                        <!-- start features box item -->
                                        <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                            <div class="feature-box-icon me-10px">
                                                <img src="images/demo-real-estate-property-details-09.svg" class="w-25px" alt="">
                                            </div>
                                            <div class="feature-box-content">
                                                <span class="text-dark-gray">Land type:</span>
                                            </div>
                                        </div>
                                        <!-- end features box item -->
                                    </div>
                                    <div class="col"><?php echo $row['land_type']; ?></div>
                                </div>
                                <div class="row g-0 align-items-center mb-15px pb-15px border-bottom border-color-extra-medium-gray">
                                    <div class="col">
                                        <!-- start features box item -->
                                        <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                            <div class="feature-box-icon me-10px">
                                                <img src="images/demo-real-estate-property-details-12.svg" class="w-25px" alt="">
                                            </div>
                                            <div class="feature-box-content">
                                                <span class="text-dark-gray">Property size:</span>
                                            </div>
                                        </div>
                                        <!-- end features box item -->
                                    </div>
                                    <div class="col"><?php echo $row['measurements']; ?></div>
                                </div>
                            </div>
                        </div> 
                        <div class="row mt-7">
                            <div class="col-12">
                                <span class="text-dark-gray fs-24 fw-600 alt-font mb-25px d-block">Location</span>
                            </div>
                            <div class="col-12"> 
                                <div id="map" class="map small-screen border-radius-6px" data-map-options='{ "lat": -37.805688, "lng": 144.962312, "style": "Dark", "marker": { "type": "HTML", "color": "#06af47" }, "popup": { "defaultOpen": true, "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block alt-font\">Crafto Real Estate</strong><p class=\"alt-font\">401 Broadway, 24th Floor, Orchard View, London, UK</p></div><div class=\"google-maps-link alt-font\"> <a aria-label=\"View larger map\" target=\"_blank\" jstcache=\"31\" href=\"https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449\" jsaction=\"mouseup:placeCard.largerMap\">VIEW LARGER MAP</a></div>" } }'></div>
                            </div>
                        </div>
                        <div class="row mt-7">
                            <div class="col-6">
                                <span class="text-dark-gray fs-24 fw-600 alt-font mb-25px d-block">Land Images</span>
                                <img src="admin/<?php echo $row['photo1']; ?>" class="border-radius-6px" alt="" style="max-width: 300px; max-height: 316px;">
                            </div>
                        </div>
                        <div class="row mt-7">
                            <div class="col-6">
                                <img src="admin/<?php echo $row['photo2']; ?>" class="border-radius-6px" alt="" style="max-width: 300px; max-height: 316px;">
                            </div>
                            <div class="col-6">
                                <img src="admin/<?php echo $row['photo3']; ?>" class="border-radius-6px" alt=""style="max-width: 300px; max-height: 316px;">
                            </div>
                        </div>
                        
                    </div>
                      <!-- end box item -->
                    
                    <!-- start sticky -->
                    <div class="col-xl-4 offset-xl-1 col-lg-5">
                        <div class="bg-base-color-light border-radius-6px position-sticky top-120px">
                            <div class="bg-base-color border-radius-6px feature-box overflow-hidden icon-with-text-style-08 ps-35px pe-35px pt-25px pb-20px xs-p-25px">
                                <!-- start features box item -->
                                <div class="feature-box-content">
                                    <span class="text-white alt-font fw-600 fs-20 ">Talk to us today about buying this land</span>
                                </div>
                                <!-- end features box item -->
                            </div>
                            <div class="ps-45px pe-45px pt-35px pb-45px xs-p-25px contact-form-style-01 mt-0">
                                <div class="mb-20px last-paragraph-no-margin">
                                    <p class="mb-0 alt-font fw-500 text-dark-gray"><i class="feather icon-feather-phone-call icon-small text-base-color me-10px"></i><span class="fw-600 w-20 sm-w-15 xs-w-20 d-inline-block">Phone:</span><a href="tel:256704771596" class="text-dark-gray text-base-color-hover">+256 704 771596</a></p>
                                    <p class="alt-font fw-500 text-dark-gray"><i class="feather icon-feather-mail icon-small text-base-color me-10px"></i><span class="fw-600 w-20 sm-w-15 xs-w-20 d-inline-block">Email:</span><a href="mailto:info@domain.com" class="text-dark-gray text-decoration-line-bottom">info@domain.com</a></p>
                                </div>
                                <!-- start contact form -->
                                <form action="" method="post">
                                    <div class="position-relative form-group mb-15px">
                                        <input type="text" name="id" value="<?php echo $row['land_code']; ?>"class="form-control border-color-white box-shadow-large required" placeholder="Land ID: <?php echo $row['land_code']; ?>" hidden />
                                    </div>
                                    <div class="position-relative form-group mb-15px">
                                        <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                        <input type="text" name="name" class="form-control border-color-white box-shadow-large required" placeholder="Your name*" />
                                    </div>
                                    <div class="position-relative form-group mb-15px">
                                        <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                                        <input type="text" name="phone" class="form-control border-color-white box-shadow-large" placeholder="Your phone" />
                                    </div>
                                    <div class="position-relative form-group form-textarea">
                                        <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                        <textarea placeholder="Your message" name="comment" class="form-control border-color-white box-shadow-large" rows="3"></textarea>
                                        <input class="btn btn-small btn-round-edge btn-base-color mt-20px" type="submit" name="submit" value="Send message">
                                    </div>
                                </form>
                                <!-- end contact form -->
                            </div>
                        </div>
                    </div>
                    <!-- end sticky -->
                </div>
            </div>
        </section>
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
        <!-- end section --> 
        <!-- start section --> 
        <section class="bg-gradient-very-light-gray">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-center"> 
                        <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Similar <span class="fw-700 text-highlight d-inline-block">properties<span class="bg-base-color h-10px bottom-5px opacity-3 separator-animation"></span></span></h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 justify-content-center"> 
                     <?php $res2 =  mysqli_query($conn,"SELECT * FROM tbl_land_for_sale LIMIT 3");
                        $count2 = mysqli_num_rows($res2);
                        if($count2 > 0) {
                        while($row2=mysqli_fetch_assoc($res2)){ 
                            $land_id =  $row2['land_id']; ?>
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="land-for-sale-details.php?id=<?php echo $row2['land_id']; ?>">
                                    <img src="admin/<?php echo $row2['photo1']; ?>" alt="" style="max-height: 260px;">
                                </a>
                                <div class="col-auto bg-green border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Buy</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="land-for-sale-details.php?id=<?php echo $row2['land_id']; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $row2['plot_name']; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $row2['location']; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <span class="d-block lh-18 fs-15">Size : <?php echo $row2['measurements']; ?></span> 
                                        </div>
                                        <div class="col">
                                            <span class="d-block lh-18 fs-15">Type : <?php echo $row2['land_type']; ?></span> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="land-for-sale-details.php?id=<?php echo $row2['land_id']; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0"><?php echo $row2['price']; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->
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
                </div> 
            </div>
        </section>
        <!-- end section --> 
        <!-- start  customer reviews section --> 
      
        <!-- end section -->
         
          <!-- start footer -->
          <footer class="footer-light bg-gradient-very-light-gray pb-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- start footer column -->
                    <div class="col-auto d-flex flex-column flex-md-row align-items-center text-center text-md-start">
                        <div class="text-dark-gray fs-28 alt-font fw-500">1000+ offices ready for <span class="fw-700 text-decoration-line-bottom">renting.</span></div>
                        <div class="bg-white border-radius-50px d-flex align-items-center p-10px ps-35px ms-20px md-ps-20px md-ms-15px box-shadow-medium sm-m-20px">
                            <a href="real-estate-contact.php" class="text-dark-gray fs-22 alt-font fw-500 me-10px overflow-hidden">Say, <span class="fw-700 w-65px text-start d-inline-block" data-fancy-text='{ "effect": "rotate", "string": ["Hello!", "Salve!", "Hallå!"] }'></span></a>
                            <span class="text-dark-gray h-45px w-45px text-center d-flex align-items-center justify-content-center border-radius-100 bg-base-color-transparent fs-20">&#128075;</span>
                        </div>
                    </div>
                    <!-- end footer column -->
                </div>
                <div class="row justify-content-center mt-5 mb-4 sm-mb-35px">
                   <!-- start footer column -->
                    <div class="col-lg-3 last-paragraph-no-margin md-mb-35px text-center text-lg-start">
                        <a href="demo-real-estate.html" class="footer-logo mb-10px d-inline-block"><img src="images/demo-real-estate-logo-black.png" data-at2x="images/demo-real-estate-logo-black@2x.png" alt=""></a>
                        <p class="w-85 lg-w-100">The best trustworthy property company you can trust.</p>
                        <div class="elements-social social-icon-style-02 mt-15px">
                            <ul class="small-icon dark">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li> 
                                <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li> 
                                <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li> 
                            </ul>
                        </div>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3 sm-mb-25px">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Company</span>
                        <ul>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="real-estate-contact.php">Contact us</a></li>
                            <li><a href="terms-of-service.php">Terms of Service</a></li>
                            <li><a href="privacy-policy.php">Privacy policy</a></li>
                            <li><a href="landlord.php">Landlord</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3 sm-mb-25px">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Renting Property</span>
                        <ul>
                            <li><a href="home_rentals.php">Rent a home</a></li>
                            <li><a href="apartment_rentals.php">Rent an Apartment</a></li>
                            <li><a href="shop_rentals.php">Rent a shop</a></li>
                            <li><a href="office_rentals.php">Rent an office</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Buying Property</span>
                        <ul>                         
                            <li><a href="home-for-sale.php">Buy a home</a></li>
                            <li><a href="apartments-for-sale.php">Buy an apartment</a></li>
                            <li><a href="shop-for-sale.php">Buy a a shop</a></li>
                            <li><a href="office-for-sale.php">Buy an office</a></li>
                            <li><a href="condominium-for-sale.php">Buy a condominium</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-10px">Say hello</span>
                        <span class="d-block lh-normal">Need support?</span>
                        <a href="mailto:info@domain.com" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block mb-20px">info@domain.com</a>
                        <span class="d-block lh-normal">Customer care</span>
                        <a href="tel:12345678910" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block">+256 704 771596</a>
                    </div>
                    <!-- end footer column -->                     
                </div>
                <!-- start footer content -->
                <div class="border-top border-color-extra-medium-gray pt-35px pb-35px text-center">

                    <span class="fs-13 w-60 lg-w-70 md-w-90 sm-w-100 d-block mx-auto lh-22"><b>Copyright &copy 2024 MyHome&nbsp;|&nbsp;Developed by <a href="https://balexinfotech.com" class="text-dark-gray text-decoration-line-bottom">BalexInfotech (U) Ltd</a>.</span>
                </div>
                <!-- end footer content -->
            </div> 
        </footer>
        <!-- end footer -->
        <!-- start subscription popup -->
        <div id="subscribe-popup" class="mfp-hide subscribe-popup">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-md-10 bg-white">
                        <div class="row position-relative box-shadow-quadruple-large">
                            <div class="col-lg-6 cover-background md-h-400px xs-h-300px" style="background-image:url('https://via.placeholder.com/600x690');"></div>
                            <div class="col-lg-6 newsletter-popup p-8 lg-p-5 md-p-6 xs-p-8 position-relative">
                                <span class="text-base-color mb-10px d-block" style="">We offer a wide range of options</span>
                                <h4 class="d-inline-block alt-font text-dark-gray mb-20px">1M+ property ready to <span class="fw-700 d-inline-flex text-highlight">buying & selling.<span class="bg-base-color h-10px bottom-8px opacity-3"></span></span></span></h4>
                                <p>Subscribe to our newsletters and get the property for sell and rent updates.</p>
                                <div class="d-inline-block w-100 newsletter-style-05 position-relative mb-20px">
                                    <form action="email-templates/subscribe-newsletter.php" method="post">
                                        <input class="input-medium w-100 border-radius-4px form-control required mb-15px" type="email" name="email" placeholder="Enter your email address" />
                                        <input type="hidden" name="redirect" value="">
                                        <button type="submit" aria-label="submit" class="btn btn-medium btn-round-edge btn-dark-gray btn-box-shadow w-100 submit">Subscribe now!</button>
                                        <div class="form-results border-radius-4px mt-10px lh-normal pt-10px pb-10px ps-15px pe-15px fs-16 w-100 text-center position-absolute z-index-1 d-none"></div>
                                    </form>
                                </div>
                                <label for="newsletter-off" class="fs-15"><input class="w-auto me-10px position-relative top-1px p-0" type="checkbox" id="newsletter-off" name="newsletter-off">Don't show this popup again</label>
                            </div>
                            <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end subscription popup -->
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/vendors.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>