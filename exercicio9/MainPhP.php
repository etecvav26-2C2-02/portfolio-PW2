<?php
    function media($v)
    {
        $s = 0;
        $q = count($v);
        foreach ($v as $n){
            $s += $n;
        }
        return $rs / $q;
    }
    if (isset($_POST['v'])) {
        $e = $_POST['v'];
        $a = explode(" ", $e);
        $n = array_map('floatval', $a);
        $r = media($n);
        echo "Média: " . $r;
    }

?>
