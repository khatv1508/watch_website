<?php  
	require("../utils/connectDB.php");
    $sql = "SELECT * from sanpham WHERE Loai=N'Đồng hồ nam'";
    $result=mysqli_query($conn,$sql);
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Watch Shop | Men's Watch</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

    <!-- CSS here -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/css/flaticon.css">
        <link rel="stylesheet" href="../assets/css/slicknav.css">
        <link rel="stylesheet" href="../assets/css/animate.min.css">
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../assets/css/slick.css">
        <link rel="stylesheet" href="../assets/css/nice-select.css">
        <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img style="width: 300px;height: 200px" src="../assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="shop.php">Shop</a></li>
                                    <li class="hot"><a href="shop.php">Product</a>
                                        <ul class="submenu">
                                            <li><a href="menproduct.php">Men's Watch</a></li>
                                            <li><a href="womenproduct.php">Women's Watch</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                       <div class="header-right">
                            <ul>
                                <li><a href="cart.php"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Men's Watch</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- Latest Products Start -->
        <div class="container">
        <section class="popular-items latest-padding">
            <div class="container">
                <div class="row product-btn justify-content-between mb-40">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>                                                      
                            <div> <h2>Product</h2>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                    <!-- Grid and List view -->
                    <div class="grid-list-view">
                    </div>
                    <!-- Select items -->
                    <div class="select-this">
                        <form action="#">
                            <div class="select-itms">
                                <select name="select" id="select1">
                                    <option value="">40 per page</option>
                                    <option value="">50 per page</option>
                                    <option value="">60 per page</option>
                                    <option value="">70 per page</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                       <?php while ($row = $result ->fetch_assoc()){
                            echo
                                '
                                    <div style="float:left;width:33.33%; height:700px; "class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="single-popular-items mb-50 text-center"> 
                                                    <div style="width:300px;height:380px" class="popular-img">'.$row["img"].
                                                    '<div class="img-cap">
                                                            <span>Add to cart</span> 
                                                        </div>
                                                        <div class="favorit-items">
                                                            <span class="flaticon-heart"></span>
                                                        </div>
                                                    </div>
                                                    <div class="popular-caption">
                                                            <h3>' .$row["tenSP"].'('.$row["maSP"].')</h3>
                                                            <h4>'.$row["giaSP"].'</h4>
                                                            <span>'.$row["kieuMay"].'</span>
                                             
                                            </div>
                                        </div>
                                    </div>
                                ';
                         }
                        ?>
                    </div>
                    <!-- Card two -->
                    
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
    </div>
    </main>
    <div class="pagecontact">
        <hr/>
        <h4>
            <ul>
                <li>
                    <span><img style="height: 20px;width: 20px" src="../assets/img/icon/location.png"></span>
                    <span>470 Đường Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng </span>
                </li>
                <li>
                    <span><img style="height: 20px;width: 20px" src="../assets/img/icon/telephone.png"></span>
                    <span>0123456788</span>
                </li>
                <li>
                    <span><img style="height: 20px;width: 20px" src="../assets/img/icon/email.png"></span>
                    <span>contact@gmail.com</span>
                </li>
            </ul>
        </h4>
    </div>
    <footer style="clear: left; text-align: center;;background-color: #DDDDDD">
        <hr/>
        <!-- Footer Start-->
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with </i> by <a href="https://colorlib.com" target="_blank">KD</a>
</p></div></footer>
<!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="./../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./../assets/js/popper.min.js"></script>
    <script src="./../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./../assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./../assets/js/owl.carousel.min.js"></script>
    <script src="./../assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./../assets/js/wow.min.js"></script>
    <script src="./../assets/js/animated.headline.js"></script>
    <script src="./../assets/js/jquery.magnific-popup.js"></script>

    <!-- Scroll up, nice-select, sticky -->
    <script src="./../assets/js/jquery.scrollUp.min.js"></script>
    <script src="./../assets/js/jquery.nice-select.min.js"></script>
    <script src="./../assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./../assets/js/contact.js"></script>
    <script src="./../assets/js/jquery.form.js"></script>
    <script src="./../assets/js/jquery.validate.min.js"></script>
    <script src="./../assets/js/mail-script.js"></script>
    <script src="./../assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./../assets/js/plugins.js"></script>
    <script src="./../assets/js/main.js"></script>
    
</body>
</html>