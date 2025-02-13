<?php

$arr = [1, 2, 3, 4];
sort($arr);
foreach($arr as $ar) {
    print("{$ar}<br>");
}

print("<br>");

rsort($arr);
foreach($arr as $a) {
    print("{$a}<br>");
}
?>