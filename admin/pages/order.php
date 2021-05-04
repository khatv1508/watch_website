<?php
    require("./utils/settings.php");
    $perPage = 10;
    $page = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;

    $sql = "SELECT dh.*
            FROM dathang dh
            LIMIT ".$perPage." OFFSET ". (($page * $perPage ) - $perPage);
    $result = mysqli_query($conn, $sql);

    $sql = "SELECT dh.*
            FROM dathang dh";

    $x = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($x);
    $totalPage = ceil($total / $perPage);

    // $id = '';
    // if(isset($_GET['id'])){
    //     $id = $_GET['id'];
    // }

    $type = isset($_GET['type']) ? $_GET['type'] : '';
    switch($type){
        case 'check';
            // $idPhieu = ''; $tenKH = ''; $idSP = ''; $maSP = ''; $tenSP = ''; $soLuong = ''; $gia = ''; 
            // // insert hoa don 
            // if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //     if(isset($_POST["masp"])) { $maSP = $_POST['masp']; }
            //     if(isset($_POST["tensp"])) { $tenSP = $_POST['tensp']; }
            //     if(isset($_POST["giasp"])) { $gia = $_POST['giasp']; }

            //     $insert_bill = "INSERT INTO hoadon(idPhieu, tenKH, idSP, maSP, tenSP, soluong, giaSP) VALUES ( $idPhieu, '$tenKH', $idSP, '$maSP', '$tenSP', $soLuong, $gia);"
            //     if ($result2 = mysqli_query($conn, $insert_bill) === TRUE ) {
            //         echo 
            //         '<div class="alert alert-success alert-dismissible fade show" role="alert">
            //             <strong>Thành công</strong>
            //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //             <span aria-hidden="true">&times;</span>
            //             </button>
            //         </div>';
            //     } else {
            //         echo 
            //         '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            //             <strong>Đã xảy ra lỗi !!!</strong>
            //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //             <span aria-hidden="true">&times;</span>
            //             </button>
            //         </div>';
            //     }
            // }    
            echo $type;
            break;
        case 'delete':
            // $select_order = "SELECT idPhieu FROM dathang";
            // $result = mysqli_query($conn, $select_order);
            // print_r($result);
            // exit;

            // delete dat hang
            // $delete_order = "DELETE FROM dathang WHERE idPhieu = ".$id;
            // var_dump($delete_order, $id);
            // exit;
            // if (mysqli_query($conn, $delete_order) === TRUE ) {
            //     echo 
            //     '<div class="alert alert-success alert-dismissible fade show" role="alert">
            //         <strong>Xóa thành công</strong>
            //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //         <span aria-hidden="true">&times;</span>
            //         </button>
            //     </div>';
            // } else {
            //     echo 
            //     '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            //         <strong>Đã xảy ra lỗi !!!</strong>
            //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //         <span aria-hidden="true">&times;</span>
            //         </button>
            //     </div>';
            // }
            // header('Location: /pages/index.php?page=order');
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
            <a href="#">Tổng Quan</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Đặt Hàng</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <div class="grid">
                <div class="header-tool">
                    <p class="grid-header">Đặt Hàng</p>
                        <div>
                            <div class="btn btn-refresh-order has-icon btn-rounded">
                                <i class="mdi mdi-refresh"></i>
                                <a href="#">Làm Mới</a>
                            </div>
                        </div>
                    </div>
                <div class="item-wrapper">
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
                                <?php while ($row = mysqli_fetch_array($result)) { ?>   
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