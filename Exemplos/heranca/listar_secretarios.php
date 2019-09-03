<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <title>Lista de Clientes cadastrados</title>
        <link href="css.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <?php
            include "classeSecretario.php";
            session_start();
            include "cabecalho.php";
            
            ?>
            <table border='1'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Sexo</th>
                        <th>Idade</th>
                        <th>Salario</th>
                    </tr>
                </thead>
            <tbody>
                    <?php   foreach($_SESSION["secretario"] as $i=>$s){
                        $s->exibe_tr();
                        }
                    ?>
            </tbody>
        </table>
    </body>
</html>