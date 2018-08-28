<!DOCTYPE html>
<html>
<head>
    <title>�������� ��������</title>
</head>
<body>
<?php 
include 'lib.php'; //���������� �������

$arr = array (
    array(
        "a" => "value", // ��������� ��������� 1
        "b" => "value", // ��������� �������� 2
        "h" => "value", // ������ ��������
        "s" => "value", // ������� �������� 
    )
);

// ������� ���������� ������� $arr
$i = 0;
$j = 0;
// ��������� ��������� ������ �������� �������, ��������� �� 3 �����
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
                $i = 0; // ����� ��� 3 �������� ���������, �������� �������
                break;
        }
    }
}
var_dump($arr);

$arr_result = array(); // ������ �������� �������� ��������
$i = 0;
do {
    $arr_result[$i] = $arr[$i]["s"];
    $i++;
} while ($i < count($arr) && $arr[$i]["s"] < 1400); // ��������� ������ ���������� ��������

$max = array_keys($arr_result, max($arr_result))[0]; // �������� ������ ������������� ������� �������

echo '������� ��������, � ������� ������������ �������, �� �� ������ 1400: <br>' . 
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