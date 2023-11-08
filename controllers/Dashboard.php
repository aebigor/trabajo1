<?php
require_once "rol.php";
require_once "registroU_usuario.php";
    class Dashboard{
        public function __construct(){}
        public function main(){
            require_once "../views/roles/admin/header.php";
            
            require_once "../views/roles/admin/footer.php";
        }
    }
?>