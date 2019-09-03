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
        
        <form action="cadastra_aluno.php" method="post">

            <?php include "form_pessoa.php";?>
            <p>
                Matricula: <input type="text" name="matricula" placeholder="Digite sua Matricula..." size="50"/>
            </p>
            <p>
                Nota: <input type="number" name="Nota" size="10"/>
            </p>
            <input type="submit" value="Cadastrar"/>
        </form>
    </fieldset>
</body>
</html>