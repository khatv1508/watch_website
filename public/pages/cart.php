<?php
    session_start();
    ini_set('display_errors',0);
    require("../utils/connectDB.php");
    $error = false;
    $success = false;
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }
    if (isset($_GET["action"])) {
        function update($add = false){
            foreach ($_POST["soluong"] as $idSP => $soluong) {
                if ($add) {
                    $_SESSION["cart"] [$idSP] += $soluong;
                }else{
                    $_SESSION["cart"] [$idSP] = $soluong;
                }
            }
        }
        switch ($_GET["action"]) {
            case 'add':
                update(true);
                header('Location: cart.php');
                break;
            case 'delete':
                if (isset($_GET["idSP"])) {
                    unset($_SESSION["cart"][$_GET["idSP"]]);
                }
                header('Location: cart.php');
                break;
            case 'submit':
                if (isset($_POST["update"])) {
                        update(); 
                        header('Location: cart.php');
                    }
                elseif (isset($_POST["order"])) {
                    if (empty($_POST["name"])) {
                        $error = "Vui lòng nhập tên";
                    }elseif (empty($_POST["telephone"])) {
                        $error = "Vui lòng nhập số điện thoại";
                    }elseif (empty($_POST["address"])) {
                        $error = "Vui lòng nhập địa chỉ";
                    }elseif (empty($_POST["soluong"])){
                        $error = "Giỏ hàng rỗng";
                    }
                    if ($error == false && !empty($_POST["soluong"])){
                        $result=mysqli_query($conn,"SELECT * from sanpham WHERE idSP in (".implode(",", array_keys($_POST["soluong"])).")");
                        $total = 0;
                        $orderProduct = array();
                        while ($row = mysqli_fetch_array($result)){
                            $orderProduct[] = $row;
                            $total += $row['giaSP']*$_POST['soluong'][$row['idSP']];
                            $quatity += $_POST['soluong'][$row['idSP']];
                        }
                        $insertOrder = mysqli_query($conn,"INSERT INTO `dathang` (`idPhieu`, `tenKH`, `sdt`, `diaChi`, `soLuong`, `tongCong`) VALUES (NULL, '".$_POST['name']."', '".$_POST['telephone']."', '".$_POST['address']."','".$quatity."', '".$total."')");
                        $idPhieu = $conn->insert_id;
                        $insertString =""; 
                        foreach ($orderProduct as $key => $result) {
                            $insertString .= "(NULL, '".$idPhieu."', '".$result['idSP']."', '".$_POST['soluong'][$result['idSP']]."', '".$result['giaSP']."')";
                            if($key != count($orderProduct) - 1){
                                 $insertString .= ",";
                            }
                        }
                        $insertOrder = mysqli_query($conn, "INSERT INTO `thongtindathang` (`id`, `idPhieu`, `idSP`, `soLuong`, `giaSP`) VALUES ".$insertString.";");
                        $success = "Đặt hàng thành công";
                        unset($_SESSION['cart']);
                    }
                break; 
                }
        }
    }
    if (!empty( $_SESSION["cart"])) {
        $sql = "SELECT * from sanpham sp LEFT JOIN anhsanpham asp ON (sp.idSP = asp.idSP) WHERE sp.idSP in (".implode(",", array_keys($_SESSION["cart"])).")";
        $result=mysqli_query($conn,$sql);
    }
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Watch Shop | Men's Watch</title>
</head>
<?php include("../pages/header.html"); ?>
<body>
    <main>
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Cart</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <div style="border: 3px solid;" class="container">
            <?php 
                if (!empty($error)) {?>
                    <div>
                       <h3> <?=$error;?>.<a style="color: red;" href="javascript: history.back()">Quay lại</a></h3>
                    </div>
                <?php }elseif (!empty($success)) {?>
                    <div>
                       <h3> <?=$success;?>.<a style="color: red;" href="index.php">Trang chủ</a></h3>
                    </div>
                <?php }else { ?>
            
                <br><br>
                <h1 style="color: red;">Giỏ hàng</h1><br>
                <form action="cart.php?action=submit" method="POST" >
                    <table class="table">
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
                        <?php 
                            $num = 1;
                            $total = 0;
                            $quatity = 0;
                            while ($row = mysqli_fetch_array($result)){?>
                                
                                <tr>
                                    <td><?= $num;?></td>
                                    <td><?= $row['tenSP']?></td>
                                    <td><?=$row['urlImage'];?></td>
                                    <td><?= number_format($row['giaSP'], 0,",",".")?> VND</td>
                                    <td><input style="text-align: center;" size="2" type="text" value="<?=$_SESSION["cart"] [$row['idSP']]?>" name="soluong[<?= $row['idSP']?>]"></td>
                                    <td><?= number_format($row['giaSP']*$_SESSION["cart"] [$row['idSP']], 0,",",".")?> VND</td>
                                    <td><b><a style="color: red;" href="cart.php?action=delete&idSP=<?=$row['idSP']?>">Xóa</a></b></td>
                                </tr>
                        <?php
                            $total += $row['giaSP']*$_SESSION["cart"] [$row['idSP']];
                            $num++;
                            }
                        ?>
                        <tr class="tongcong">
                            <td>&nbsp</td>
                            <td>Tổng cộng</td>
                            <td>&nbsp</td>
                            <td>&nbsp</td>
                            <td>&nbsp</td>
                            <td><?=number_format($total, 0,",",".")?> VND</td>
                            <td>&nbsp</td>
                        </tr>
                    </table>
                    <div align="right"><input type="submit" name="update" value="Cập nhật"></div>
                    <br><br>
                    <div><label>Người nhận: </label><input style="width: 400px;margin-left: 47px;" type="text" name="name"></div><br>
                    <div><label>Số điện thoại: </label><input style="width: 200px;margin-left: 35px;" type="text" name="telephone"></div><br>
                    <div><label>Địa chỉ: </label><input style="width: 600px; margin-left: 80px;" type="text" name="address"></div><br>
                    <input type="submit" name="order" value="Đặt hàng"><br><br>
                </form>  
            
            <?php } ?>
        </div>     
       
    </main>
    <?php include("../pages/footer.html"); ?>
</body>
</html>