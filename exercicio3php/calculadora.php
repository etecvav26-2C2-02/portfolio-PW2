<?php
if (isset($_POST['n1'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $result = 0;
    if($n3 == "+"){
        $result = $n1 + $n2;
        echo $result;
    }else{
        if($n3 == "-"){
        $result = $n1 - $n2;
        echo $result;
    }else{
        if($n3 == "/"){
        $result = $n1 / $n2;
        echo $result;
    }else{
        $result = $n1 * $n2;
        echo $result;
    }
    }
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
    <a href='trabalho3.php'>Deseja voltar na página anterior? clique aqui</a>
</body>
</html>