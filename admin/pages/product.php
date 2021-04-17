<?php
    require("./utils/settings.php");
    $sql = "SELECT * from sanpham";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
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
                            <?php while ($row) { ?>
                            <tr>
                                <td><?php echo $row["firstname"]; ?></td>
                                <td><?php echo $row["lastname"]; ?></td>
                                <td><?php echo $row["city"];?></td>
                            </tr>
                            <?php } ?>
                                <tr>
                                    <td>Water Bottle</td>
                                    <td>874</td>
                                    <td>$546</td>
                                    <td>43%</td>
                                    <td class="actions">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Scissors</td>
                                    <td>345</td>
                                    <td>$124.99</td>
                                    <td>31%</td>
                                    <td class="actions">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rulers</td>
                                    <td>257</td>
                                    <td>$78.50</td>
                                    <td>28%</td>
                                    <td class="actions">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>White Board</td>
                                    <td>24</td>
                                    <td>$1244</td>
                                    <td>56%</td>
                                    <td class="actions">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>