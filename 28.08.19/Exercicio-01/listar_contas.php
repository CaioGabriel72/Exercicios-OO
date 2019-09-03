<?php

include("classeContaEspecial.php");

include "cabecalho.php";
include "menu.php";    

session_start();

foreach($_SESSION["conta"] as $i=>$c){
    $c->exibe_listaEspecial();
}

?>