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
        include("classePessoa.php");

        $p = new Pessoa();

        $p->nome = $_POST["nome"];
        $p->email = $_POST["email"];
        $p->cpf = $_POST["cpf"];
        $p->sexo = $_POST["sexo"];
        $p->datanasc = $_POST["datanasc"];

        $p->exibe();

    ?>
</body>
</html>