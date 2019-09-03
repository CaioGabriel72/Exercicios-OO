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
        
        <form action="cadastra_secretario.php" method="post">

            <?php include "form_pessoa.php";?>
            <p>
                Salario: <input type="number" name="salario" size="10"/>
            </p>
            <input type="submit" value="Cadastrar"/>
        </form>
    </fieldset>
</body>
</html>