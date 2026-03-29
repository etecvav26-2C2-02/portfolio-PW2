<?php
if (isset($_POST['n1'])){
//retira valores do formulario
    $numeros = [
                $_POST["n1"],
                $_POST["n2"],
                $_POST["n3"],
                $_POST["n4"],
                $_POST["n5"],
                $_POST["n6"],
                $_POST["n7"],
                $_POST["n8"]
            ];
//vetores
$positivos = [];
$negativos = [];
//chega quais os numeros positivos e separa pra cada lista correta
    foreach ($numeros as $num) {
        if ($num >= 0) {
            $positivos[] = $num;
        } else {
            $negativos[] = $num;
        }
    }
//imprime ambos as listas
    echo "Números positivo: ";
    echo implode(", ", $positivos);

    echo " Números negativo: ";
    echo implode(", ", $negativos);
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
    <a href="index.php"><a>
</body>
</html>
