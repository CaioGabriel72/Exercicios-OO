<?php

    include("classeNomeDeClasse.php");

    $o1 = new NomeDaClasse();

    $o2 = new NomeDaClasse();

    $o1->metodo1();

    $o2->metodo2("a","b");

    echo "<br/>";

    $maior = $o1->metodoN("x","y","z");

    
    print_r($maior);

?>