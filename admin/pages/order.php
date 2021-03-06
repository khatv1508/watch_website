<?php
    require("./utils/settings.php");
    $perPage = 10;
    $page = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;

    $sql = "SELECT dh.idPhieu, dh.tenKH, dh.sdt, dh.diaChi, sp.maSP, sp.tenSP, dh.tongSoLuong, 
                    dh.tongTien, dh.trangThai
            FROM dathang dh 
            LEFT JOIN thongtindathang tt ON (dh.idPhieu = tt.idPhieu)
            LEFT JOIN sanpham sp ON (tt.idSP = sp.idSP)
            WHERE trangThai = 1
            GROUP BY dh.tenKH
            LIMIT ".$perPage." OFFSET ". (($page * $perPage ) - $perPage);
    $result = mysqli_query($conn, $sql);

    $sql = "SELECT dh.idPhieu, dh.tenKH, dh.sdt, dh.diaChi, sp.maSP, sp.tenSP, dh.tongSoLuong, 
                    dh.tongTien, dh.trangThai
            FROM dathang dh 
            LEFT JOIN thongtindathang tt ON (dh.idPhieu = tt.idPhieu)
            LEFT JOIN sanpham sp ON (tt.idSP = sp.idSP)
            GROUP BY dh.tenKH";

    $x = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($x);
    $totalPage = ceil($total / $perPage);

    $id = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $type = isset($_GET['type']) ? $_GET['type'] : '';
    switch($type){
        case 'check';
            $idSP = ''; 
            // get don hang
            $select_order = "SELECT dh.idPhieu, dh.tenKH, dh.sdt, dh.diaChi, dh.tongSoLuong, 
                                    dh.tongTien, dh.trangThai
                            FROM dathang dh 
                            LEFT JOIN thongtindathang tt ON (dh.idPhieu = tt.idPhieu)
                            LEFT JOIN sanpham sp ON (tt.idSP = sp.idSP)
                            WHERE dh.idPhieu = ".$id;
            $result = mysqli_query($conn, $select_order); 
            $value = $result->fetch_object();

            

            $insert_bill = "INSERT INTO hoadon(idPhieu) 
                            VALUES ($id);";
            
            if (mysqli_query($conn, $insert_bill) === TRUE ) {
                // update trang thai
                $update_product = "UPDATE dathang 
                                    SET trangThai = 0 
                                    WHERE idPhieu = ".$id;

                if (mysqli_query($conn, $update_product) === TRUE){

                    $select_infomation = "SELECT * FROM thongtindathang WHERE idPhieu = ".$id;
                    $result1 = mysqli_query($conn, $select_infomation);

                    try{
                        while ($row = mysqli_fetch_array($result1)){
                            $update_warehouse = "UPDATE nhapkho
                                                    SET soLuong = soLuong - ".$row["soLuong"]."
                                                    WHERE idSP = ".$row["idSP"];
                            mysqli_query($conn, $update_warehouse);
                        } 
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Th??nh c??ng</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';   
                    }
                    catch(Exception $e) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>???? x???y ra l???i !!!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                    }
                }
            }
            break;
        case 'delete':
            //delete dat hang
            $delete_order = "DELETE FROM dathang WHERE idPhieu = ".$id;

            if (mysqli_query($conn, $delete_order) === TRUE ) {
                echo 
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>X??a th??nh c??ng</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            } else {
                echo 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>???? x???y ra l???i !!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            }
            break;
        default:
            break;
    }
?>
<?php
    include("./pages/header.php");
?>
<div class="content-viewport">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb has-arrow">
        <li class="breadcrumb-item">
            <a href="#">T???ng Quan</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">?????t H??ng</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <div class="grid">
                <div class="header-tool">
                    <p class="grid-header">?????t H??ng</p>
                        <div>
                            <div class="btn btn-refresh-order has-icon btn-rounded">
                                <i class="mdi mdi-refresh"></i>
                                <a href="#">L??m M???i</a>
                            </div>
                        </div>
                    </div>
                <div class="item-wrapper">
                    <div class="table-responsive">
                        <table class="table info-table">
                            <thead>
                                <tr>
                                    <th>t??n Kh??ch H??ng</th>
                                    <th>SDT kh??ch H??ng</th>
                                    <th>?????a Ch???</th>
                                    <th>S??? L?????ng</th>
                                    <th>T???ng Ti???n</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_array($result)) { ?>   
                                    <tr>
                                        <td><?php echo $row["tenKH"]; ?></td>
                                        <td><?php echo $row["sdt"]; ?></td>
                                        <td><?php echo $row["diaChi"];?></td>
                                        <td><?php echo $row["tongSoLuong"];?></td>
                                        <td><?php echo $row["tongTien"];?></td>
                                        <td class="actions">
                                            <a href="/pages/index.php?page=order&type=check&id=<?=$row["idPhieu"]?>"><i class="mdi mdi-check"></i></a>
                                        </td>
                                        <td class="actions">
                                            <a href="/pages/index.php?page=order&type=delete&id=<?=$row["idPhieu"]?>"><i class="mdi mdi-window-close"></i></a>
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
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php $class = (($page - 1) != 0) ? '' : "disabled"; ?>                          
            <li class="page-item <?=$class?>">
                <a class="page-link" href="/index.php?page=order&pageNum=<?=$page - 1?>">Previous</a> 
            </li>

            <?php for($i = 1; $i <= $totalPage; $i++){ 
                    $activeClass = ($i == $page) ? 'active' : '';
            ?>
            <li class="page-item <?=$activeClass?>">
                <a class="page-link" href="/index.php?page=order&pageNum=<?=$i?>"><?=$i?></a>
            </li>
            <?php } ?>
            <?php $class = (($page + 1) <= $totalPage) ? '' : "disabled"; ?> 
            <li class="page-item <?=$class?>"><a class="page-link" href="/index.php?page=order&pageNum=<?=$page + 1?>">Next</a></li>
        </ul>
    </nav>
</div>

<?php 
    include("./pages/footer.php")
?>