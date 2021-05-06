<?php
    class Entity_Account{
        public static  $id;
        public static  $name;
        public static  $pass;
        public static  $gmail;
        public static  $day;

        public function_contrust($_id, $_name, $_pass, $_gmail, $_day){
            $this->id = $id;
            $this->name = $name;
            $this->pass = $pass;
            $this->gmail = $gmail;
            $this->day = $day;
        }
    }
?>