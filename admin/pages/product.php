<?php
    require("./utils/settings.php");
    $sql = "SELECT * from sanpham ";
    $result=mysqli_query($conn,$sql);
?>
<div class="content-viewport">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb has-arrow">
        <li class="breadcrumb-item">
            <a href="dashboard.php">Tổng Quan</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <div class="grid">
                <div class="item-wrapper">
                    <div class="table-responsive">
                        <table class="table info-table">
                            <thead>
                                <tr>
                                    <th>Mã Sản Phẩm</th>
                                    <th>Thương Hiệu</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Loại</th>
                                    <th>Số Lượng</th>
                                    <th>Đơn Vị Tính</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) { ?>   
                                    <tr>
                                        <td><?php echo $row["MaSP"]; ?></td>
                                        <td><?php echo $row["HangSP"]; ?></td>
                                        <td><?php echo $row["TenSP"];?></td>
                                        <td><?php echo $row["Loai"]; ?></td>
                                        <td><?php echo $row["SoLuong"]; ?></td>
                                        <td><?php echo $row["DVT"];?></td>
                                        <td class="actions">
                                            <i class="mdi mdi-dots-vertical"></i>
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
</div>