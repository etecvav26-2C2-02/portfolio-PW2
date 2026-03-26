<?php
    function soma($n1, $rs){
        for($i = 0; $i <= $n1; $i++){
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