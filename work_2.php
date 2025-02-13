<?php

$arr = [1, 2, 3, 4];

$min = $max = $arr[0];
$keyMax = $keyMin = 0;

foreach($arr as $key =>$value) {
    if($max < $value) {
        $max = $value;
        $keyMax = $key;
    }
    if($min > $value) {
        $min = $value;
        $keyMin = $key;
    }
}

print("<p>Наибольший элемент в массиве: {$max}. Ключ: {$keyMax}.</p>");
print("<p>Наименьший элемент в массиве: {$min}. Ключ: {$keyMin}.</p>");