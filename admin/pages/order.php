<?php
    require("./utils/settings.php");

    $sql = "SELECT dh.tenKH, dh.sdt, dh.diaChi, dh.maSP, dh.tenSP, dh.soluong, dh.giaSP
            FROM dathang dh";
    $result=mysqli_query($conn,$sql);

    $type = isset($_GET['type']) ? $_GET['type'] : '';
    switch($type){
        case 'check';
            echo $type;
            break;
        case 'delete':
                // echo 
                // '<div class="alert alert-success alert-dismissible fade show" role="alert">
                //     <strong>Xóa sản phẩm thành công</strong>
                //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                //     <span aria-hidden="true">&times;</span>
                //     </button>
                // </div>';
                // echo 
                // '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                //     <strong>Đã xảy ra lỗi !!!</strong>
                //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                //     <span aria-hidden="true">&times;</span>
                //     </button>
                // </div>';
                echo $type;
            break;
        default:
            break;
    }
?>
<div class="content-viewport">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb has-arrow">
        <li class="breadcrumb-item">
            <a href="#">Tổng Quan</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Đặt Hàng</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <div class="grid">
                <p class="grid-header">Đặt Hàng</p>
                <div class="item-wrapper">
                    <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table info-table">
                            <thead>
                                <tr>
                                    <th>tên Khách Hàng</th>
                                    <th>SDT khách Hàng</th>
                                    <th>Địa Chỉ</th>
                                    <th>Mã sản Phẩm</th>
                                    <th>Tên sản Phẩm</th>
                                    <th>Số Lượng</th>
                                    <th>Giá Sản Phẩm </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) { ?>   
                                    <tr>
                                        <td><?php echo $row["tenKH"]; ?></td>
                                        <td><?php echo $row["sdt"]; ?></td>
                                        <td><?php echo $row["diaChi"];?></td>
                                        <td><?php echo $row["maSP"]; ?></td>
                                        <td><?php echo $row["tenSP"]; ?></td>
                                        <td><?php echo $row["soluong"];?></td>
                                        <td><?php echo $row["giaSP"];?></td>
                                        <td class="actions">
                                            <a href="/pages/index.php?page=order&type=check"><i class="mdi mdi-check"></i></a>
                                        </td>
                                        <td class="actions">
                                            <a href="/pages/index.php?page=order&type=delete"><i class="mdi mdi-window-close"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pages">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
    </div>
</div>