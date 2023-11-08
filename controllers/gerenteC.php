<?php
require_once "rol1.php";
require_once "registroG.php";

    class Loading{
        public function __construct(){}
        public function main(){
            require_once "../views/roles/gerente/header.php";
            
            require_once "../views/roles/gerente/footer.php";
        }
    }
?>