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
        <!-- start banner slider  magic-cursor drag-cursor-->
        <section class="p-0 top-space-margin">
            <div class="swiper full-screen md-h-600px sm-h-500px swiper-number-pagination-style-01" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-number", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }' data-number-pagination="1">
                <div class="swiper-wrapper">
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background" style="background-image:url('admin/<?php echo $AS_front_view; ?>');"> 
                        <div class="container h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-md-8 position-relative text-white" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <span class="fs-20 d-block mb-15px"><?php echo $AS_location; ?></span>
                                    <div class="alt-font fs-110 lg-fs-90 lh-90 lg-lh-80 mb-45px sm-mb-25px w-80 xs-w-100 ls-minus-2px"><?php echo $AS_apartment_name; ?></div>  
                                    <a href="real-estate-contact.php" class="btn btn-white btn-large border-1 btn-round-edge btn-box-shadow me-15px xs-mt-10px xs-mb-10px">Schedule visit</a>
                                    <a href="" class="btn btn-transparent-white-light border-1 btn-large btn-round-edge fw-500 xs-mt-10px xs-mb-10px">View details</a>
                                </div>
                            </div> 
                        </div>
                        <div class="position-absolute col-xxl-5 col-lg-6 right-0px bottom-0px pt-50px pb-40px ps-40px pe-40px lg-p-35px d-none d-lg-inline-block bg-white border-radius-left-8px" data-anime='{ "translateX": [50, 0], "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="row justify-content-center">
                                <div class="col-xl-7 lg-mb-25px">
                                    <div class="row">
                                        <div class="col text-center border-end border-color-extra-medium-gray">
                                            <img class="mb-5px h-50px" src="images/demo-real-estate-icon-bed.svg" alt="">
                                            <span class="alt-font fs-16 fw-500 d-block"><?php echo $AS_bedrooms; ?> Bedrooms</span>
                                        </div>
                                        <div class="col text-center border-end border-color-extra-medium-gray">
                                            <img class="mb-5px h-50px" src="images/demo-real-estate-icon-bath.svg" alt="">
                                            <span class="alt-font fs-16 fw-500 d-block"><?php echo $AS_bathrooms; ?>Bathrooms</span>
                                        </div>
                                        <div class="col text-center border-end lg-border-end-0 border-color-extra-medium-gray">
                                            <img class="mb-5px h-50px" src="images/demo-real-estate-icon-car.svg" alt="">
                                            <span class="alt-font fs-12 fw-500 d-block"><?php echo $AS_parking; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 ps-35px lg-ps-15px text-center text-xl-start">
                                    <span class="fw-500 mb-5px d-block alt-font">For sell price</span>
                                    <h4 class="text-dark-gray fw-700 alt-font mb-0 ls-minus-1px"><?php echo $AS_price; ?></h4>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background" style="background-image:url('images/bg2.jpg');"> 
                        <div class="container h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-md-8 position-relative text-white" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <span class="fs-20 d-block mb-15px">Rubaga road, CO 80301</span>
                                    <div class="alt-font fs-110 lg-fs-90 lh-90 lg-lh-80 mb-45px sm-mb-25px w-80 xs-w-100 ls-minus-2px">Woodland <span class="fw-700">modern</span></div>  
                                    <a href="real-estate-contact.php" class="btn btn-white btn-large border-1 btn-round-edge btn-box-shadow me-15px xs-mt-10px xs-mb-10px">Schedule visit</a>
                                    <a href="" class="btn btn-transparent-white-light border-1 btn-large btn-round-edge fw-500 xs-mt-10px xs-mb-10px">View details</a>
                                </div>
                            </div> 
                        </div>
                        <div class="position-absolute col-xxl-5 col-lg-6 right-0px bottom-0px pt-50px pb-40px ps-40px pe-40px lg-p-35px d-none d-lg-inline-block bg-white border-radius-left-8px" data-anime='{ "translateX": [50, 0], "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="row">
                                <div class="col-xl-7 lg-mb-25px">
                                    <div class="row">
                                        <div class="col text-center border-end border-color-extra-medium-gray">
                                            <img class="mb-5px h-50px" src="images/demo-real-estate-icon-bed.svg" alt="">
                                            <span class="alt-font fs-16 fw-500 d-block">4 Beds</span>
                                        </div>
                                        <div class="col text-center border-end border-color-extra-medium-gray">
                                            <img class="mb-5px h-50px" src="images/demo-real-estate-icon-bath.svg" alt="">
                                            <span class="alt-font fs-16 fw-500 d-block">3 Baths</span>
                                        </div>
                                        <div class="col text-center border-end lg-border-end-0 border-color-extra-medium-gray">
                                            <img class="mb-5px h-50px" src="images/demo-real-estate-icon-car.svg" alt="">
                                            <span class="alt-font fs-16 fw-500 d-block">3 Parking</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 ps-35px lg-ps-15px text-center text-xl-start">
                                    <span class="fw-500 mb-5px d-block alt-font">For sell price</span>
                                    <h4 class="text-dark-gray fw-700 alt-font mb-0 ls-minus-1px">$27,99,000</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background" style="background-image:url('images/bg1.png');"> 
                        <div class="container h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-md-8 position-relative text-white" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <span class="fs-20 d-block mb-15px">Wandegeya, Kampala</span>
                                    <div class="alt-font fs-110 lg-fs-90 lh-90 lg-lh-80 mb-45px sm-mb-25px w-70 xs-w-100 ls-minus-2px">Saturate <span class="fw-700">house</span></div>  
                                    <a href="real-estate-contact.php" class="btn btn-white btn-large border-1 btn-round-edge btn-box-shadow me-15px xs-mt-10px xs-mb-10px">Schedule visit</a>
                                    <a href="" class="btn btn-transparent-white-light border-1 btn-large btn-round-edge fw-500 xs-mt-10px xs-mb-10px">View details</a>
                                </div>
                            </div> 
                        </div>
                        <div class="position-absolute col-xxl-5 col-lg-6 right-0px bottom-0px pt-50px pb-40px ps-40px pe-40px lg-p-35px d-none d-lg-inline-block bg-white border-radius-left-8px" data-anime='{ "translateX": [50, 0], "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="row">
                                <div class="col-xl-7 lg-mb-25px">
                                    <div class="row">
                                        <div class="col text-center border-end border-color-extra-medium-gray">
                                            <img class="mb-5px h-50px" src="images/demo-real-estate-icon-bed.svg" alt="">
                                            <span class="alt-font fs-16 fw-500 d-block">3 Beds</span>
                                        </div>
                                        <div class="col text-center border-end border-color-extra-medium-gray">
                                            <img class="mb-5px h-50px" src="images/demo-real-estate-icon-bath.svg" alt="">
                                            <span class="alt-font fs-16 fw-500 d-block">3 Baths</span>
                                        </div>
                                        <div class="col text-center border-end lg-border-end-0 border-color-extra-medium-gray">
                                            <img class="mb-5px h-50px" src="images/demo-real-estate-icon-car.svg" alt="">
                                            <span class="alt-font fs-16 fw-500 d-block">2 Parking</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 ps-35px lg-ps-15px text-center text-xl-start">
                                    <span class="fw-500 mb-5px d-block alt-font">For sell price</span>
                                    <h4 class="text-dark-gray fw-700 alt-font mb-0 ls-minus-1px">$23,99,000</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slider item -->
                </div>
                <!-- start slider pagination --> 
                <div class="container">
                    <div class="row g-0">
                        <div class="col-12 position-relative">
                            <!-- start slider pagination --> 
                            <div class="swiper-pagination left-0 text-start swiper-pagination-clickable swiper-number fs-14 alt-font ls-05px"></div>  
                            <!-- end slider pagination -->
                        </div>
                    </div>
                </div>
                <!-- end slider pagination -->
                <!-- start slider navigation -->
                 <div class="slider-one-slide-prev-1 icon-very-small text-white swiper-button-prev slider-navigation-style-06"><i class="line-icon-Arrow-OutLeft icon-extra-large"></i></div>
                <div class="slider-one-slide-next-1 icon-very-small text-white swiper-button-next slider-navigation-style-06"><i class="line-icon-Arrow-OutRight icon-extra-large"></i></div> 
                <!-- end slider navigation --> 
            </div>
        </section>
        <!-- end banner slider --> 
        <!-- start section --> 
        <section>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 md-mb-50px position-relative" data-anime='{ "effect": "slide", "color": "#262b35", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                        <figure class="position-relative mb-0 overflow-hidden border-radius-6px"> 
                            <img src="images/image1.jpg" alt="" class="w-100"> 
                            <figcaption class="position-absolute border-radius-left-8px bg-base-color right-0px bottom-0px p-45px last-paragraph-no-margin">
                                <i class="feather icon-feather-home icon-medium text-white mb-15px d-block"></i>
                                <h4 class="alt-font fw-700 text-white mb-0 d-block">258,952+</h4>
                                <p class="text-white">Properties listed for sell</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6" data-anime='{ "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <span class="fs-20 d-inline-block mb-15px text-base-color">Online property marketplace</span> 
                        <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none sm-w-85" data-shadow-animation="true" data-animation-delay="700">We help you find your <span class="fw-700 text-highlight">new place.<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2> 
                        <p class="w-80 md-w-100">Online property marketplace to buy and rent residential and commercial properties. Used by millions of renters to find property.</p>
                        <div class="mb-35px">
                            <!-- start features box item -->
                            <div class="icon-with-text-style-08 mb-10px">
                                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                    <div class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-base-color-transparent rounded-circle me-15px">
                                        <i class="fa-solid fa-check fs-14 text-base-color"></i> 
                                    </div>
                                    <div class="feature-box-content"> 
                                        <span class="text-dark-gray">More than 10 years of experience.</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end features box item -->
                            <!-- start features box item -->
                            <div class="icon-with-text-style-08">
                                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                    <div class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-base-color-transparent rounded-circle me-15px">
                                        <i class="fa-solid fa-check fs-14 text-base-color"></i> 
                                    </div>
                                    <div class="feature-box-content"> 
                                        <span class="text-dark-gray">10,000+ people trusting our agency.</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end features box item -->
                        </div>
                        <div class="d-inline-block">
                            <a href="about.php" class="btn btn-dark-gray btn-medium btn-round-edge me-25px">About company</a> 
                            <a href="real-estate-sell.php" class="btn btn-large btn-link btn-hover-animation-switch text-dark-gray p-0">
                                <span>
                                    <span class="btn-text">Find property</span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span> 
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="p-0 border-top border-color-extra-medium-gray">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-6 row-cols-md-3 row-cols-sm-2 justify-content-center g-0 bg-white" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col d-flex align-items-center text-center text-lg-start icon-with-text-style-04 border-end md-border-start md-border-bottom sm-border-start-0 xs-border-end-0 border-color-extra-medium-gray position-relative xs-pt-60px xs-pb-60px">
                        <span class="fs-26 lh-30 d-inline-block alt-font text-dark-gray fw-600 mb-0 w-100 sm-w-85 mx-auto shadow-none" data-shadow-animation="true" data-animation-delay="700">What are you <span class="fw-600 text-highlight">looking<span class="bg-base-color h-6px bottom-3px opacity-3 separator-animation"></span></span> for?</span> 
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 border-end md-border-bottom sm-border-end-0 border-color-extra-medium-gray position-relative">
                        <div class="feature-box pt-45px pb-25px">
                            <div class="feature-box-icon mb-10px">
                                <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">Buy</div>
                                <a href="apartments-for-sale.php" class="d-block">
                                    <img src="images/demo-real-estate-icon-apartment.svg" alt="">
                                </a>
                            </div>
                            <div class="feature-box-content">
                                <a href="apartments-for-sale.php" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Apartment</a>
                            </div>
                        </div>  
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 border-end md-border-bottom xs-border-end-0 border-color-extra-medium-gray position-relative">
                        <div class="feature-box pt-45px pb-25px">
                            <div class="feature-box-icon mb-10px">
                                <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">Buy</div>
                                <a href="condominium-for-sale.php" class="d-block">
                                    <img src="images/demo-real-estate-icon-condominium.svg" alt="">
                                </a>
                            </div>
                            <div class="feature-box-content">
                                <a href="condominium-for-sale.php" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Condominium</a>
                            </div>
                        </div>  
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 border-end md-border-start sm-border-end-0 sm-border-start-0 sm-border-bottom border-color-extra-medium-gray position-relative">
                        <div class="feature-box pt-45px pb-25px">
                            <div class="feature-box-icon mb-10px">
                                <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">Buy</div>
                                <a href="home-for-sale.php" class="d-block">
                                    <img src="images/demo-real-estate-icon-home.svg" alt="">
                                </a>
                            </div>
                            <div class="feature-box-content">
                                <a href="home-for-sale.php" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Home</a>
                            </div>
                        </div>  
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 border-end xs-border-end-0 xs-border-bottom border-color-extra-medium-gray position-relative">
                        <div class="feature-box pt-45px pb-25px">
                            <div class="feature-box-icon mb-10px">
                                <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">Buy</div>
                                <a href="office-for-sale.php" class="d-block">
                                    <img src="images/demo-real-estate-icon-office.svg" alt="">
                                </a>
                            </div>
                            <div class="feature-box-content">
                                <a href="office-for-sale.php" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Office</a>
                            </div>
                        </div>  
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 border-color-extra-medium-gray md-border-end sm-border-end-0 position-relative">
                        <div class="feature-box pt-45px pb-25px">
                            <div class="feature-box-icon mb-10px">
                                <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">Buy</div>
                                <a href="shop-for-sale.php" class="d-block">
                                    <img src="images/demo-real-estate-icon-shop.svg" alt="">
                                </a>
                            </div>
                            <div class="feature-box-content">
                                <a href="shop-for-sale.php" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Shop</a>
                            </div>
                        </div>  
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section --> 
        <section class="bg-very-light-gray">
            <div class="container">
                <div class="row align-items-center mb-6 xs-mb-8">
                    <div class="col-md-8 text-center text-md-start sm-mb-20px" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Property for <span class="fw-700 text-highlight d-inline-block">sell and rent<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                    </div>
                    <div class="col-md-4" data-anime='{ "translateX": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="d-flex justify-content-center justify-content-md-end">
                            <a href="real-estate-sell.php" class="fw-600 alt-font text-dark-gray text-dark-gray-hover d-flex align-items-center">View all property<span class="d-flex align-items-center justify-content-center bg-dark-gray h-40px w-40px text-center rounded-circle fs-16 text-white ms-10px"><i class="feather icon-feather-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                    <!-- start box item -->
                    <!-- start apartment box item -->
                    <?php $res =  mysqli_query($conn,"SELECT * FROM tbl_apartment_rentals  WHERE front_view !='' LIMIT 1");
                        $count = mysqli_num_rows($res);
                        if($count > 0) {
                        while($row=mysqli_fetch_assoc($res)){ 
                            $apartment_id =  $row['apartment_id']; ?>
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="apartment-for-rent-details.php?id=<?php echo $row['apartment_id']; ?>">
                                    <img src="admin/<?php echo $row['front_view']; ?>" alt="" style="max-height: 260px;">
                                </a>
                                <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Rent Apartment</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="apartment-for-rent-details.php?id=<?php echo $row['apartment_id']; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $row['apartment_name']; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $row['location']; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['bedrooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bedrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['bathrooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bathrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['living_area']; ?><sup>2</sup></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Living area</span> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="apartment-for-rent-details.php?id=<?php echo $row['apartment_id']; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0">$<?php echo $row['price']; ?> per <?php echo $row['period']; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->
                     <?php } }?>

                    <!-- end box item -->
                    <!-- start box item -->
                    <?php $res =  mysqli_query($conn,"SELECT * FROM tbl_home_rentals  WHERE front_view !='' LIMIT 1");
                        $count = mysqli_num_rows($res);
                        if($count > 0) {
                        while($row=mysqli_fetch_assoc($res)){ 
                            $home_id =  $row['home_id']; ?>
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="home-for-rent-details.php?id=<?php echo $row['home_id']; ?>">
                                    <img src="admin/<?php echo $row['front_view']; ?>" alt="">
                                </a>
                                <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Rent Home</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="home-for-rent-details.php?id=<?php echo $row['home_id']; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $row['home_name']; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $row['location']; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['bedrooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bedrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['bathrooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bathrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['living_area']; ?><sup>2</sup></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Living area</span> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="home-for-rent-details.php?id=<?php echo $row['home_id']; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0">$<?php echo $row['price']; ?> per <?php echo $row['period']; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->
                     <?php } } ?>
                    <!-- end box item -->
                    <!-- start box item -->
                    <?php $res =  mysqli_query($conn,"SELECT * FROM tbl_office_rentals  WHERE front_view !='' LIMIT 1");
                        $count = mysqli_num_rows($res);
                        if($count > 0) {
                        while($row=mysqli_fetch_assoc($res)){ 
                            $office_id =  $row['office_id']; ?>
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="office-for-rent-details.php?id=<?php echo $row['office_id']; ?>">
                                    <img src="admin/<?php echo $row['front_view']; ?>" alt="">
                                </a>
                                <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Rent Office</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="office-for-rent-details.php?id=<?php echo $row['office_id']; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $row['office_name']; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $row['location']; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['total_rooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Rooms</span> 
                                        </div>
                                    <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-chair-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['waiting_room']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Waiting Rooms</span> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="office-for-rent-details.php?id=<?php echo $row['office_id']; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0">$<?php echo $row['price']; ?> per <?php echo $row['period']; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->
                     <?php } } ?>
                    <!-- end box item -->
                    <!-- start shop box item -->
                    <?php $res =  mysqli_query($conn,"SELECT * FROM tbl_shop_rentals  WHERE front_view !='' LIMIT 1");
                        $count = mysqli_num_rows($res);
                        if($count > 0) {
                        while($row=mysqli_fetch_assoc($res)){ 
                            $office_id =  $row['shop_id']; ?>
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="shop-for-rent-details.php?id=<?php echo $row['shop_id']; ?>">
                                    <img src="admin/<?php echo $row['front_view']; ?>" alt="">
                                </a>
                                <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Rent Shop</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="shop-for-rent-details.php?id=<?php echo $row['shop_id']; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $row['shop_name']; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $row['location']; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['total_rooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Rooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['store_room']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Store</span> 
                                        </div>
                                        <div class="col">
                                        <span class="d-block lh-18 fs-15">Size</span> 
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-chair-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['measurement']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="shop-for-rent-details.php?id=<?php echo $row['shop_id']; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0">$<?php echo $row['price']; ?> per <?php echo $row['period']; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->
                     <?php }  } ?>
                    

                    <!-- Displaying items for sale -->


                    <!-- start apartment box item -->
                    <?php $res =  mysqli_query($conn,"SELECT * FROM tbl_apartment_for_sale  WHERE front_view !='' LIMIT 1");
                        $count = mysqli_num_rows($res);
                        if($count > 0) {
                        while($row=mysqli_fetch_assoc($res)){ 
                            $apartment_id =  $row['apartment_id']; ?>
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="apartment-for-sale-details.php?id=<?php echo $row['apartment_id']; ?>">
                                    <img src="admin/<?php echo $row['front_view']; ?>" alt="" style="max-height: 260px;">
                                </a>
                                <div class="col-auto bg-green border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Buy Apartment</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="apartment-for-sale-details.php?id=<?php echo $row['apartment_id']; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $row['apartment_name']; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $row['location']; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['bedrooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bedrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['bathrooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bathrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['living_area']; ?><sup>2</sup></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Living area</span> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="apartment-for-sale-details.php?id=<?php echo $row['apartment_id']; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0">Price : $<?php echo $row['price']; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->
                     <?php } }?>

                    <!-- end box item -->
                    <!-- start box item -->
                    <?php $res =  mysqli_query($conn,"SELECT * FROM tbl_home_for_sale  WHERE front_view !='' LIMIT 1");
                        $count = mysqli_num_rows($res);
                        if($count > 0) {
                        while($row=mysqli_fetch_assoc($res)){ 
                            $home_id =  $row['home_id']; ?>
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="home-for-sale-details.php?id=<?php echo $row['home_id']; ?>">
                                    <img src="admin/<?php echo $row['front_view']; ?>" alt="">
                                </a>
                                <div class="col-auto bg-green border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Buy Home</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="home-for-sale-details.php?id=<?php echo $row['home_id']; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $row['home_name']; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $row['location']; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['bedrooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bedrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['bathrooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bathrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['living_area']; ?><sup>2</sup></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Living area</span> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="home-for-sale-details.php?id=<?php echo $row['home_id']; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0">Price : $<?php echo $row['price']; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->
                     <?php } } ?>
                    <!-- end box item -->
                    <!-- start box item -->
                    <?php $res =  mysqli_query($conn,"SELECT * FROM tbl_office_for_sale  WHERE front_view !='' LIMIT 1");
                        $count = mysqli_num_rows($res);
                        if($count > 0) {
                        while($row=mysqli_fetch_assoc($res)){ 
                            $office_id =  $row['office_id']; ?>
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="office-for-sale-details.php?id=<?php echo $row['office_id']; ?>">
                                    <img src="admin/<?php echo $row['front_view']; ?>" alt="">
                                </a>
                                <div class="col-auto bg-green border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Buy Office</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="office-for-sale-details.php?id=<?php echo $row['office_id']; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $row['office_name']; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $row['location']; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['total_rooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Rooms</span> 
                                        </div>
                                    <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-chair-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['waiting_room']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Waiting Rooms</span> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="office-for-sale-details.php?id=<?php echo $row['office_id']; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0">Price : $<?php echo $row['price']; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->
                     <?php } } ?>
                    <!-- end box item -->
                    <!-- start shop box item -->
                    <?php $res =  mysqli_query($conn,"SELECT * FROM tbl_shop_for_sale  WHERE front_view !='' LIMIT 1");
                        $count = mysqli_num_rows($res);
                        if($count > 0) {
                        while($row=mysqli_fetch_assoc($res)){ 
                            $office_id =  $row['shop_id']; ?>
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="shop-for-sale-details.php?id=<?php echo $row['shop_id']; ?>">
                                    <img src="admin/<?php echo $row['front_view']; ?>" alt="">
                                </a>
                                <div class="col-auto bg-green border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Buy Shop</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="shop-for-sale-details.php?id=<?php echo $row['shop_id']; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $row['shop_name']; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $row['location']; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['total_rooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Rooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['store_room']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Store</span> 
                                        </div>
                                        <div class="col">
                                        <span class="d-block lh-18 fs-15">Size</span> 
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-chair-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['measurement']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="shop-for-sale-details.php?id=<?php echo $row['shop_id']; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0">Price : $<?php echo $row['price']; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->
                     <?php }  } ?>
                    <!-- end box item -->
                    <!-- start apartment box item -->
                    <?php $res =  mysqli_query($conn,"SELECT * FROM tbl_condominiums  WHERE front_view !='' LIMIT 1");
                        $count = mysqli_num_rows($res);
                        if($count > 0) {
                        while($row=mysqli_fetch_assoc($res)){ 
                            $condo_id =  $row['condo_id']; ?>
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="condominium-for-sale-details.php?id=<?php echo $row['condo_id']; ?>">
                                    <img src="admin/<?php echo $row['front_view']; ?>" alt="" style="max-height: 260px;">
                                </a>
                                <div class="col-auto bg-green border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Buy Condominium</div>
                            </div> 
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="condominium-for-sale-details.php?id=<?php echo $row['condo_id']; ?>" class="alt-font text-dark-gray fw-700 fs-22 me-10px"><?php echo $row['condo_name']; ?></a>
                                    </div>
                                    <p class="mb-20px"><?php echo $row['location']; ?></p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['bedrooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bedrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['bathrooms']; ?></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Bathrooms</span> 
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['living_area']; ?><sup>2</sup></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Living area</span> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="condominium-for-sale-details.php?id=<?php echo $row['condo_id']; ?>" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0">Price : $<?php echo $row['price']; ?></span>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- end box item -->
                       <?php }  } ?>
                    <!-- end box item -->
                    
                </div> 
            </div>
        </section>
        <!-- end section --> 
        <!-- start section -->
        <section>
            <div class="container">
                <div class="row align-items-center justify-content-center mb-7"> 
                    <div class="col-lg-5 md-mb-50px" data-anime='{ "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <span class="fs-20 d-inline-block mb-15px text-base-color">Why choose us our service</span> 
                        <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Accurate to 99% of a <span class="fw-700 text-highlight d-inline-block">property's<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span> details.</h3> 
                        <div class="mt-50px mb-50px sm-mt-40px sm-mb-40px">
                            <!-- start features box item -->
                            <div class="icon-with-text-style-08 mb-30px">
                                <div class="feature-box feature-box-left-icon overflow-hidden">
                                    <div class="feature-box-icon">
                                        <img src="https://via.placeholder.com/80x80" class="w-80px" alt="">
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Most appreciated projects</span>
                                        <p class="w-80 lg-w-100">Browse millions of properties in your city save your favorites.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end features box item -->
                            <!-- start features box item -->
                            <div class="icon-with-text-style-08">
                                <div class="feature-box feature-box-left-icon overflow-hidden">
                                    <div class="feature-box-icon">
                                        <img src="https://via.placeholder.com/80x80" class="w-80px" alt="">
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Highest rental income projects</span>
                                        <p class="w-80 lg-w-100">Browse millions of properties in your city, inquire about your favorites.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end features box item -->
                        </div>
                        <div class="d-inline-block">
                            <a href="about.php" class="btn btn-dark-gray btn-medium btn-round-edge me-15px xs-mb-10px">about more</a> 
                        </div>
                    </div> 
                    <div class="col-lg-6 offset-lg-1 position-relative" data-anime='{ "effect": "slide", "color": "#262b35", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                        <!-- start popup video -->
                        <figure class="position-relative mb-0 border-radius-6px overflow-hidden"> 
                            <img src="https://via.placeholder.com/800x786" class="w-100 border-radius-6px" alt="">
                            <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU" class="absolute-middle-center text-center rounded-circle video-icon-box video-icon-large popup-vimeo">
                                <span>
                                    <span class="video-icon bg-white">
                                        <i class="fa-solid fa-play text-dark-gray"></i>
                                        <span class="video-icon-sonar">
                                            <span class="video-icon-sonar-bfr border border-color-white"></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                            <figcaption class="position-absolute text-center border-radius-5px right-25px bottom-25px ps-30px pe-30px blur-box bg-white-transparent">
                                <h1 class="mx-auto mb-0 fw-700 alt-font text-dark-gray mb-5px mt-25px">4.9</h1>
                                <div class="text-base-color fs-19 ls-2px lh-10">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <span class="text-dark-gray text-uppercase fs-13 fw-700 alt-font mb-15px d-inline-block">TrustScore</span>
                            </figcaption>
                        </figure>
                        <!-- end popup video -->
                    </div>
                </div>
                <div class="row justify-content-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col-auto icon-with-text-style-08">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon me-10px">
                                <i class="bi bi-pin-map icon-medium text-base-color"></i>
                            </div>
                            <div class="feature-box-content alt-font text-dark-gray fs-22 fw-600">
                                Our selection of the best places around the <span class="text-decoration-line-bottom">country and pick yours.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="overflow-hidden bg-gradient-very-light-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-5 md-mb-50px sm-mb-35px"> 
                        <span class="fs-20 d-inline-block mb-15px text-base-color">Find your dream house</span>
                        <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px w-90 xl-w-100 shadow-none" data-shadow-animation="true" data-animation-delay="700">We are available in <span class="fw-700 text-highlight d-inline-block">many cities<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                        <p class="mb-30px w-90 md-w-100">We provide a wide selection of home types for you and your family and are free to choose a home model.</p>
                        <div class="d-flex">
                            <!-- start slider navigation -->
                            <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i></div>
                            <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i></div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="outside-box-right-20 sm-outside-box-right-0" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <div class="swiper magic-cursor slider-one-slide" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "pagination": { "el": ".slider-three-slide-pagination", "clickable": true, "dynamicBullets": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper">
                                    <!-- start slider item --> 
                                    <div class="swiper-slide">
                                        <!-- start interactive banner item -->
                                        <div class="col interactive-banner-style-05">
                                            <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                                <a href="#">
                                                    <img src="https://via.placeholder.com/370x510" class="w-100 border-radius-6px" alt="" />
                                                    <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                                                    <div class="position-absolute top-25px right-25px bg-orange border-radius-50px ps-5px pe-15px lh-28">
                                                        <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-orange lh-18">
                                                            <i class="fa-solid fa-check fs-10"></i> 
                                                        </div>
                                                        <span class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Trusted</span>
                                                    </div>
                                                </a>
                                                <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                    <img src="https://via.placeholder.com/130x130" class="mb-auto h-70px" alt="" />
                                                    <a href="real-estate-sell.php" class="text-white alt-font fw-600 fs-26">Kampala, Uganda</a> 
                                                    <span class="opacity-7 text-white">17 property listing</span>
                                                    <a href="real-estate-sell.php" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <!-- end interactive banner item -->
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <!-- start interactive banner item -->
                                        <div class="col interactive-banner-style-05">
                                            <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                                <a href="#">
                                                    <img src="https://via.placeholder.com/370x510" class="w-100 border-radius-6px" alt="" />
                                                    <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                                                    <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                        <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                            <i class="fa-solid fa-check fs-10"></i> 
                                                        </div>
                                                        <span class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                    </div>
                                                </a>
                                                <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                    <img src="https://via.placeholder.com/130x130" class="mb-auto h-70px" alt="" />
                                                    <a href="real-estate-sell.php" class="text-white alt-font fw-600 fs-26">Mukono, Uganda</a> 
                                                    <span class="opacity-7 text-white">20 property listing</span>
                                                    <a href="real-estate-sell.php" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <!-- end interactive banner item -->
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <!-- start interactive banner item -->
                                        <div class="col interactive-banner-style-05">
                                            <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                                <a href="#">
                                                    <img src="https://via.placeholder.com/370x510" class="w-100 border-radius-6px" alt="" />
                                                    <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                                                    <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                        <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                            <i class="fa-solid fa-check fs-10"></i> 
                                                        </div>
                                                        <span class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                    </div>
                                                </a>
                                                <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                    <img src="https://via.placeholder.com/130x130" class="mb-auto h-70px" alt="" />
                                                    <a href="real-estate-sell.php" class="text-white alt-font fw-600 fs-26">Wakiso, Uganda</a> 
                                                    <span class="opacity-7 text-white">45 property listing</span>
                                                    <a href="real-estate-sell.php" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <!-- end interactive banner item -->
                                    </div>
                                    <!-- end slider item --> 
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <!-- start interactive banner item -->
                                        <div class="col interactive-banner-style-05">
                                            <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                                <a href="#">
                                                    <img src="https://via.placeholder.com/370x510" class="w-100 border-radius-6px" alt="" />
                                                    <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                                                    <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                        <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                            <i class="fa-solid fa-check fs-10"></i> 
                                                        </div>
                                                        <span class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                    </div>
                                                </a>
                                                <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                    <img src="https://via.placeholder.com/130x130" class="mb-auto h-70px" alt="" />
                                                    <a href="real-estate-sell.php" class="text-white alt-font fw-600 fs-26">Nansana, Uganda</a> 
                                                    <span class="opacity-7 text-white">45 property listing</span>
                                                    <a href="real-estate-sell.php" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <!-- end interactive banner item -->
                                    </div>    
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <!-- start interactive banner item -->
                                        <div class="col interactive-banner-style-05">
                                            <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                                <a href="#">
                                                    <img src="https://via.placeholder.com/370x510" class="w-100 border-radius-6px" alt="" />
                                                    <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                                                    <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                        <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                            <i class="fa-solid fa-check fs-10"></i> 
                                                        </div>
                                                        <span class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                    </div>
                                                </a>
                                                <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                    <img src="https://via.placeholder.com/130x130" class="mb-auto h-70px" alt="" />
                                                    <a href="real-estate-sell.php" class="text-white alt-font fw-600 fs-26">Kireka, Uganda</a> 
                                                    <span class="opacity-7 text-white">20 property listing</span>
                                                    <a href="real-estate-sell.php" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <!-- end interactive banner item -->
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <!-- start interactive banner item -->
                                        <div class="col interactive-banner-style-05">
                                            <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                                <a href="#">
                                                    <img src="https://via.placeholder.com/370x510" class="w-100 border-radius-6px" alt="" />
                                                    <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                                                    <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                        <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                            <i class="fa-solid fa-check fs-10"></i> 
                                                        </div>
                                                        <span class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                    </div>
                                                </a>
                                                <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                    <img src="https://via.placeholder.com/130x130" class="mb-auto h-70px" alt="" />
                                                    <a href="real-estate-sell.php" class="text-white alt-font fw-600 fs-26">Kololo, Uganda</a> 
                                                    <span class="opacity-7 text-white">10 property listing</span>
                                                    <a href="real-estate-sell.php" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <!-- end interactive banner item -->
                                    </div>
                                    <!-- end slider item --> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </section>
        <!-- end section --> 
        <!-- start section -->
        <section class="py-0">
            <div class="container">
                <div class="row justify-content-center align-items-center mb-40px md-mb-30px">
                    <div class="col text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Get your property <span class="fw-700 text-highlight d-inline-block">in 24 hours<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                    </div>
                </div>
                <div class="row g-0 row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-10 transition-inner-all md-mb-50px sm-mb-30px">
                        <div class="feature-box text-center border-end xs-border-end-0 border-color-extra-medium-gray">
                            <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-15px">
                                <i class="bi bi-house-door icon-large text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font fw-600 text-dark-gray fs-19 d-inline-block mb-5px">Search Property</span>
                                <p class="w-80 md-w-70 mx-auto">Search and send inquiry about your favourite property.</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-10 transition-inner-all md-mb-50px sm-mb-30px">
                        <div class="feature-box text-center border-end md-border-end-0 border-color-extra-medium-gray">
                            <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-15px">
                                <i class="bi bi-camera icon-large text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font fw-600 text-dark-gray fs-19 d-inline-block mb-5px">Tour/Visit the property</span>
                                <p class="w-80 md-w-70 mx-auto">Schedule with us and we take you to see the proprty.</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-10 transition-inner-all xs-mb-30px">
                        <div class="feature-box text-center border-end xs-border-end-0 border-color-extra-medium-gray">
                            <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-15px">
                                <i class="bi bi-files icon-large text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font fw-600 text-dark-gray fs-19 d-inline-block mb-5px">Buy Property</span>
                                <p class="w-80 md-w-70 mx-auto">Upon reaching an agreement, make payemts and have ownership documents signed.</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-10 transition-inner-all">
                        <div class="feature-box text-center">
                            <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-15px">
                                <i class="bi bi-key icon-large text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block alt-font fw-600 text-dark-gray fs-19 d-inline-block mb-5px">Recieve your property</span>
                                <p class="w-80 md-w-70 mx-auto">After all payments and document signing, we hand over the property to you.</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
                <div class="row justify-content-center mt-6 sm-mt-50px">
                    <div class="col-auto icon-with-text-style-08">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon me-15px">
                                <i class="bi bi-patch-check icon-medium text-base-color"></i>
                            </div>
                            <div class="feature-box-content alt-font text-dark-gray fs-22 fw-600">
                                We are growing fast! Today MyHome has <span class="text-decoration-line-bottom">12k+ active residents.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start feedback section -->
       
        <!-- end section -->
        <!-- start blog section -->

          <!-- start footer -->
          <footer class="footer-light bg-gradient-very-light-gray pb-0">
            <div class="container position-relative pt-3 pb-3 overlap-section md-mb-15px">
                <div class="position-absolute left-0px top-0px background-no-repeat background-size-100 h-100 w-100 animation-float" style="background-image: url('https://via.placeholder.com/1190x262')"></div>
                <!-- start newsletter -->
                <!-- <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center bg-base-color pt-4 pb-4 ps-6 pe-6 lg-p-5 border-radius-6px g-0">
                    <div class="col-xl-6 col-lg-7 md-mb-25px sm-mb-15px position-relative text-center text-lg-start"> 
                        <h3 class="alt-font fw-500 text-white ls-minus-1px mb-10px shadow-none" data-shadow-animation="true" data-animation-delay="700">Subscribe to <span class="fw-700 text-highlight d-inline-block">newsletter<span class="bg-white h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                        <span class="fs-20 text-white">Social media its ways of our excellence.</span>
                    </div>
                    <div class="col-lg-5 offset-xl-1 position-relative"> 
                        <div class="d-inline-block w-100 newsletter-style-03 position-relative">
                            <form action="email-templates/subscribe-newsletter.php" method="post" class="position-relative w-100">
                                <input class="input-large bg-white border-color-white w-100 box-shadow-extra-large form-control required" type="email" name="email" placeholder="Enter your email..." />
                                <input type="hidden" name="redirect" value="">
                                <button class="btn btn-large text-dark-gray ls-0px left-icon submit fw-700" aria-label="submit"><i class="icon feather icon-feather-mail icon-small text-base-color"></i><span>Subscribe</span></button>
                                <div class="form-results border-radius-4px pt-10px pb-10px ps-15px pe-15px fs-16 lh-22 mt-10px w-100 text-center position-absolute d-none"></div>
                            </form>
                        </div>
                    </div>
                </div> -->
                <!-- end newsletter -->
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- start footer column -->
                    <div class="col-auto d-flex flex-column flex-md-row align-items-center text-center text-md-start">
                        <div class="text-dark-gray fs-28 alt-font fw-500">1M+ property ready for <span class="fw-700 text-decoration-line-bottom">buying and renting.</span></div>
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
                            <li><a href="apartment-for-sale.php">Buy an apartment</a></li>
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
                                <p>Subscribe to our newsletters and get the property for sale and rent updates.</p>
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