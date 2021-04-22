<?php
    require("./utils/settings.php");
    // do du lieu
    $sql = "SELECT sp.idSP, sp.maSP, sp.hangSP, sp.tenSP, sp.loai, nk.soluong, nk.dvt, sp.giaSP
            FROM sanpham sp
            INNER JOIN nhapkho nk ON (sp.maSP = nk.maSp)";
    $result=mysqli_query($conn,$sql);

    $id = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $type = isset($_GET['type']) ? $_GET['type'] : '';
    switch($type){
        case 'insert':
            // them san pham
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
                VALUES ('$maSP','$hang','$tenSP','$xuatXu','$kieuMay','$loai','$duongKinh','$chatLieuVo','$chatLieuDay','$chatLieuKinh','$doChiuNuoc', '$gia');";
            
                if ($result1=mysqli_query($conn, $insert_product) === TRUE ) {
                    $idSP = $conn->insert_id;
                    
                    if(isset($_POST["soluong"])) { $soLuong = $_POST['soluong']; }
                    if(isset($_POST["dvt"])) { $dvt = $_POST['dvt']; }
                    if(isset($_POST["ngaynhap"])) { $ngayNhap = $_POST['ngaynhap']; }
                    // insert nhap kho
                    $inser_Warehouse ="INSERT INTO nhapkho(idSP, maSP, soluong, dvt, ngayNhap) VALUES ($idSP, '$maSP', $soLuong, '$dvt', '$ngayNhap');";
                }

                if ($result1=mysqli_query($conn, $inser_Warehouse) === TRUE ) {
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
                header('Location: /index.php?page=product');
            }    
            break;
        case 'edit':
            //update san pham
            // if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //     if(isset($_POST["giasp"])) { $gia = $_POST['giasp']; }
            //     $update_product = "UPDATE sanpham 
            //                         SET giaSP = '$gia' 
            //                         WHERE idSP = ".$id;
                
            //     if ($result2=mysqli_query($conn, $update_product) === TRUE ) {
            //         echo 
            //         '<div class="alert alert-success alert-dismissible fade show" role="alert">
            //             <strong>Sửa sản phẩm thành công</strong>
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
            //     header('Location: /index.php?page=product');
            // }     
            echo $type; 
            break;
        case 'delete': 
            // delete san pham
            // $delete_product = "DELETE FROM sanpham WHERE id= ".$id;
            // if ($result3=mysqli_query($conn, $delete_product) === TRUE ) {
            //     echo 
            //     '<div class="alert alert-success alert-dismissible fade show" role="alert">
            //         <strong>Xóa sản phẩm thành công</strong>
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
            // header('Location: /index.php?page=product');
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
                        <div class="btn btn-success has-icon btn-rounded">
                            <i class="mdi mdi-plus"></i>
                            <a href="/pages/edit.php?type=insert">Thêm Mới</a>
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
                                <?php while ($row = $result->fetch_assoc()) { ?>   
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
                                            <a href="/pages/product.php?id=<?=$row["idSP"];?>&type=delete"><i class="mdi mdi-window-close"></i></a>
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
