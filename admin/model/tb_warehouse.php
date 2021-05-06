<?php
    class Entity_Warehouse{
        public static $id;
        public static $idSP;
        public static $maSP;
        public static $soLuong;
        public static $dvt;
        public static $ngayNhap;

        public function_contrust($_id, $_idSP, $_maSP, $_soLuong, $_dvt, $_ngayNhap){
            $this->id = $id;
            $this->idSP = $idSP;
            $this->maSP = $maSP;
            $this->soLuong = $soLuong;
            $this->dvt = $dvt;
            $this->ngayNhap = $ngayNhap;
        }
    }
?>