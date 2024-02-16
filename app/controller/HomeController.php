<?php
    Class HomeController{
        public static function paginaInicial(){
            include "./app/view/paginaInicial.php";
        }

        public static function erroDeRota(){
            include "./app/view/404.php";
        }

        
    }
?>