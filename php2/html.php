<?php

if(isset($_POST['num'])){
    
    $num = floatval($_POST['num']);

    if($num >= 100 && $num <= 200){
        echo "O número $num está entre 100 e 200.";
    } else {
        echo "O número $num NÃO está entre 100 e 200.";
    }

}
?>