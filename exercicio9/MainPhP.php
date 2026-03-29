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
        $entrada = $_POST['v'];
        $array = explode(" ", $entrada);
        $numeros = array_map('floatval', $array);
        $resultado = media($numeros);
        echo "Média: " . $resultado;
    }

?>
