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
        
        <form action="cadastra_gerente.php" method="post">

            <?php include "form_pessoa.php"; ?>  

            <p>
                Área: <input type="text" name="area" placeholder="Digite sua Area..." size="50"/>
            </p>
            <p>
                Salário: <input type="number" name="salario" size="10"/>
            </p>
            <input type="submit" value="Enviar"/>
        </form>
    </fieldset>
</body>
</html>