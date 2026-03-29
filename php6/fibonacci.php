<?php

include('index.php');

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
