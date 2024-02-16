<?php
require_once "./app/controller/HomeController.php";
require_once "./app/controller/RegisterController.php";

$url = $_SERVER["REQUEST_URI"];

switch($url){
    case '/':
        HomeController::paginaInicial();
    break;

    case '/cadastro':
        RegisterController::paginaCadastro();
        RegisterController::cadastrarCliente();
    break;

    case '/servicos':
        echo "TESTE";
    break;
    default:
        HomeController::erroDeRota();
}



?>