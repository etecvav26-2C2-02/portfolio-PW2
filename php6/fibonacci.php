<?php

include('index.php');
//funcao que faz tudo funcinar
    function fibonacci($f){
        $n1 = 0;
        $n2 = 1;
        $result = 1;
//escrita da sequencia em casos especificos
        if($f >= 1) echo $n1 . " ";
        if($f >= 2) echo $n2 . " ";
//escrita geral
        for($i = 3; $i <= $f; $i++){
            $result = $n1 + $n2;
            echo $result . " ";
            $n1 = $n2;
            $n2 = $result;
        }
    }
//resultado impresso
    if(isset($_POST["n"])){
        $f = $_POST["n"];
        echo fibonacci($f);
        echo "<br>";
    }
?>
