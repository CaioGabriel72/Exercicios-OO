<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 1</title> 
    <style>
        input{margin:5px;}   
    </style>
</head>
<body>
    <fieldset>
        <form action="exibi1.php" method="post">
            <p>
                Nome: <input type="text" name="nome" placeholder="Digite seu Nome..." size="50"/>
            </p>
            <p>
                E-mail: <input type="text" name="email" placeholder="Digite o seu E-mail..." size="50"/>
            </p>
            <p>
                CPF: <input type="number" name="cpf" placeholder="Digite seu CPF..." size="11"/>
            </p>
            <p>Sexo:
                    <input type="radio" name="sexo" value="m" checked="checked"/>Masculino
                    <input type="radio" name="sexo" value="f"/>Feminino<br/>
            <p>
                Data de Nascimento: <input type="date" name="datanasc"/>
            </p>
            <input type="submit" value="Enviar"/>
        </form>
    </fieldset>
</body>
</html>