<?php
    require("./utils/settings.php");
    $perPage = 15;
    $page = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;
    
    // do du lieu
    $sql = "SELECT sp.idSP, sp.maSP, sp.hangSP, sp.tenSP, sp.loai, nk.soluong, nk.dvt, sp.giaSP
            FROM sanpham sp
            LEFT JOIN nhapkho nk ON (sp.idSP = nk.idSP) 
            LIMIT ".$perPage." OFFSET ". (($page * $perPage ) - $perPage);
    $result = mysqli_query($conn, $sql);

    $sql = "SELECT sp.idSP, sp.maSP, sp.hangSP, sp.tenSP, sp.loai, nk.soluong, nk.dvt, sp.giaSP
            FROM sanpham sp
            LEFT JOIN nhapkho nk ON (sp.idSP = nk.idSP)"; 

    $x = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($x);
    $totalPage = ceil($total / $perPage);

    $id = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $type = isset($_GET['type']) ? $_GET['type'] : '';
    switch($type){
        case 'insert':
            $maSP = ''; $hang = ''; $tenSP = ''; $xuatXu = ''; $kieuMay = ''; $loai = ''; 
            $duongKinh = ''; $chatLieuVo = ''; $chatLieuDay = ''; $chatLieuKinh = ''; 
            $doChiuNuoc = ''; $gia = ''; $soLuong = ''; $dvt = ''; $ngayNhap = '';

            // Lấy giá trị POST từ form vừa submit
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(isset($_POST["masp"])) { $maSP = $_POST['masp']; }
                if(isset($_POST["hangsp"])) { $hang = $_POST['hangsp']; }
                if(isset($_POST["tensp"])) { $tenSP = $_POST['tensp']; }
                if(isset($_POST["xuatxu"])) { $xuatXu = $_POST['xuatxu']; }
                if(isset($_POST["kieumay"])) { $kieuMay = $_POST['kieumay']; }
                if(isset($_POST["loai"])) { $loai = $_POST['loai']; }
                if(isset($_POST["duongkinh"])) { $duongKinh = $_POST['duongkinh']; }
                if(isset($_POST["chatlieuvo"])) { $chatLieuVo = $_POST['chatlieuvo']; }
                if(isset($_POST["chatlieuday"])) { $chatLieuDay = $_POST['chatlieuday']; }
                if(isset($_POST["chatlieukinh"])) { $chatLieuKinh = $_POST['chatlieukinh']; }
                if(isset($_POST["dochiunuoc"])) { $doChiuNuoc = $_POST['dochiunuoc']; }
                if(isset($_POST["giasp"])) { $gia = $_POST['giasp']; }
            
                // insert san pham
                $insert_product = "INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) 
                VALUES ('$maSP','$hang','$tenSP','$xuatXu','$kieuMay','$loai','$duongKinh','$chatLieuVo','$chatLieuDay','$chatLieuKinh','$doChiuNuoc', $gia);";
            
                if ($result1 = mysqli_query($conn, $insert_product) === TRUE ) {
                    $idSP = $conn->insert_id;
                    
                    if(isset($_POST["soluong"])) { $soLuong = $_POST['soluong']; }
                    if(isset($_POST["dvt"])) { $dvt = $_POST['dvt']; }
                    if(isset($_POST["ngaynhap"])) { $ngayNhap = $_POST['ngaynhap']; }
                    // insert nhap kho
                    $inser_Warehouse ="INSERT INTO nhapkho(idSP, maSP, soluong, dvt, ngayNhap) VALUES ($idSP, '$maSP', $soLuong, '$dvt', '$ngayNhap');";
                }

                if ($result2 = mysqli_query($conn, $inser_Warehouse) === TRUE ) {
                    // $idSP = $conn->insert_id;

                    // if(isset($_POST["soluong"])) { $soLuong = $_POST['soluong']; }
                    echo 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Thêm sản phẩm thành công</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                } else {
                    echo 
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Đã xảy ra lỗi !!!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                }
            }    
            break;
        case 'edit':
            //update san pham
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(isset($_POST["masp"])) { $maSP = $_POST['masp']; }
                if(isset($_POST["hangsp"])) { $hang = $_POST['hangsp']; }
                if(isset($_POST["tensp"])) { $tenSP = $_POST['tensp']; }
                if(isset($_POST["xuatxu"])) { $xuatXu = $_POST['xuatxu']; }
                if(isset($_POST["kieumay"])) { $kieuMay = $_POST['kieumay']; }
                if(isset($_POST["loai"])) { $loai = $_POST['loai']; }
                if(isset($_POST["duongkinh"])) { $duongKinh = $_POST['duongkinh']; }
                if(isset($_POST["chatlieuvo"])) { $chatLieuVo = $_POST['chatlieuvo']; }
                if(isset($_POST["chatlieuday"])) { $chatLieuDay = $_POST['chatlieuday']; }
                if(isset($_POST["chatlieukinh"])) { $chatLieuKinh = $_POST['chatlieukinh']; }
                if(isset($_POST["dochiunuoc"])) { $doChiuNuoc = $_POST['dochiunuoc']; }
                if(isset($_POST["giasp"])) { $gia = $_POST['giasp']; }

                $update_product = "UPDATE sanpham 
                                    SET maSP = '$maSP', 
                                        hangSP = '$hang', 
                                        tenSP = '$tenSP', 
                                        xuatXu = '$xuatXu', 
                                        kieumay = '$kieuMay', 
                                        loai = '$loai', 
                                        duongKinh = '$duongKinh', 
                                        chatLieuVo = '$chatLieuVo', 
                                        chatLieuDay = '$chatLieuDay', 
                                        chatLieuKinh = '$chatLieuKinh', 
                                        doChiuNuoc = '$doChiuNuoc', 
                                        giaSP = '$gia' 
                                    WHERE idSP = $id";
                if ($result1=mysqli_query($conn, $update_product) === TRUE ) {
                    if(isset($_POST["soluong"])) { $soLuong = $_POST['soluong']; }

                    $update_Warehouse = "UPDATE nhapkho 
                                        SET soluong = '$soLuong'
                                        WHERE idSP = $id";
                }
                if ($result2 = mysqli_query($conn, $update_Warehouse) === TRUE ) {
                    echo 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Sửa sản phẩm thành công</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                } else {
                    echo 
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Đã xảy ra lỗi !!!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                }
            }
            break;
        case 'delete':
            // delete nhap kho
            $delete_Warehouse = "DELETE FROM nhapkho WHERE idSP = ".$id;
            if (mysqli_query($conn, $delete_Warehouse) === TRUE ) {

                // delete san pham
                $delete_product = "DELETE FROM sanpham WHERE idSP = ".$id;
            }
            if (mysqli_query($conn, $delete_product) === TRUE ) {
                echo 
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Xóa sản phẩm thành công</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            } else {
                echo 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Đã xảy ra lỗi !!!</strong>
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
            <a href="dashboard.php">Tổng Quan</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <div class="grid">
                <div class="item-wrapper">
                    <div class="header-tool">
                        <p class="grid-header">Danh Sách Sản Phẩm</p>
                        <div>
                            <div class="btn btn-refresh-product has-icon btn-rounded">
                                <i class="mdi mdi-refresh"></i>
                                <a href="#">Làm Mới</a>
                            </div>
                            <div class="btn btn-success has-icon btn-rounded">
                                <i class="mdi mdi-plus"></i>
                                <a href="/pages/edit.php?type=insert">Thêm Mới</a>
                            </div>
                        </div>
                    </div>
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
                                    <th>Giá Sản Phẩm </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_array($result)) { ?>   
                                    <tr>
                                        <td><?php echo $row["maSP"]; ?></td>
                                        <td><?php echo $row["hangSP"]; ?></td>
                                        <td><?php echo $row["tenSP"];?></td>
                                        <td><?php echo $row["loai"]; ?></td>
                                        <td><?php echo $row["soluong"]; ?></td>
                                        <td><?php echo $row["dvt"];?></td>
                                        <td><?php echo $row["giaSP"];?></td>
                                        <td class="actions">
                                            <a href="/pages/edit.php?id=<?=$row["idSP"];?>&type=edit"><i class="mdi mdi-pencil"></i></a>
                                        </td>
                                        <td class="actions">
                                            <a href="/pages/index.php?page=product&id=<?=$row["idSP"];?>&type=delete"><i class="mdi mdi-window-close"></i></a>
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
