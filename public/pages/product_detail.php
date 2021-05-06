<?php
    require("../utils/connectDB.php");
    $sql ="SELECT * FROM sanpham WHERE idSP=".$_GET["id"];
    $result =mysqli_query($conn,$sql);
    $row = $result ->fetch_assoc();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Watch Shop | Detail</title>
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
    <?php include("../pages/header.html"); ?>
    <main>
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Product</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row_detail">
            <?php  
                echo 
                    "
                           ".$row['img']."
                            <h1>".$row['tenSP']."(".$row['maSP'].")</h1><br><br>
                            <h4>Giá bán: </h4><h3>".number_format($row['giaSP'], 0,",",".")."</h3><br><br>
                            <h2>Thông số kĩ thuật</h2><br><br>
                            <h4>Thương hiệu: </h4><h3>".$row['hangSP']."</h3><br>
                            <h4>Xuất xứ: </h4><h3>".$row['xuatXu']."</h3><br>
                            <h4>Kiểu máy: </h4><h3>".$row['kieuMay']."</h3><br>
                            <h4>Đồng hồ: </h4><h3>".$row['loai']."</h3><br>
                            <h4>Đường kính: </h4><h3>".$row['duongKinh']."</h3><br>
                            <h4>Chất liệu vỏ: </h4><h3>".$row['chatLieuVo']."</h3><br>
                            <h4>Chất liệu dây: </h4><h3>".$row['chatLieuDay']."</h3><br>
                            <h4>Chất liệu kính: </h4><h3>".$row['chatLieuKinh']."</h3><br>
                            <h4>Độ chịu nước: </h4><h3>".$row['doChiuNuoc']."
                    ";
            ?>
        </div> 
        <form style="margin-top: 60px;" action="cart.php?action=add" method="POST"> 
            <input type="text" value="1" name="soluong[<?= $row['idSP'] ?>]"size="2">
            <input style=" margin-left: 800px;margin-right: 800px;background-color: red;clear: left;width: 250px;height: 80px;color: white;" type="submit" value="Add to card">
        </form> 
    </main>
    <?php include("../pages/footer.html"); ?>
</body>
</html>