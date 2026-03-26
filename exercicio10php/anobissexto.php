<?php
$ano = $_POST['n1'];
if(isset($_POST['n1'])){
    if($ano % 400 == 0 || ($ano % 4 == 0 && $ano % 100 != 0)){
        echo "O ano " . $ano . " é bissexto.";
    }else{
        echo "O ano " . $ano . " não é bissexto.";
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
    <a href='trabalho10.php'>Clique aqui para voltar à página inicial.</a>
</body>
</html>