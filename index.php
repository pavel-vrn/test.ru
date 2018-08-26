<!DOCTYPE html>
<html>
<head>
    <title>�������� ��������</title>
</head>
<body>
<?php 
//���������� �������
include 'lib.php';

$arr = array (
    array(
        "a" => "value", // ��������� ��������� 1
        "b" => "value", // ��������� �������� 2
        "h" => "value", // ������ ��������
        "s" => "value", // ������� �������� 
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

echo '������� ��������, � ������� ������������ �������, �� �� ������ 1400: <br>' . 
        'a = ' . $arr[$max]["a"] . ';<br>' .
        'b = ' . $arr[$max]["b"] . ';<br>' .
        'h = ' . $arr[$max]["h"] . '.<br>';
?>
    
</body>
</html>