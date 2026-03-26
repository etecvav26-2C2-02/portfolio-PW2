<?php
    function media($v)
    {
        $s = 0;
        foreach ($v as $n){
            $s += $n;
        }
        $rs = $s / count($v);
        return count($v);
    }
$v = $_POST['v'];
echo media($v);
?>
