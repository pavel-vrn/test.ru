<!DOCTYPE html>
<html>
<head>
    <title>Тестовая страница</title>
</head>
<body>
<?php 
include 'lib.php'; //библиотека функций

$arr = array (
    array(
        "a" => "value", // основание траепеции 1
        "b" => "value", // основание трапеции 2
        "h" => "value", // высота трапеции
        "s" => "value", // площадь трапеции 
    )
);

// индексы двумерного массива $arr
$i = 0;
$j = 0;
// заполняем двумерный массив простыми числами, группируя по 3 числа
for ($number = 10; $number <= 53; $number++) {
    if (checkSimpleNumber($number)) {
        switch ($i) {
            case 0: 
                $arr[$j]["a"] = $number;
                $i++;
                break;
            case 1:
                $arr[$j]["b"] = $number;
                $i++;
                break;
            case 2:
                $arr[$j]["h"] = $number;
                $arr[$j]["s"] = trapeziumArea($arr[$j]["a"], $arr[$j]["b"], $arr[$j]["h"]);
                $j++;
                $i = 0; // когда все 3 значения заполнены, обнуляем счётчик
                break;
        }
    }
}
var_dump($arr);

$arr_result = array(); // массив значений площадей трапеций
$i = 0;
do {
    $arr_result[$i] = $arr[$i]["s"];
    $i++;
} while ($i < count($arr) && $arr[$i]["s"] < 1400); // заполняем массив значениями площадей

$max = array_keys($arr_result, max($arr_result))[0]; // получаем индекс максимального элмента массива

echo 'Размеры трапеции, у которой максимальная площадь, но не больше 1400: <br>' . 
        'a = ' . $arr[$max]["a"] . ';<br>' .
        'b = ' . $arr[$max]["b"] . ';<br>' .
        'h = ' . $arr[$max]["h"] . '.<br>';

echo calcExpression(43, 47, 53) . '</br>';

for ($i = 0; $i < count($arr); $i++) {
    echo calcExpression($arr[$i]["a"], $arr[$i]["b"], $arr[$i]["h"]) . '<br>' ;
}

?>
    
</body>
</html>