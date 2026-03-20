<?php
    function fibonacci($f){
        $n1 = 0;
        $n2 = 1;
        $result = 1;

        if($f >= 1) echo $n1 . " ";
        if($f >= 2) echo $n2 . " ";

        for($i = 3; $i <= $f; $i++){
            $result = $n1 + $n2;
            echo $result . " ";
            $n1 = $n2;
            $n2 = $result;
        }
    }
    if(isset($_POST["n"])){
        $f = $_POST["n"];
        echo fibonacci($f);
        echo "<br>";
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
    <a href="trabalho6.php">voltar<a>
</body>
</html>