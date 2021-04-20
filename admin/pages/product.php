<?php
    require("./utils/settings.php");
    $sql = "SELECT sp.maSP, sp.hangSP, sp.tenSP, sp.loai, nk.soluong, nk.dvt, sp.giaSP
            FROM sanpham sp
            INNER JOIN nhapkho nk ON (sp.maSP = nk.maSp)";
    $result=mysqli_query($conn,$sql);

    $maSP = ''; $hang = ''; $tenSP = ''; $xuatXu = ''; $kieuMay = ''; $loai = ''; $duongKinh = ''; 
    $chatLieuVo = ''; $chatLieuDay = ''; $chatLieuKinh = ''; $doChiuNuoc = ''; $gia = '';

    //Lấy giá trị POST từ form vừa submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["masp"])) { $masp = $_POST['masp']; }
        if(isset($_POST["hangsp"])) { $hangsp = $_POST['hangsp']; }
        if(isset($_POST["tensp"])) { $tensp = $_POST['tensp']; }
        if(isset($_POST["xuatxu"])) { $xuatxu = $_POST['xuatxu']; }
        if(isset($_POST["loai"])) { $loai = $_POST['loai']; }
        if(isset($_POST["duongkinh"])) { $duongkinh = $_POST['duongkinh']; }
        if(isset($_POST["chatlieuvo"])) { $chatlieuvo = $_POST['chatlieuvo']; }
        if(isset($_POST["chatlieuday"])) { $chatlieuday = $_POST['chatlieuday']; }
        if(isset($_POST["chatlieukinh"])) { $chatlieukinh = $_POST['chatlieukinh']; }
        if(isset($_POST["dochiunuoc"])) { $dochiunuoc = $_POST['dochiunuoc']; }
        if(isset($_POST["giasp"])) { $giasp = $_POST['giasp']; }
    
        // insert san pham
        $insert = "INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) 
        VALUES ('$maSP','$hang','$tenSP','$xuatXu','$kieuMay','$loai','$duongKinh','$chatLieuVo','$chatLieuDay','$chatLieuKinh','$doChiuNuoc', '$gia');";
    
        if ($conn->query($insert) === TRUE) {
            echo "Thêm dữ liệu thành công";
        } else {
            echo "Error: " . $insert . "<br>" . $connect->error;
        }
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
                                            <a href="./files/products/edit.php"><i class="mdi mdi-pencil"></i></a>
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
        <div class="col-lg-12">
            <div class="grid">
                <div class="grid-body">
                    <div class="item-wrapper">
                        <div class="row mb-12">
                            <p class="grid-header">Thêm Sản Phẩm</p>
                            <div class="col-md-12">
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-1 showcase_text_area">
                                        <label>Mã Sản Phẩm</label>
                                    </div>
                                        <div class="col-md-5 showcase_content_area">
                                        <input type="text" class="form-control" name="masp">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-1 showcase_text_area">
                                        <label>Thương Hiệu</label>
                                    </div>
                                    <div class="col-md-5 showcase_content_area">
                                        <input type="text" class="form-control" name="hangsp">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-1 showcase_text_area">
                                        <label>Tên Sản Phẩm</label>
                                    </div>
                                    <div class="col-md-5 showcase_content_area">
                                        <input type="text" class="form-control" name="tensp"> 
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-1 showcase_text_area">
                                        <label>Xuất Xứ</label>
                                    </div>
                                    <div class="col-md-5 showcase_content_area">
                                        <input type="text" class="form-control" name="xuatxu">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-1 showcase_text_area">
                                        <label>Kiểu Máy</label>
                                    </div>
                                    <div class="col-md-5 showcase_content_area">
                                        <input type="text" class="form-control" name="kieusp">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-1 showcase_text_area">
                                        <label>Loại</label>
                                    </div>
                                    <div class="col-md-5 showcase_content_area">
                                        <input type="text" class="form-control" name="loai">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-1 showcase_text_area">
                                        <label>Đường Kính</label>
                                    </div>
                                    <div class="col-md-5 showcase_content_area">
                                        <input type="text" class="form-control" name="duongkinh">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-1 showcase_text_area">
                                        <label>Chất Liệu Vỏ</label>
                                    </div>
                                    <div class="col-md-5 showcase_content_area">
                                        <input type="text" class="form-control" name="chatlieuvo">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-1 showcase_text_area">
                                        <label>Chất Liệu Dây</label>
                                    </div>
                                    <div class="col-md-5 showcase_content_area">
                                        <input type="text" class="form-control" name="chatlieuday">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-1 showcase_text_area">
                                        <label>Chất Liệu Kính</label>
                                    </div>
                                    <div class="col-md-5 showcase_content_area">
                                        <input type="text" class="form-control" name="chatlieukinh">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-1 showcase_text_area">
                                        <label>Độ Chịu Nước</label>
                                    </div>
                                    <div class="col-md-5 showcase_content_area">
                                        <input type="text" class="form-control" name="dochiunuoc">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-1 showcase_text_area">
                                        <label>Giá</label>
                                    </div>
                                    <div class="col-md-5 showcase_content_area">
                                        <input type="text" class="form-control" name="giasp">
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-6 showcase_content_area">
                                        <div class="tm-product-img-dummy">
                                            <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>
                                        </div>
                                        <div class="custom-file mt-3 mb-6">
                                            <input id="fileInput" type="file" style="display:none;">
                                            <input type="button" class="btn btn-primary btn-block" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('fileInput').click();">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-1 showcase_text_area">
                                        <button type="submit" class="btn btn-primary btn-block"> Thêm </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xl-6 col-lg-6 col-md-12  mb-4">
                            <div class="tm-product-img-dummy">
                                <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>
                            </div>
                            <div class="custom-file mt-3 mb-6">
                                <input id="fileInput" type="file" style="display:none;">
                                <input type="button" class="btn btn-primary btn-block" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('fileInput').click();">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
