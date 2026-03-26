<?php
    function media($v)
    {
        $s = 0;
        foreach ($v as $n){
            $s += $n;
        }
    }
$v = $_POST['v'];
echo media($v);
?>
