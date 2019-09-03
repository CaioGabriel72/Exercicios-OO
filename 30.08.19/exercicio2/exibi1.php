<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 1</title> 
    <style>
        input{margin:5px;}   
    </style>
</head>
<body>
    <?php
        include "cabecalho.php";
        include("classePessoa.php");

        

        $n = $_POST["nome"];
        $e = $_POST["email"];
        $c = $_POST["cpf"];
        $s = $_POST["sexo"];
        $d = $_POST["datanasc"];
        
        $p = new Pessoa($n,$e,$c,$s,$d);
        
        session_start();

        $_SESSION["pessoa"][]=$p;

        echo "Pessoa cadastrada com sucesso!";
        $p->exibe();
    ?>
</body>
</html>