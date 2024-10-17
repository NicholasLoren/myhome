<?php
include 'admin/dbconnect.php'; 
if (isset($_POST['submit'])) {
    $sent_by = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['comment'];
    //check if user hasnt sent message already
    $existTime = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `tbl_feedback` WHERE `sent_by`='$sent_by' AND reply=''"));
    if($existTime>0){
    echo "<script>alert('You already sent us a message. Please be patient, we will call you soon. Thanks...')</script>";
    }else{
        //create feedback code
        $result = @ mysqli_query($conn,"SHOW TABLE STATUS LIKE  'tbl_feedback'");
        $data = @mysqli_fetch_assoc($result);
        $next = $data['Auto_increment'];
        $prefix = "MYHOME/F/";
        $message_id = sprintf("%s%03s",$prefix,$next);

        //insert feedback
        $feed = mysqli_query($conn,"INSERT INTO tbl_feedback(`message_id`, `sent_by`, `email`, `phone`, `message`) VALUES ('$message_id', '$sent_by', '$email', '$phone', '$message')");
        if ($feed) {
    echo "<script>alert('You message has been sent. We will call you soon. Thanks...')</script>";
        }
    }
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
        <!-- start page title -->
        <section class="cover-background page-title-big-typography ipad-top-space-margin">
            <div class="container">
                <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 position-relative page-title-extra-small md-mb-30px md-mt-auto" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="text-base-color">Build relationships</h1>
                        <h2 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Have questions? <span class="fw-700 text-highlight d-inline-block">Ready to help!<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2>
                    </div>
                    <div class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                        <span class="d-block w-85 lg-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Online property marketplace to buy and rent residential and commercial properties. Used by millions of renters to find property.</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="overflow-hidden p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0 position-relative">
                        <img src="https://via.placeholder.com/1920x600" alt="" class="w-100">
                        <div class="alt-font fw-600 fs-350 lg-fs-275 md-fs-250 sm-fs-200 xs-fs-140 ls-minus-5px xs-ls-minus-2px position-absolute right-minus-50px lg-right-minus-0px bottom-minus-80px md-bottom-minus-60px xs-bottom-minus-40px text-white text-outline text-outline-width-3px" data-bottom-top="transform: translate3d(80px, 0px, 0px);" data-top-bottom="transform: translate3d(-280px, 0px, 0px);">Contact</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->  
        <?php $about =  mysqli_query($conn,"SELECT * FROM tbl_about_us");
                        $count = mysqli_num_rows($about);
                        if($count > 0) {
                        while($row=mysqli_fetch_assoc($about)){ ?>
        <section class="pt-0">
            <div class="container">
                <div class="row justify-content-center align-items-center" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                    <div class="col-lg-6 pt-8 pb-8 text-center text-sm-start"> 
                        <h6 class="alt-font fw-700 text-dark-gray mb-15px"><i class="feather icon-feather-map-pin icon-extra-medium"></i> <?php echo $row['city_one']; ?></h6>
                        <div class="row row-cols-1 row-cols-sm-2 mb-10">
                            <div class="col last-paragraph-no-margin xs-mb-20px">
                                <p class="w-80 lg-w-100"><?php echo $row['office_one']; ?><br> <?php echo $row['location_one']; ?></p>
                            </div>
                            <div class="col">
                                <span class="fs-18 alt-font fw-600 d-block text-dark-gray mb-5px">Get in touch</span>
                                <a href="tel:12345678910"><?php echo $row['phone1']; ?></a><br>
                            </div>
                        </div>
                        <h6 class="alt-font fw-700 text-dark-gray mb-15px"><i class="feather icon-feather-map-pin icon-extra-medium"></i> <?php echo $row['city_two']; ?></h6>
                        <div class="row row-cols-1 row-cols-sm-2">
                            <div class="col last-paragraph-no-margin xs-mb-20px">
                                <p class="w-80 lg-w-100"><?php echo $row['office_two']; ?><br> <?php echo $row['location_two']; ?></p>
                            </div>
                            <div class="col">
                                <span class="fs-18 alt-font fw-600 d-block text-dark-gray mb-5px"> Get in touch</span>
                                <a href="tel:12345678910"><?php echo $row['phone2']; ?></a><br>
                            </div>
                        </div><br>
                        <h6 class="alt-font fw-700 text-dark-gray mb-15px"><i class="feather icon-feather-map-pin icon-extra-medium"></i> <?php echo $row['city_three']; ?></h6>
                        <div class="row row-cols-1 row-cols-sm-2">
                            <div class="col last-paragraph-no-margin xs-mb-20px">
                                <p class="w-80 lg-w-100"><?php echo $row['office_three']; ?><br> <?php echo $row['location_three']; ?></p>
                            </div>
                            <div class="col">
                                <span class="fs-18 alt-font fw-600 d-block text-dark-gray mb-5px"> Get in touch</span>
                                <a href="tel:12345678910"><?php echo $row['phone3']; ?></a><br>
                            </div>
                        </div>
                    </div> 
                <?php } } ?>
                    <div class="col-lg-6 align-self-start contact-form-style-03 position-relative"> 
                        <div class="bg-white box-shadow-double-large p-12 lg-p-9 border-radius-10px">
                            <h3 class="fw-700 alt-font text-dark-gray mb-30px sm-mb-20px">How can help you?</h3>
                            <!-- start contact form -->
<!--                             <form action="email-templates/contact-form.php" method="post">
 -->                            <form method="post">
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon text-medium-gray opacity-6"><i class="bi bi-emoji-smile"></i></span>
                                    <input class="ps-0 border-radius-0px bg-transparent border-color-extra-medium-gray form-control required" type="text" name="name" placeholder="Your name*" />
                                </div>
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon medium-gray opacity-6"><i class="bi bi-envelope"></i></span>
                                    <input class="ps-0 border-radius-0px bg-transparent border-color-extra-medium-gray form-control required" type="email" name="email" placeholder="Your email address*" />
                                </div>
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon text-medium-gray opacity-6"><i class="bi bi-telephone"></i></span>
                                    <input class="ps-0 border-radius-0px bg-transparent border-color-extra-medium-gray form-control" type="tel" name="phone" placeholder="Your phone" />
                                </div>
                                <div class="position-relative form-group form-textarea mt-15px mb-0"> 
                                    <textarea class="ps-0 border-radius-0px bg-transparent border-color-extra-medium-gray form-control" name="comment" placeholder="Your message" rows="3"></textarea>
                                    <span class="form-icon medium-gray opacity-6"><i class="bi bi-chat-square-dots"></i></span>
                                    <!-- <input type="hidden" name="redirect" value=""> -->
                                    <input class="btn btn-medium btn-base-color btn-round-edge mt-35px fw-600" type="submit" name="submit" value="Send message">
                                    <div class="form-results mt-20px d-none"></div>
                                </div>
                            </form>
                            <!-- end contact form -->
                        </div>
                    </div> 
                </div> 
            </div>
        </section>
        <!-- end section --> 
        <!-- start section -->
        <section class="bg-very-light-gray p-0">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-12 p-0">
                        <div id="map" class="map" data-map-options='{ "lat": -37.805688, "lng": 144.962312, "style": "Silver", "marker": { "type": "HTML", "class": "marker02", "color": "#06af47" }, "popup": { "defaultOpen": true, "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block\">Crafto Real Estate</strong><p>16122 Collins street, Melbourne, Australia</p></div><div class=\"google-maps-link\"> <a aria-label=\"View larger map\" target=\"_blank\" jstcache=\"31\" href=\"https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449\" jsaction=\"mouseup:placeCard.largerMap\">VIEW LARGER MAP</a></div>" } }'></div>
                    </div>
                </div> 
            </div>
        </section>
        <!-- end section -->  
        <!-- start section -->
        <section class="overlap-height half-section">
            <div class="container overlap-gap-section"> 
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-01 md-mb-40px">
                        <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                            <div class="feature-box-icon me-25px">
                                <img src="https://via.placeholder.com/150x150" class="h-85px" alt="">
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block fs-19 lh-26 alt-font text-dark-gray fw-600 w-75 lg-w-100">Take pride in our work.</span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-01 md-mb-40px">
                        <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                            <div class="feature-box-icon me-25px">
                                <img src="https://via.placeholder.com/150x150" class="h-85px" alt="">
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block fs-19 lh-26 alt-font text-dark-gray fw-600 w-75 lg-w-100">Inquire at any time.</span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-01 xs-mb-40px">
                        <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                            <div class="feature-box-icon me-25px">
                                <img src="https://via.placeholder.com/150x150" class="h-85px" alt="">
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block fs-19 lh-26 alt-font text-dark-gray fw-600 w-75 lg-w-100">Work with the supreme.</span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-01">
                        <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                            <div class="feature-box-icon me-25px">
                                <img src="https://via.placeholder.com/150x150" class="h-85px" alt="">
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block fs-19 lh-26 alt-font text-dark-gray fw-600 w-75 lg-w-100">Transparency in dealings.</span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>  
            </div>
        </section>
        <!-- end section -->
       <!-- start footer -->
       <footer class="footer-light bg-gradient-very-light-gray pb-0">
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