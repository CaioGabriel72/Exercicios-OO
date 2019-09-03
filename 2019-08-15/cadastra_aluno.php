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
     
        $a = new Aluno($_POST);
        
        session_start();

        $_SESSION["aluno"][]=$a;

        echo "Aluno(a) cadastrado(a) com sucesso!";
        $a->exibe();
    ?>
</body>
</html>