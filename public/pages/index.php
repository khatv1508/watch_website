<?php  
	require("../utils/connectDB.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Watch shop | Home</title>
</head>
 <?php include("../pages/header.html"); ?>
<body>
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
                $result=mysqli_query($conn,"SELECT * FROM sanpham sp LEFT JOIN anhsanpham asp ON (sp.idSP = asp.idSP) WHERE sp.loai =N'Đồng hồ nam'");
                for ($i=0; $i < 6; $i++){
                    $row = $result ->fetch_assoc();
                            echo
                                '
                                    <div style="float:left;width:33.33%; height:700px; "class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="single-popular-items mb-50 text-center"> 
                                                <a href="product_detail.php?id='.$row["idSP"].'">  
                                                    <div style="width:300px;height:380px" class="popular-img">'.$row["urlImage"].
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
                $result=mysqli_query($conn,"SELECT * FROM sanpham sp LEFT JOIN anhsanpham asp ON (sp.idSP = asp.idSP) WHERE sp.loai =N'Đồng hồ nữ'");
                for ($i=0; $i < 6; $i++){
                    $row = $result ->fetch_assoc();
                            echo
                                '
                                    <div style="float:left;width:33.33%; height:700px; "class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="single-popular-items mb-50 text-center"> 
                                                <a href="product_detail.php?id='.$row["idSP"].'">  
                                                    <div style="width:300px;height:380px" class="popular-img">'.$row["urlImage"].
                                                '</div></a>
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