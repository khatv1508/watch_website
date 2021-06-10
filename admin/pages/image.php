<?php
    require("./utils/settings.php");
    $username = $_SESSION["username"];

    $id = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $select_product = "SELECT sp.* , nk.soLuong, nk.dvt
                            FROM sanpham sp
                            INNER JOIN nhapkho nk ON (sp.idSP = nk.idSP)
                            WHERE sp.idSP = ".$id;
        $result = mysqli_query($conn, $select_product);
        $value = $result->fetch_object();
    }

    
    if(isset($_FILES["fileToUpload"])){
        $target_dir = "./files/products/" . $id;
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        // Count the number of uploaded files in array
        $total_count = count($_FILES['fileToUpload']['name']);
        // Loop through every file
        for( $i=0 ; $i < $total_count ; $i++ ) {
            //The temp file path is obtained
            $tmpFilePath = $_FILES['fileToUpload']['tmp_name'][$i];
            //A file path needs to be present
            if ($tmpFilePath != ""){
                $fileName = basename($_FILES["fileToUpload"]["name"][$i]);
                $path_parts = pathinfo($fileName);
                $newFileName = basename($path_parts['filename'] . "_" . date("Ymd"). date("his") . "." . $path_parts['extension']);
                $target_file = $target_dir . "/" . $newFileName;


                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$i]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }

                // Check if file already exists
                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }

                // // Check file size
                // if ($_FILES["fileToUpload"]["size"][$i] > 500000) {
                //     echo "Sorry, your file is too large.";
                //     $uploadOk = 0;
                // }

                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
                        // echo "The file ". htmlspecialchars($newFileName). " has been uploaded.";
                        if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
                            $urlImage = "https://";
                        } else {
                            $urlImage = 'http://';
                        }
                
                        if (isset($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] != "80") {
                            $urlImage .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
                        } else {
                            $urlImage .= $_SERVER["SERVER_NAME"] . $target_file;
                        } 
                        
                        $insert_image = "INSERT INTO anhsanpham(idSP, urlImage) VALUES ($id, '$urlImage');";
                        if (mysqli_query($conn, $insert_image) === TRUE ) {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Upload ảnh thành công</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Upload không thành công</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                    }
                }
            }
        }
    }
?>
<div class="col-lg-12">
    <div class="grid">
        <div class="grid-body">
            <div class="item-wrapper">
                <div class="row mb-12">
                    <p class="grid-header">Thêm Ảnh Sản Phẩm </p>
                    <div>
                        <div class="btn btn-back has-icon btn-rounded">
                            <i class="mdi mdi-keyboard-return"></i>
                            <a href="/index.php?page=product">Quay Lại</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row showcase_row_area">
                                <div class="col-md-1 showcase_text_area">
                                    <label>Id</label>
                                </div>
                                <div class="col-md-5 showcase_content_area">
                                    <input type="text" class="form-control" name="id" value='<?php echo(isset($value->idSP) ? $value->idSP : '') ?>' disabled>
                                </div>
                            </div>
                            <div class="form-group row showcase_row_area">
                                <div class="col-md-1 showcase_text_area">
                                    <label>Mã Sản Phẩm</label>
                                </div>
                                    <div class="col-md-5 showcase_content_area">
                                    <input type="text" class="form-control" name="masp" value='<?php echo(isset($value->maSP) ? $value->maSP : '') ?>'>
                                </div>
                            </div>
                            <div class="form-group row showcase_row_area">
                                <div class="col-md-1 showcase_text_area">
                                    <label>Thương Hiệu</label>
                                </div>
                                <div class="col-md-5 showcase_content_area">
                                    <input type="text" class="form-control" name="hangsp" value='<?php echo(isset($value->hangSP) ? $value->hangSP : '') ?>'>
                                </div>
                            </div>
                            <div class="form-group row showcase_row_area">
                                <div class="col-md-1 showcase_text_area">
                                    <label>Tên Sản Phẩm</label>
                                </div>
                                <div class="col-md-5 showcase_content_area">
                                    <input type="text" class="form-control" name="tensp" value='<?php echo(isset($value->tenSP) ? $value->tenSP : '') ?>'> 
                                </div>
                            </div>
                            <div class="form-group row showcase_row_area">
                                <div class="col-md-1 showcase_text_area">
                                    <label>Loại</label>
                                </div>
                                <div class="col-md-5 showcase_content_area">
                                    <input type="text" class="form-control" name="loai" value='<?php echo(isset($value->loai) ? $value->loai : '') ?>'>
                                </div>
                            </div>
                            <div class="form-group row showcase_row_area">
                                <div class="col-md-1 showcase_text_area">
                                    <label>Ảnh Sản Phẩm</label>
                                </div>
                                <div class="col-md-5 showcase_content_area">
                                    <input type="file" name="fileToUpload[]" id="fileToUpload" multiple="multiple">
                                </div>
                            </div>
                            <!-- <div class="holder"> -->
                                <!-- <input accept="image/*" type="file" id="files" />
                                <img id="image" /> -->
                                <!-- <img id="imgPreview" src="fileToUpload[]" alt="pic" /> -->
                            <!-- </div> -->
                            <div class="form-group row showcase_row_area">
                                <div class="col-md-1 showcase_text_area">
                                    <button type="submit" class="btn btn-primary btn-block">Lưu Ảnh</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>