<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <title>Lista de Clientes cadastrados</title>
        <link href="css.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <?php
            include "classePessoa.php";
            session_start();
            include "cabecalho.php";
            
            ?>
            <table border='1'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>CPF</th>
                        <th>Sexo</th>
                        <th>Data de Nascimento</th>
                    </tr>
                </thead>
            <tbody>
                    <?php   foreach($_SESSION["pessoa"] as $i=>$p){
                        $p->exibe_tr();
                        }
                    ?>
    </body>
</html>