<?php include 'admin/dbconnect.php'; ?>
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
        <section class="cover-background page-title-big-typography ipad-top-space-margin" style="background-image: url(images/condos.jpg); background-repeat: no-repeat;">
            <div class="container">
                <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 position-relative page-title-extra-small md-mb-30px md-mt-auto" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="alt-font text-white fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Buy your dream Condominium</span></h2><br>
                        <h1 class="text-base-color">We help you find the perfect one</h1>
                        
                    </div>
                    <div class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto fs-22">
                        <font color="white"><b> <span class="d-block w-85 lg-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>We have got both residential and commercial condominiums that you can buy for accomodation or business and in good places worth your value. Choose a condominium below and we help you get it.</span></b></font>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
       
        <!-- start section --> 
        <section class="bg-very-light-gray z-index-3 position-relative">
            <div class="container"> 
                <div class="row mb-4 xs-mb-10 pt-9" id="rentals">
                    <div class="col-12 text-center">
                        <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Latest condominiums for <span class="fw-700 text-highlight">sale<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                    <!-- start box item -->
                    <?php $res =  mysqli_query($conn,"SELECT * FROM tbl_condominiums  WHERE front_view !=''");
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
                                <div class="col-auto bg-green border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Buy</div>
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
                                                <span class="fw-600 alt-font text-dark-gray"><?php echo $row['living_area']; ?></span>
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
                                        <span class="fs-15 alt-font text-dark-gray fw-700 mb-0">Price : <?php echo $row['price']; ?></span>
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
             <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- start footer column -->
                    <div class="col-auto d-flex flex-column flex-md-row align-items-center text-center text-md-start">
                        <div class="text-dark-gray fs-28 alt-font fw-500">1000+ condominiums ready for <span class="fw-700 text-decoration-line-bottom">rent.</span></div>
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