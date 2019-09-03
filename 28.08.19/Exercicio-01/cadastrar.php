<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />
        <title>Cadastrar Contas</title>
    </head>
    <body>
        <?php
            include "cabecalho.php";
            include "menu.php";
            
            // se o formulario estiver Vazio
            if(empty($_POST)){
                $_SESSION["cadastrou"]=false;
                include "form_cadastro.php";
            }
            // se o formulario ja estiver preenchido
            else{
               
                include "classeContaCorrente.php";
                
                $c = new ContaCorrente($_POST);
               
                $_SESSION["conta"][] = $c;

                echo "Conta cadastrada com sucesso.<br />";

                $c->exibe_dados();
            }
        ?>