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
        include("classeCliente.php");
     
        $p = new Cliente($_POST);
        
        session_start();

        $_SESSION["cliente"][]=$p;

        echo "Cliente cadastrada com sucesso!";
        $p->exibe();
    ?>
</body>
</html>