<?php
    if(!empty($_POST)){
        $form_animal="form_".$_POST["animal"].".php";
        header("location: $form_animal");
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form method="post">
            <select name="animal">
                <option value="leao">Leão</option>
                <option value="rinoceronte">Rinoceronte</option>
                <option value="elefante">Elefante</option>
                <option value="cascavel">Cascavel</option>
                <option value="bagre">Bagre</option>
                <option value="tuiuiu">Tuiuiu</option>
            </select>
            <input type="submit" value="Escolher Animal"/>
        </form>
    </body>
</html>
