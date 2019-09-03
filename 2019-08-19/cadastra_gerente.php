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
        include("classeGerente.php");
     
        $p = new Gerente($_POST);
        
        session_start();

        $_SESSION["gerente"][]=$p;

        echo "Gerente cadastrada com sucesso!";
        $p->exibe();
    ?>
</body>
</html>