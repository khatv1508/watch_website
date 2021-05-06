<?php
    class Master_Model{
        public static function get_product($table){
            require("./utils/settings.php");

            $sql = "SELECT sp.idSP, sp.maSP, sp.hangSP, sp.tenSP, sp.loai, nk.soluong, nk.dvt, sp.giaSP
                    FROM sanpham sp
                    LEFT JOIN nhapkho nk ON (sp.idSP = nk.idSP) 
                    LIMIT ".$perPage." OFFSET ". (($page * $perPage ) - $perPage);
            $result = mysqli_query($conn, $sql);
            return $result;
        }
    }
?>