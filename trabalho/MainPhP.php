<?php
    function media($v)
    {
        $v = $_POST['v'];
        $s = 0;
        foreach ($v as $n){
            $s += $n;
        }
        $rs = $s / count($v);
        return $rs;
    }
?>
