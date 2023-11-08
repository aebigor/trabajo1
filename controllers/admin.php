<?php
require_once "rol2.php";
require_once "registroU_usuario.php";
    class administrador{
        public function __construct(){}
        public function main(){
            require_once "../views/roles/administrador/header.php";
            
            require_once "../views/roles/administrador/footer.php";
        }
    }
?>