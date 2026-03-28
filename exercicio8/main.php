<?php
    function soma($n1, $rs){
        // Função que calcula a soma de 0 até n1
        for($i = 0; $i <= $n1; $i++);
        // Laço "determinante" da função
            $rs += $i;
        }
        return $rs;
        // retorna a função
    }

    if(isset($_POST["n1"])) {
        //verifica se o n1 foi "lançado" pelo form
        $n1 = $_POST["n1"];
        $rs = soma($n1, 0);
        echo "Resultado: ". $rs;
        // Mostra o resultado da soma
    }
?>
