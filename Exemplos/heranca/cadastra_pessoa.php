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
        include("classeProfessor.php");
     
        $p = new Professor($_POST);
        
        session_start();

        $_SESSION["professor"][]=$p;

        echo "Professor(a) cadastrado(a) com sucesso!";
        $p->exibe();
    ?>
</body>
</html>