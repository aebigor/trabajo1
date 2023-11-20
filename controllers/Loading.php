<?php
require_once "rol1.php";
require_once "Validar.php";
    class Loading{
        public function __construct(){}
        public function main(){
            require_once "../views/roles/admin/header.php";
            require_once "../views/roles/admin/admin.php";
            require_once "../views/roles/admin/footer.php";
        }
    }
?>