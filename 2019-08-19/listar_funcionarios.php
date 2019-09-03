<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <title>Lista de Clientes cadastrados</title>
        <link href="css.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <?php
            include "classeFuncionario.php";
            session_start();

            include "cabecalho.php";
            
            ?>
            <table border='1'>
                <thead>
                    <tr>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Sexo</th>
                        <th>Data de Nascimento</th>
                        <th>Endereço</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>País</th>
                        <th>Área</th>
                        <th>Turno</th>
                        <th>Sálario</th>
                    </tr>
                </thead>
            <tbody>
                    <?php   foreach($_SESSION["funcionario"] as $i=>$p){
                        $p->exibe_tr();
                        }
                    ?>
            </tbody>
        </table>
    </body>
</html>