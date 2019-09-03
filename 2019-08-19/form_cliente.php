<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 1</title> 
    <style>
        input{margin:5px;}   
    </style>
</head>
<body>
    <?php include "cabecalho.php";?>
    <fieldset>
        
        <form action="cadastra_cliente.php" method="post">
            
            <?php include "form_pessoa.php";?>

            <input type="submit" value="Enviar"/>
        </form>
    </fieldset>
</body>
</html>