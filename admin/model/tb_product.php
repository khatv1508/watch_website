<?php
    class Entity_Product{
        public static $id;
        public static $maSP;
        public static $hangSP;
        public static $tenSP;
        public static $xuatXu;
        public static $kieuMay;
        public static $loai;
        public static $duongKinh;
        public static $clVo;
        public static $clDay;
        public static $clKinh;
        public static $chiuNuoc;
        public static $gia;

        public function_contrust($_id, $_maSP, $_hangSP, $_tenSP, $_xuatXu, $_kieuMay, $_loai, $_duongKinh, $_clVo, $_clDay, $_clKinh, $_chiuNuoc, $_gia){
            $this->id = $id;
            $this->maSP = $maSP;
            $this->hangSP = $hangSP;
            $this->tenSP = $tenSP;
            $this->xuatXu = $xuatXu;
            $this->kieuMay = $kieuMay;
            $this->loai = $loai;
            $this->duongKinh = $duongKinh;
            $this->clVo = $clVo;
            $this->clDay = $clDay;
            $this->clKinh = $clKinh;
            $this->chiuNuoc = $chiuNuoc;
            $this->gia = $gia;
        }
    }
?>