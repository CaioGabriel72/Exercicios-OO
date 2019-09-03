<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <title>Lista de Clientes cadastrados</title>
        <link href="css.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <?php
            include "classeProduto.php";
            session_start();
            include "cabecalho.php";
            
            ?>
            <table border='1'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Tipo</th>
                        <th>Unidade</th>
                        <th>Preço</th>
                    </tr>
                </thead>
            <tbody>
                    <?php   foreach($_SESSION["produto"] as $i=>$m){
                        $m->exibicao_tabela();
                        }
                    ?>
            </tbody>
        </table>
    </body>
</html>