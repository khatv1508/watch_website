<?php  
	require("../utils/connectDB.php");
    $result=mysqli_query($conn,"SELECT * FROM sanpham sp LEFT JOIN anhsanpham asp ON (sp.idSP = asp.idSP) WHERE sp.loai =N'Đồng hồ nữ'");
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Watch shop |  Women's Watch</title>
</head>
<?php include("../pages/header.html"); ?>
<body>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Women's Watch</h2>
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
                    <!-- Card two -->
                    
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
    </div>
    </main>
    <?php include("../pages/footer.html"); ?>
</body>
</html>