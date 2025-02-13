<?php
$arr = array("apple", "banana", "orange", "grape", "kiwi");

$element = "orange";

$index = array_search($element, $arr);

if ($index !== false) {
    echo "Элемент '$element' найден на индексе: $index";
} else {
    echo "Элемент '$element' не найден в массиве.";
}
?>
