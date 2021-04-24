<?php
    require("./utils/settings.php");

    $sql = "SELECT dh.tenKH, dh.sdt, dh.diaChi, dh.maSP, dh.tenSP, dh.soluong, dh.giaSP
            FROM dathang dh";
    $result=mysqli_query($conn,$sql);
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
                                            <a href="#"><i class="mdi mdi-check"></i></a>
                                        </td>
                                        <td class="actions">
                                            <a href="#"><i class="mdi mdi-window-close"></i></a>
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