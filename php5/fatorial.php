<?php

include ("index.php");

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
//pega varias variaveis, array de dados
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
