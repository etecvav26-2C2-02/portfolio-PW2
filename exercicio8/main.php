<?php
    function soma($n1, $rs){
        // Função que calcula a soma de 0 até n1
        for($i = 0; $i <= $n1; $i++);
            $rs += $i;
        }
        return $rs;
    }
    
    if(isset($_POST["n1"])) {
        $n1 = $_POST["n1"];
        $rs = soma($n1, 0);
        echo "Resultado: ". $rs;
    }
?>
