<?php
$num1 = 1;
$num2 = 49;
$arr = [];
$contador = 0;

function func($n1, $n2){
    return random_int($n1, $n2);
}

while ($contador < 6) {
    $num = func($num1, $num2);
    if (!in_array($num, $arr)){
        array_push($arr, $num);
        $contador++;
    }
}

echo implode("-", $arr)

?>