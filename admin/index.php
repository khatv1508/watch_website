<?php 
    require("./utils/auth.php");
    $id = $_SESSION["id"];
    $username = $_SESSION["username"];
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
    <!-- Layout style -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />
  </head>
  <body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper">
        <a href="index.html"></a>
      </div>
      <div class="t-header-content-wrapper">
        <div class="t-header-content">
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>
          <form action="#" class="t-header-search-box">
            <div class="input-group">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
              <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
            </div>
          </form>
        </div>
      </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
      <!-- partial:partials/_sidebar.html -->
      <div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="/assets/images/profile/admin.png" alt="profile image">
          </div>
          <div class="info-wrapper">
            <p class="user-name"><?php echo $username;?></p>
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
            <a href="./pages/login.php">
              <span class="link-title"> Đăng Xuất</span>
              <i class="mdi mdi-logout link-icon"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- partial -->
      <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
            switch ($page){
              case 'dashboard':
                include './pages/dashboard.php';
                break;
              case 'product':
                include './pages/product.php';
                break;
              case 'order':
                include './pages/order.php';
                break;  
              default: break;    
            }
          ?>
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