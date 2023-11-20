<?php
require_once "rol.php";
    class Dashboard{
        public function __construct(){}
        public function main(){
            require_once "views/roles/rol/header.php";
           
            
            require_once "views/roles/rol/footer.php";
        }
    }
?>