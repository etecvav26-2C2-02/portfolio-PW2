<?php

include ("index.php");

//checagem da caixa de texto
if (isset($_POST['valor'])) {
    $n = $_POST['valor'];
    //esquema de repetição
    for ($i = 1; $i <= $n; $i++) {
        //impressora de números
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        //pula linha
        echo "<br>";
    }
}
?>
