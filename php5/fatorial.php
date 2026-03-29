<?php
//função que faz o fatorial
    function fat($num){
        $result = 1;
        for($i = 1; $i <= $num; $i++){
            $result = $result * $i;
        }
         return $result;   
    }

 $soma = 0;

    if(isset($_POST["n1"])){
//pega varias variaveis
            $valores = [
                $_POST["n1"],
                $_POST["n2"],
                $_POST["n3"],
                $_POST["n4"],
                $_POST["n5"]
            ];

    //le a lista de variaveis
        foreach ($valores as $n){
    //corre pela lista $valores usando cada um dos valores
            $soma = fat($n) + $soma;
        }
        echo "seu valor é " . $soma;
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
    <a href="index.php">voltar</a>
</body>
</html>