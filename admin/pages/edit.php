<?php 
    require("../utils/auth.php");
    require("../utils/settings.php");
    $username = $_SESSION["username"]; 
    
    $type = isset($_GET['type']) ? $_GET['type'] : '';
    switch($type){
        case 'edit':
            $id = '';
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $select_product = "SELECT sp.* , nk.soLuong, nk.dvt
                                    FROM sanpham sp
                                    INNER JOIN nhapkho nk ON (sp.idSP = nk.idSP)
                                    WHERE sp.idSP = ".$id;
                $result = mysqli_query($conn, $select_product);
                $value = $result->fetch_object();
            }
            
            break;
        case 'save':
            header('Location: /index.php?page=product&type=edit');
            break;
        default:
            break;
    }    
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>ADMIN</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="/assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
        <!-- endinject -->
        <!-- vendor css for this page -->
        <!-- End vendor css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="/assets/css/shared/style.css">
        <!-- endinject -->
        <!-- Layout style -->
        <link rel="stylesheet" href="/assets/css/demo_1/style.css">
        <link rel="stylesheet" href="/assets/css/demo_1/mycss.css">
        <!-- Layout style -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico" />
    </head>
    <body class="header-fixed">
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
            <!-- partial -->
            <div class="page-content-wrapper">
                <div class="page-content-wrapper-inner">
                    <div class="col-lg-12">
                        <div class="grid">
                            <div class="grid-body">
                                <div class="item-wrapper">
                                    <div class="row mb-12">
                                        <p class="grid-header">Thêm Và Chỉnh Sửa Sản Phẩm </p>
                                        <div>
                                            <div class="btn btn-back has-icon btn-rounded">
                                                <i class="mdi mdi-keyboard-return"></i>
                                                <a href="/index.php?page=product">Quay Lại</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <form action="<?php if($type == 'insert'){ ?>
                                                /index.php?page=product&type=insert 
                                                <?php } else { ?>/index.php?page=product&type=edit&id=<?=$id?><?php } ?>" method='POST'> 
                                                <?php if($type != 'insert'){ ?>
                                                    <div class="form-group row showcase_row_area">
                                                        <div class="col-md-1 showcase_text_area">
                                                            <label>Id</label>
                                                        </div>
                                                        <div class="col-md-5 showcase_content_area">
                                                            <input type="text" class="form-control" name="id" value='<?php echo(isset($value->idSP) ? $value->idSP : '') ?>' disabled>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <label>Mã Sản Phẩm</label>
                                                    </div>
                                                        <div class="col-md-5 showcase_content_area">
                                                        <input type="text" class="form-control" name="masp" value='<?php echo(isset($value->maSP) ? $value->maSP : '') ?>'>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <label>Thương Hiệu</label>
                                                    </div>
                                                    <div class="col-md-5 showcase_content_area">
                                                        <input type="text" class="form-control" name="hangsp" value='<?php echo(isset($value->hangSP) ? $value->hangSP : '') ?>'>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <label>Tên Sản Phẩm</label>
                                                    </div>
                                                    <div class="col-md-5 showcase_content_area">
                                                        <input type="text" class="form-control" name="tensp" value='<?php echo(isset($value->tenSP) ? $value->tenSP : '') ?>'> 
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <label>Xuất Xứ</label>
                                                    </div>
                                                    <div class="col-md-5 showcase_content_area">
                                                        <input type="text" class="form-control" name="xuatxu" value='<?php echo(isset($value->xuatXu) ? $value->xuatXu : '') ?>'>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <label>Kiểu Máy</label>
                                                    </div>
                                                    <div class="col-md-5 showcase_content_area">
                                                        <input type="text" class="form-control" name="kieumay" value='<?php echo(isset($value->kieuMay) ? $value->kieuMay : '') ?>'>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <label>Loại</label>
                                                    </div>
                                                    <div class="col-md-5 showcase_content_area">
                                                        <input type="text" class="form-control" name="loai" value='<?php echo(isset($value->loai) ? $value->loai : '') ?>'>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <label>Đường Kính</label>
                                                    </div>
                                                    <div class="col-md-5 showcase_content_area">
                                                        <input type="text" class="form-control" name="duongkinh" value='<?php echo(isset($value->duongKinh) ? $value->duongKinh : '') ?>'>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <label>Chất Liệu Vỏ</label>
                                                    </div>
                                                    <div class="col-md-5 showcase_content_area">
                                                        <input type="text" class="form-control" name="chatlieuvo" value='<?php echo(isset($value->chatLieuVo) ? $value->chatLieuVo : '') ?>'>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <label>Chất Liệu Dây</label>
                                                    </div>
                                                    <div class="col-md-5 showcase_content_area">
                                                        <input type="text" class="form-control" name="chatlieuday" value='<?php echo(isset($value->chatLieuDay) ? $value->chatLieuDay : '') ?>'>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <label>Chất Liệu Kính</label>
                                                    </div>
                                                    <div class="col-md-5 showcase_content_area">
                                                        <input type="text" class="form-control" name="chatlieukinh" value='<?php echo(isset($value->chatLieuKinh) ? $value->chatLieuKinh : '') ?>'>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <label>Độ Chịu Nước</label>
                                                    </div>
                                                    <div class="col-md-5 showcase_content_area">
                                                        <input type="text" class="form-control" name="dochiunuoc" value='<?php echo(isset($value->doChiuNuoc) ? $value->doChiuNuoc : '') ?>'>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <label>Giá</label>
                                                    </div>
                                                    <div class="col-md-5 showcase_content_area">
                                                        <input type="number" class="form-control" name="giasp" value='<?php echo(isset($value->giaSP) ? $value->giaSP : '') ?>'>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <label>Số Lượng</label>
                                                    </div>
                                                    <div class="col-md-5 showcase_content_area">
                                                        <input type="number" class="form-control" name="soLuong" value='<?php echo(isset($value->soLuong) ? $value->soLuong : '') ?>'>
                                                    </div>
                                                </div>
                                                <?php if($type != 'edit'){ ?>
                                                    <div class="form-group row showcase_row_area">
                                                        <div class="col-md-1 showcase_text_area">
                                                            <label>Đơn Vị Tính</label>
                                                        </div>
                                                        <div class="col-md-5 showcase_content_area">
                                                            <input type="text" class="form-control" name="dvt" value='<?php echo(isset($value->dvt) ? $value->dvt : '') ?>'>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <?php if($type != 'edit'){ ?>
                                                    <div class="form-group row showcase_row_area">
                                                        <div class="col-md-1 showcase_text_area">
                                                            <label>Ngày Nhập</label>
                                                        </div>
                                                        <div class="col-md-5 showcase_content_area">
                                                            <input type="date" class="form-control" name="ngaynhap" value='<?php echo(isset($value->ngayNhap) ? $value->ngayNhap : '') ?>'>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-1 showcase_text_area">
                                                        <button type="submit" class="btn btn-primary btn-block">Thêm</button>
                                                    </div>
                                                    <div class="col-md-1 showcase_text_area">
                                                        <button type="submit" class="btn btn-primary btn-block">Lưu</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- page content ends -->
        </div>
        <!--page body ends -->
        <!-- SCRIPT LOADING START FORM HERE /////////////-->
        <!-- plugins:js -->
        <script src="/assets/vendors/js/core.js"></script>
        <!-- endinject -->
        <!-- Vendor Js For This Page Ends-->
        <script src="/assets/vendors/apexcharts/apexcharts.min.js"></script>
        <script src="/assets/vendors/chartjs/Chart.min.js"></script>
        <script src="/assets/js/charts/chartjs.addon.js"></script>
        <!-- Vendor Js For This Page Ends-->
        <!-- build:js -->
        <script src="/assets/js/template.js"></script>
        <script src="/assets/js/dashboard.js"></script>
        <!-- endbuild -->
    </body>
</html>