<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h3>Cadastrando Leão...</h3>
        <form method="post">
            <?php include ("form_animal.php"); ?>
            <input type="number" name="tamJuba" placeholder="Digite o tamanho da juba..."/><br/>
            <select name="rugido">
                <option>Agudo</option>
                <option>Rouco</option>
                <option>Grave</option>
            </select><br/>
            <input type="submit" value="Novo Leão"/>
        </form>
        <?php
            if(!empty($_POST)){
                include ("ClasseLeao.php");
                $l=new Leao($_POST);
                session_start();
                $_SESSION["leao"][]=$l;
                echo "leão Cadastrado com sucesso. <br/>";
                echo "(<a href='index.php'>Voltar para 'Animais'</a>";
                $l->exibir();
            }
        ?>
    </body>
</html>