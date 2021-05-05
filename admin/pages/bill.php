<?php
    require("./utils/settings.php");
    $perPage = 10;
    $page = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;

    $sql = "SELECT hd.*
            FROM hoadon hd
            LIMIT ".$perPage." OFFSET ". (($page * $perPage ) - $perPage);
    $result = mysqli_query($conn, $sql);

    $sql = "SELECT hd.*
            FROM hoadon hd";

    $x = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($x);
    $totalPage = ceil($total / $perPage);
?>
<?php
    include("./pages/header.php");
?>
<div class="content-viewport">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb has-arrow">
        <li class="breadcrumb-item">
            <a href="dashboard.php">Tổng Quan</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Hóa Đơn</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <div class="grid">
                <div class="item-wrapper">
                    <div class="header-tool">
                        <p class="grid-header">Danh Sách Hóa Đơn</p>
                        <div>
                            <div class="btn btn-refresh-product has-icon btn-rounded">
                                <i class="mdi mdi-refresh"></i>
                                <a href="#">Làm Mới</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table info-table">
                            <thead>
                                <tr>
                                    <th>Tên Khách Hàng</th>
                                    <th>Mã Sản Phẩm</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Số Lượng</th>
                                    <th>Giá Sản Phẩm </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_array($result)) { ?>   
                                    <tr>
                                        <td><?php echo $row["tenKH"]; ?></td>
                                        <td><?php echo $row["maSP"]; ?></td>
                                        <td><?php echo $row["tenSP"];?></td>
                                        <td><?php echo $row["soluong"]; ?></td>
                                        <td><?php echo $row["giaSP"];?></td>
                                        <!-- <td class="actions">
                                            <a href="/pages/view.php?id=<?=$row["idHoaDon"];?>"><i class="mdi mdi-eye"></i></a>
                                        </td> -->
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php $class = (($page - 1) != 0) ? '' : "disabled"; ?>                          
            <li class="page-item <?=$class?>">
                <a class="page-link" href="/index.php?page=product&pageNum=<?=$page - 1?>">Previous</a> 
            </li>

            <?php for($i = 1; $i <= $totalPage; $i++){ 
                    $activeClass = ($i == $page) ? 'active' : '';
            ?>
            <li class="page-item <?=$activeClass?>">
                <a class="page-link" href="/index.php?page=product&pageNum=<?=$i?>"><?=$i?></a>
            </li>
            <?php } ?>
            <?php $class = (($page + 1) <= $totalPage) ? '' : "disabled"; ?> 
            <li class="page-item <?=$class?>"><a class="page-link" href="/index.php?page=product&pageNum=<?=$page + 1?>">Next</a></li>
        </ul>
    </nav>
</div>