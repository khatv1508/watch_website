<?php 
    require("./utils/auth.php");
    $id = $_SESSION["id"];
    $username = $_SESSION["username"];
?>

<body class="header-fixed">
  <?php
    include("./pages/header.php");
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
          <a href="index.php?page=bill">
            <span class="link-title">Hóa Đơn</span>
            <i class="mdi mdi-clipboard-text link-icon"></i>
          </a>
        </li>
        <li>
          <a href="./pages/logout.php">
            <span class="link-title">Đăng Xuất</span>
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
            case 'bill':
              include './pages/bill.php';
              break;
            case 'logout':
              // include './pages/login.php';
              // header('Location: ./pages/logout.php');
              break;   
            case 'image':
              include './pages/image.php';
              break; 
            default: break;    
          }
        ?>
      </div>
    </div>
    <!-- page content ends -->
  </div>

  <?php 
    include("./pages/footer.php")
  ?>
</body>