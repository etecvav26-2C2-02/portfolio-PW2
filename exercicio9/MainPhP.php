<?php
    function media($v)
    {
        $s = 0;
        $q = count($v);
        foreach ($v as $n){
            $s += $n;
        }
        $rs = $s / $q;
        return $rs;
    }
?>
