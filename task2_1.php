<!DOCTYPE html>
<html>
<head>
    <title>������� 2.1</title>
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

for ($i = 0; $i < count($arr); $i++) {
    $arr[$i]["f"] = calcExpression($arr[$i]["a"], $arr[$i]["b"], $arr[$i]["h"]);
}

// ��������� ����� "odd" ��� �������� � �������� ��������� �������
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i]["s"] % 2 != 0) {
        $arr[$i]["odd"] = true;
    } else {
       $arr[$i]["odd"] = false;
    }
}

//var_dump($arr);
?>
<br>
<table border="1">
    <tr>
        <th>a</th>
        <th>b</th>
        <th>h</th>
        <th>s</th>
        <th>f</th>
        <th>��������</th>
    </tr>
    <?php
    for ($i = 0; $i < count($arr); $i++) {
        echo '<tr><td>' . $arr[$i]["a"] . '</td><td>' . $arr[$i]["b"] . '</td><td>' . $arr[$i]["h"]
            . '</td><td>' . $arr[$i]["s"] . '</td><td>' . $arr[$i]["f"] . '</td><td>' . $arr[$i]["odd"] . '</td></tr>';
    }
    ?>
</table>
<br>
<a href = "index.php">�� �������</a>
<p>
    ������ � ��������
</p>
<?php
require_once( "Classes\Formula_One.php" );
$instance = new Formula_One();

?>

</body>
</html>