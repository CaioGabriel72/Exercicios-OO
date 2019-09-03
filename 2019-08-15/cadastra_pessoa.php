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
        include("classePessoa.php");
     
        $p = new Pessoa($_POST);
        
        session_start();

        $_SESSION["pessoa"][]=$p;

        echo "Pessoa cadastrada com sucesso!";
        $p->exibe();
    ?>
</body>
</html>