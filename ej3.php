<?php
$num1 = 1;
$num2 = 49;
$arr = [];

function func($n1, $n2){
    return random_int($n1, $n2);
}

for ($i=0; $i < 6;) { 
    if (in_array(func($num1, $num2), $arr)) {
        $i;
    } else {
        array_push($arr, func($num1, $num2));
        $i++;
    }
}

var_dump($arr);

?>