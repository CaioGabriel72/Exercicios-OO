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
        include("cabecalho.php");
        include("classeFuncionario.php");
     
        $p = new Funcionario($_POST);
        
        session_start();

        $_SESSION["funcionario"][]=$p;

        echo "Funcionario cadastrado com sucesso!";
        $p->exibe();
    ?>
</body>
</html>