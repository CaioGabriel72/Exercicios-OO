<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>Cadastro de Produto</title> 
    <style>
        input{margin:5px;}   
    </style>
</head>
<body>
    <?php
        include("cabecalho.php");
        include("classeProduto.php");

        $np = $_POST["nome"];
        $d = $_POST["descricao"];
        $t = $_POST["tipo"];
        $u = $_POST["unidade"];
        $pr = $_POST["preco"];
        
        $m = new Produto($np,$d,$t,$u,$pr);
        
        session_start();

        $_SESSION["produto"][]=$m;

        echo "Produto cadastrado com sucesso!";
        $m->exibicao_unitaria();
    ?>
</body>
</html>