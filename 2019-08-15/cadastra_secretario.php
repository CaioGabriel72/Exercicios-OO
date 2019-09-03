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
     
        $s = new Secretario($_POST);
        
        session_start();

        $_SESSION["secretario"][]=$s;

        echo "Secretario(a) cadastrado(a) com sucesso!";
        $s->exibe();
    ?>
</body>
</html>