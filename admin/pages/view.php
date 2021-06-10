<?php
    require("../utils/auth.php");
    require("../utils/settings.php");
    $username = $_SESSION["username"];
    
    $id = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $select_product = "SELECT dh.tenKH, dh.sdt, dh.diaChi, sp.tenSP, tt.soLuong, tt.giaSP,(tt.soLuong * tt.giaSP) AS tongTien
                            FROM  hoadon hd
                            LEFT JOIN dathang dh ON (dh.idPhieu = hd.idPhieu)
                            LEFT JOIN thongtindathang tt ON (dh.idPhieu = tt.idPhieu)
                            LEFT JOIN sanpham sp ON (tt.idSP = sp.idSP)
                            WHERE hd.idHoaDon = ".$id;
        $result = mysqli_query($conn, $select_product);
    }
?>

<?php
    include("../pages/header.php");
?>
<!-- partial -->
<div class="page-body">
    <!-- partial:partials/_sidebar.html -->
    <div class="sidebar">
        <div class="user-profile">
        <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="/assets/images/profile/admin.png" alt="profile image">
        </div>
        <div class="info-wrapper">
            <p class="user-name"><?=$username?></p>
        </div>
        </div>
        <ul class="navigation-menu">
        <li class="nav-category-divider">Danh Mục</li>
        <li>
            <a href="index.php?page=dashboard">
            <span class="link-title">Tổng Quan</span>
            <i class="mdi mdi-gauge link-icon"></i>
            </a>
        </li>
        <li>
            <a href="index.php?page=product">
            <span class="link-title">Sản Phẩm</span>
            <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
        </li>
        <li>
            <a href="index.php?page=order">
            <span class="link-title">Đặt Hàng</span>
            <i class="mdi mdi-cart-outline link-icon"></i>
            </a>
        </li>
        <li>
            <a href="index.php?page=bill">
            <span class="link-title">Hóa Đơn</span>
            <i class="mdi mdi-clipboard-text link-icon"></i>
            </a>
        </li>
        <li>
            <a href="ndex.php?page=login">
            <span class="link-title"> Đăng Xuất</span>
            <i class="mdi mdi-logout link-icon"></i>
            </a>
        </li>
        </ul>
    </div>
    <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
            <div class="col-lg-12">
                <div class="grid">
                    <div class="grid-body">
                        <div class="item-wrapper">
                            <div class="row mb-12">
                                <p class="grid-header">Chi Tiết hóa đơn</p>
                                <div>
                                    <div class="btn btn-back has-icon btn-rounded">
                                        <i class="mdi mdi-keyboard-return"></i>
                                        <a href="/index.php?page=bill">Quay Lại</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table info-table">
                                        <thead>
                                            <tr>
                                                <th>Tên Khách Hàng</th>
                                                <th>Số ĐT</th>
                                                <th>Địa Chỉ</th>
                                                <th>Tên Sản Phẩm</th>
                                                <th>Số Lượng</th>
                                                <th>Giá Sản Phẩm</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($row = mysqli_fetch_array($result)) { ?>   
                                                <tr>
                                                    <td><?php echo $row["tenKH"]; ?></td>
                                                    <td><?php echo $row["sdt"]; ?></td>
                                                    <td><?php echo $row["diaChi"];?></td>
                                                    <td><?php echo $row["tenSP"]; ?></td>
                                                    <td><?php echo $row["soLuong"]; ?></td>
                                                    <td><?php echo $row["giaSP"];?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>    
<?php 
    include("./pages/footer.php")
?>