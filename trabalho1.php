<?php

include ("html.php");

$uni = $_POST['uni'];
$n = $_POST['n'];
$result = 0;
if(isset($_POST['n'])){
    if($uni == 'c' || ($uni == 'C')){
        $result = ($n * 1.8) + 32;
        echo $result; 
    }else{
        $result = ($n - 32)*(5/9);
        echo $result;
    }
}
?>
