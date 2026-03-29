<<<<<<< HEAD
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
        echo "<br>";
    }
}
?>


=======
<?php
//checagem da caixa de texto
if (isset($_POST['valor'])) {
    $n = $_POST['valor'];
    //esquema de repetição
    for ($i = 1; $i <= $n; $i++) {
        //impressora de números
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">voltar</a>
</body>
>>>>>>> d3b6fe0aeddd44f52ee6a5abe1c40e9f8f325847
</html>