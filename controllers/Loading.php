<?php
require_once "rol1.php";
require_once "Validar.php";
    class Loading{
        public function __construct(){}
        public function main(){
            require_once "../views/roles/login/header.php";
            
            require_once "../views/roles/login/footer.php";
        }
    }
?>