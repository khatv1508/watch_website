<?php  
	require("../utils/connectDB.php");
    $sql = "SELECT * from sanpham";
    $result=mysqli_query($conn,$sql);
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Watch shop | Home</title>
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
        <link rel="stylesheet" href="../assets/css/aos.css">
</head>

<body>
   <?php include("../pages/header.html"); ?>
    <main>
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInRight" data-delay="0.4s" data-duration="2000ms">Select Your New Perfect Style</h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay="0.8s" data-duration="2000ms">
                                        <a href="shop.php" class="btn hero-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay="0.4s">
                                    <img style="height: 700px" src="../assets/img/banner/banner_index1.jpg" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div> 
             <div >
                <img style="float: right; width: 810px;height: 600px; margin-right: 80px; " src="../assets/img/banner/banner2.png" 
                    data-aos="fade-left"
                    data-aos-offset="400"
                    data-aos-easing="ease-in-sine" >
                    <img style="width: 810px;height: 600px;margin-left: 80px;" src="../assets/img/banner/banner.png" 
                    data-aos="fade-right"
                    data-aos-offset="400"
                    data-aos-easing="ease-in-sine" >
            </div> 
            <div>
                <img style="width: 1640px;height: 700px;margin-top: 20px; margin-left: 80px" src="../assets/img/banner/banner_index.png" 
                    data-aos="fade-up"
                    data-aos-offset="400"
                    data-aos-easing="ease-in-sine" >
            </div> 
        <div class="container">
            <div class="popular-items latest-padding">
                <div class="container">
                <div class="row product-btn justify-content-between mb-40">
                    <div class="properties__button">
                        <nav>                                                      
                            <div><b><h2 style="color: red;font-weight: bold;">Men's Watch</h2></b>
                            </div>
                        </nav>
                    </div>
                </div>
            <?php
                $sql = "SELECT * from sanpham WHERE Loai=N'Đồng hồ nam'";
                $result=mysqli_query($conn,$sql);
                for ($i=0; $i < 6; $i++){
                    $row = $result ->fetch_assoc();
                            echo
                                '
                                    <div style="float:left;width:33.33%; height:700px; "class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="single-popular-items mb-50 text-center"> 
                                                <a href="product_detail.php?id='.$row["idSP"].'">  
                                                    <div style="width:300px;height:380px" class="popular-img">'.$row["img"].
                                                '</div></a>
                                                    <div class="popular-caption">
                                                         <a href="product_detail.php?id='.$row["idSP"].'"> 
                                                            <h3>' .$row["tenSP"].'('.$row["maSP"].')</h3>
                                                            <h4 style="color:red;">'.number_format($row["giaSP"], 0,",",".").' VND</h4>
                                                            <span>'.$row["kieuMay"].'</span>
                                                        </a>
                                            </div>
                                        </div>
                                    </div>
                                ';
                         }
            ?>
            </div>
        </div>
        <div class="container">
            <div class="popular-items latest-padding">
                <div class="container">
                <div class="row product-btn justify-content-between mb-40">
                    <div class="properties__button">
                        <nav>                                                      
                            <div><h2 style="color: red;font-weight: bold;">Women's Watch</h2>
                            </div>
                        </nav>
                    </div>
                </div>
            <?php
                $sql = "SELECT * from sanpham WHERE Loai=N'Đồng hồ nữ'";
                $result=mysqli_query($conn,$sql);
                for ($i=0; $i < 6; $i++){
                    $row = $result ->fetch_assoc();
                            echo
                                '
                                    <div style="float:left;width:33.33%; height:700px; "class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="single-popular-items mb-50 text-center"> 
                                                <a href="product_detail.php?id='.$row["idSP"].'">  
                                                    <div style="width:300px;height:380px" class="popular-img">'.$row["img"].
                                                '</a>
                                                    <div class="img-cap">
                                                            <span>Add to cart</span> 
                                                        </div>
                                                        <div class="favorit-items">
                                                            <span class="flaticon-heart"></span>
                                                        </div>
                                                    </div>
                                                    <div class="popular-caption">
                                                            <h3>' .$row["tenSP"].'('.$row["maSP"].')</h3>
                                                            <h4 style="color:red;">'.number_format($row["giaSP"], 0,",",".").' VND</h4>
                                                            <span>'.$row["kieuMay"].'</span>
                                             
                                            </div>
                                        </div>
                                    </div>
                                ';
                         }
            ?>
            </div>
        </div>
    </main>
    <?php include("../pages/footer.html"); ?>
</body>
</html>