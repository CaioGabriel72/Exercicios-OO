<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>Formulario de Produtos</title> 
    <style>
        input{margin:5px;}   
    </style>
</head>
<body>
    <?php include "cabecalho.php";?>
    <fieldset>
        
        <form action="cadastra_produto.php" method="post">
            <p>
                Nome: <input type="text" name="nome" placeholder="Digite seu Nome..." size="50"/>
            </p>
            <p>
                Descrição: <input type="text" name="descricao" placeholder="Digite a Descrição do Produto..." size="50"/>
            </p>
            <p>tipo:
                    <input type="radio" name="tipo" value="perecivel" checked="checked"/>Perecivel
                    <input type="radio" name="tipo" value="não perecivel"/>Não Perecivel<br/>
            <p>
            <p>Unidade:
                    <input type="radio" name="unidade" value="ml" checked="checked"/>Litro
                    <input type="radio" name="unidade" value="gr"/>Grama
                    <input type="radio" name="unidade" value="un"/>Unidade</br>
            <p>
                Preço: <input type="number" name="preco"/>
            </p>
            <input type="submit" value="Enviar"/>
        </form>
    </fieldset>
</body>
</html>