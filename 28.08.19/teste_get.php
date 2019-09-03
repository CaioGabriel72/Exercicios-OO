<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(empty($_POST)){?>
            <form method="POST">
                <input type="text" name="nome" placeholder="nome..."/><br/>
                <input type="email" name="email" placeholder="email..."/><br/>
                <input type="text" name="cpf" placeholder="cpf..."/><br/>
                Sexo:
                <input type="radio" name="sexo" value="m"/>Masc.
                <input type="radio" name="sexo" value="f"/>Fem.<br/>
                Data de Nascimento:<input type="date" name="data_nasc"/><br/>
                <input type="password" name="senha" placeholder="senha..."/><br/>
                <button>Enviar</button>
            </form>
        <?php }
            else {

                include("classePessoa.php");
                include("classeAtleta.php")
                 $p= new Pessoa($_POST);
                //$p = new Atleta($_POST);
                echo $p->get_nome();
                echo "<br>";
                echo $p->get_cpf();
                echo "<br>";
                echo $p->get_email();
                echo "<br>";
                echo $p->get_sexo();
                echo "<br>";
                echo $p->get_data_nasc();
                $p->set_nivel(3);
                $p-> correr();
                $p-> correr();
                $p-> correr();
                echo "<br/>Posição: ".$p-> get_correr();
            }
        ?>
    </body>
</html>