<?php
    function media($v)
    {
        $s = 0;
        foreach ($v as $n){
            $s += $n;
        }
        return $rs = $s / count($v);
    }
    $v = $_POST['v'];
    echo $rs;
?>