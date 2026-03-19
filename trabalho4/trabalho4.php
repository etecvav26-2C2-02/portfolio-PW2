<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">
    <input type="number" name="valor" placeholder="seu número (int) de linhas">
    <button type="submit">criar</button>
</form>
</body>
</html>

<?php
if (isset($_GET['valor'])) {
    $n = $_GET['valor'];
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
}
?>