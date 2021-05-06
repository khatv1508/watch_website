<?php
    class Entity_Bill{
        public static $id;
        public static $idPhieu;
        public static $tenKH;
        public static $idSP;
        public static $maSP;
        public static $tenSP;
        public static $soLuong;
        public static $giaSP;

        public function_contrust($_id, $_idPhieu, $_tenKH, $_idSP, $_maSP, $_tenSP, $_soLuong, $_giaSP){
            $this->id = $id;
            $this->idPhieu = $idPhieu;
            $this->tenKH = $tenKH;
            $this->idSP = $idSP;
            $this->maSP = $maSP;
            $this->tenSP = $tenSP;
            $this->soLuong = $soLuong;
            $this->giaSP = $giaSP;
        }
    }
?>