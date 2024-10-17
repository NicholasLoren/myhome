<?php 
include 'admin/dbconnect.php'; 
include 'index-functions.php'; 
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
        <!-- start page title -->
        <section class="cover-background page-title-big-typography ipad-top-space-margin">
            <div class="container">
                <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 position-relative page-title-extra-small md-mb-30px md-mt-auto" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="text-base-color">Rent your dream property</h1>
                        <h2 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Help you find the <span class="fw-700 text-highlight d-inline-block">perfect one.<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2>
                    </div>
                    <div class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                        <span class="d-block w-85 lg-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Online property marketplace to buy, sell, and rent residential and commercial properties. Used by millions of renters to find property.</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="overflow-hidden position-relative p-0">
            <div class="opacity-very-light bg-dark-gray z-index-1"></div>
            <div class="container-fluid">
                <div class="row overlap-height">
                    <div class="col-12 p-0 position-relative overlap-gap-section">
                        <img src="https://via.placeholder.com/1920x600" alt="" class="w-100">
                        <div class="alt-font fw-600 fs-350 lg-fs-275 md-fs-250 xs-fs-160 position-absolute right-minus-170px lg-right-0px bottom-50px md-bottom-minus-60px xs-bottom-minus-50px text-white text-outline ls-minus-5px lg-right-0px text-outline-width-2px z-index-2" data-bottom-top="transform: translate3d(80px, 0px, 0px);" data-top-bottom="transform: translate3d(-280px, 0px, 0px);">rentals</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section --> 
        <section class="bg-very-light-gray z-index-3 position-relative">
            <div class="container"> 
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 overlap-section md-overlap-disable overlap-section-one-fourth justify-content-center" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col transition-inner-all md-mb-30px">
                        <div class="bg-white h-100 box-shadow-quadruple-large box-shadow-medium-hover border-radius-6px pt-25px pb-25px ps-40px pe-40px lg-p-25px">
                            <!-- start features box item -->
                            <div class="feature-box feature-box-left-icon-middle text-start">
                                <div class="feature-box-content">
                                    <span class="d-block alt-font fw-600 text-base-color ls-05px">Apartment</span>
                                    <h4 class="d-inline-block text-dark-gray fw-800 ls-minus-1px alt-font mb-0 d-inline-block">200</h4>
                                </div>
                                <div class="feature-box-icon me-0">
                                    <img src="images/demo-real-estate-icon-apartment.svg" alt="">
                                </div>
                            </div>
                            <!-- end features box item -->
                            <div class="border-top border-1 border-color-extra-medium-gray pt-10px mt-15px">
                                <a href="apartment_rentals.php" class="btn btn-extra-large btn-link btn-hover-animation-switch text-dark-gray text-uppercase-inherit section-link">
                                    <span>
                                        <span class="btn-text">View all property</span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    </span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col transition-inner-all md-mb-30px">
                        <div class="bg-white h-100 box-shadow-quadruple-large box-shadow-medium-hover border-radius-6px pt-25px pb-25px ps-40px pe-40px lg-p-25px">
                            <!-- start features box item -->
                            <div class="feature-box feature-box-left-icon-middle text-start">
                                <div class="feature-box-content">
                                    <span class="d-block alt-font fw-600 text-base-color ls-05px">Home</span>
                                    <h4 class="d-inline-block text-dark-gray fw-800 ls-minus-1px me-5px alt-font mb-0 d-inline-block">235</h4>
                                </div>
                                <div class="feature-box-icon me-0">
                                    <img src="images/demo-real-estate-icon-home.svg" alt="">
                                </div>
                            </div>
                            <!-- end features box item -->
                            <div class="border-top border-1 border-color-extra-medium-gray pt-10px mt-15px">
                                <a href="home_rentals.php" class="btn btn-extra-large btn-link btn-hover-animation-switch text-dark-gray text-uppercase-inherit section-link">
                                    <span>
                                        <span class="btn-text">View all property</span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    </span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col transition-inner-all xs-mb-30px">
                        <div class="bg-base-color h-100 box-shadow-quadruple-large box-shadow-medium-hover border-radius-6px pt-35px pb-35px ps-40px pe-40px lg-ps-25px lg-pe-25px">
                            <span class="fs-24 lh-26 d-inline-block alt-font text-white fw-500 mb-0"><span class="fw-700 d-block fs-45 mb-10px">350</span> Newly listed properties</span>
                        </div>
                    </div>
                    <div class="col transition-inner-all">
                        <div class="bg-white h-100 box-shadow-quadruple-large box-shadow-medium-hover border-radius-6px pt-25px pb-25px ps-40px pe-40px lg-p-25px">
                            <!-- start features box item -->
                            <div class="feature-box feature-box-left-icon-middle text-start">
                                <div class="feature-box-content">
                                    <span class="d-block alt-font fw-600 text-base-color ls-05px">Office</span>
                                    <h4 class="d-inline-block text-dark-gray fw-800 ls-minus-1px me-5px alt-font mb-0 d-inline-block">400</h4>
                                </div>
                                <div class="feature-box-icon me-0">
                                    <img src="images/demo-real-estate-icon-office.svg" alt="">
                                </div>
                            </div>
                            <!-- end features box item -->
                            <div class="border-top border-1 border-color-extra-medium-gray pt-10px mt-15px">
                                <a href="office_rentals.php" class="btn btn-extra-large btn-link btn-hover-animation-switch text-dark-gray text-uppercase-inherit section-link">
                                    <span>
                                        <span class="btn-text">View all property</span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    </span> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4 xs-mb-10 pt-9" id="rentals">
                    <div class="col-12 text-center">
                        <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Latest property for <span class="fw-700 text-highlight">rent<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                    <!-- start box item -->
                    <!-- start rental apartment box item -->
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="apartment-for-rent-details.php?id=<?php echo $RA_apartment_id; ?>">
                                    <img src="admin/<?php echo $RA_front_view; ?>" alt="" style="max-height: 260px;">
                                </a>
                                <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Rent Apartment</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="apartment-for-rent-details.php?id=<?php echo $RA_apartment_id; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $RA_apartment_name; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $RA_location; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $RA_bedrooms; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bedrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $RA_bathrooms; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bathrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $RA_living_area; ?><sup>2</sup></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Living area</span> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="apartment-for-rent-details.php?id=<?php echo $RA_apartment_id; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0"><?php echo $RA_price; ?> per <?php echo $RA_period; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->

                    <!-- end box item -->
                    <!-- start home rentals box item -->
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="home-for-rent-details.php?id=<?php echo $HR_home_id; ?>">
                                    <img src="admin/<?php echo $HR_front_view; ?>" alt="">
                                </a>
                                <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Rent Home</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="home-for-rent-details.php?id=<?php echo $HR_home_id; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $HR_home_name; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $HR_location; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $HR_bedrooms; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bedrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $HR_bathrooms; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bathrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $HR_living_area; ?><sup>2</sup></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Living area</span> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="home-for-rent-details.php?id=<?php echo $HR_home_id; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0"><?php echo $HR_price; ?> per <?php echo $HR_period; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->
                   
                    <!-- start office rentals box item -->
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="office-for-rent-details.php?id=<?php echo $OR_office_id; ?>">
                                    <img src="admin/<?php echo $OR_front_view; ?>" alt="">
                                </a>
                                <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Rent Office</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="office-for-rent-details.php?id=<?php echo $OR_office_id; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $OR_office_name; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $OR_location; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $OR_total_rooms; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Rooms</span> 
                                        </div>
                                    <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-chair-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $OR_waiting_room; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Waiting Rooms</span> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="office-for-rent-details.php?id=<?php echo $OR_office_id; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0"><?php echo $OR_price; ?> per <?php echo $OR_period; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->

                    <!-- start shop for rent box item -->
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="shop-for-rent-details.php?id=<?php echo $SR_shop_id; ?>">
                                    <img src="admin/<?php echo $SR_front_view; ?>" alt="">
                                </a>
                                <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Rent Shop</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="shop-for-rent-details.php?id=<?php echo $SR_shop_id; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $SR_shop_name; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $SR_location; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $SR_total_rooms; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Rooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $SR_store_room; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Store</span> 
                                        </div>
                                        <div class="col">
                                        <span class="d-block lh-18 fs-15">Size</span> 
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-chair-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $SR_measurement; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="shop-for-rent-details.php?id=<?php echo $SR_shop_id; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0"><?php echo $SR_price; ?> per <?php echo $SR_period; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->
                    <!-- end box item -->
                </div> 
                <div class="row">
                    <div class="mt-5 xs-mt-10 d-flex justify-content-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <!-- start pagination -->
                        <ul class="pagination pagination-style-01 fs-13 alt-font fw-600 mb-0">
                            <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">01</a></li>
                            <li class="page-item active"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                        </ul>
                        <!-- end pagination -->
                    </div> 
                </div>
            </div>
        </section>
        <!-- end section -->
        
        <!-- start footer -->
        <footer class="footer-light bg-gradient-very-light-gray pb-0">
            <div class="container position-relative pt-3 pb-3 overlap-section md-mb-15px">
                <div class="position-absolute left-0px top-0px background-no-repeat background-size-100 h-100 w-100 animation-float" style="background-image: url('https://via.placeholder.com/1190x262')"></div>
                <!-- start newsletter -->
               
                <!-- end newsletter -->
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- start footer column -->
                    <div class="col-auto d-flex flex-column flex-md-row align-items-center text-center text-md-start">
                        <div class="text-dark-gray fs-28 alt-font fw-500">1M+ property ready to <span class="fw-700 text-decoration-line-bottom">buying and selling.</span></div>
                        <div class="bg-white border-radius-50px d-flex align-items-center p-10px ps-35px ms-20px md-ps-20px md-ms-15px box-shadow-medium sm-m-20px">
                            <a href="demo-real-estate-contact.html" class="text-dark-gray fs-22 alt-font fw-500 me-10px overflow-hidden">Say, <span class="fw-700 w-65px text-start d-inline-block" data-fancy-text='{ "effect": "rotate", "string": ["Hello!", "Salve!", "Hallå!"] }'></span></a>
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