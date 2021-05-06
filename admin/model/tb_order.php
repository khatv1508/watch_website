<?php
    class Entity_Order{
        public static $id;
        public static $tenKH;
        public static $sdt;
        public static $diaChi;
        public static $idSP;
        public static $maSP;
        public static $tenSP;
        public static $soluong;
        public static $giaSP;
        public static $trangThai;

        public function_contrust($_id, $_tenKH, $_sdt, $_diaChi, $_idSP, $_maSP, $_tenSP, $_soluong, $_giaSP, $_trangThai){
            $this->id = $id;
            $this->tenKH = $tenKH;
            $this->sdt = $sdt;
            $this->diaChi = $diaChi;
            $this->idSP = $idSP;
            $this->maSP = $maSP;
            $this->tenSP = $tenSP;
            $this->soluong = $soluong;
            $this->giaSP = $giaSP;
            $this->trangThai = $trangThai;
        }
    }
?>