<!DOCTYPE html>
<html>
<head>
    <title>“естова€ страница</title>
</head>
<body>
<?php 
//библиотека функций
include 'lib.php';

$arr = array (
    array(
        "a" => "value", // основание траепеции 1
        "b" => "value", // основание трапеции 2
        "h" => "value", // высота трапеции
        "s" => "value", // площадь трапеции 
    )
);

$arr_index = 0;
$j = 0;
for ($i = 10; $i <= 53; $i++) {
    if (checkSimpleNumber($i)) {
        switch ($arr_index) {
            case 0: 
                $arr[$j]["a"] = $i;
                $arr_index++;
                break;
            case 1:
                $arr[$j]["b"] = $i;
                $arr_index++;
                break;
            case 2:
                $arr[$j]["h"] = $i;
                $arr[$j]["s"] = trapeziumArea($arr[$j]["a"], $arr[$j]["b"], $arr[$j]["h"]);
                $j++;
                $arr_index = 0;
                break;
        }
    }
}
var_dump($arr);

$arr_result = array();
$i = 0;
do {
    $arr_result[$i] = $arr[$i]["s"];
    $i++;
} while ($i < count($arr) && $arr[$i]["s"] < 1400);

$max = array_keys($arr_result, max($arr_result))[0];

echo '–азмеры трапеции, у которой максимальна€ площадь, но не больше 1400: <br>' . 
        'a = ' . $arr[$max]["a"] . ';<br>' .
        'b = ' . $arr[$max]["b"] . ';<br>' .
        'h = ' . $arr[$max]["h"] . '.<br>';
?>
    
</body>
</html>