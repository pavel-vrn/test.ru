<!--� ������� �������� ������������� ����� �������� ����� ����������, � ������ ��������� ������� � ��� -->
<!DOCTYPE html>
<html>
<head>
    <title>�������� ��������</title>
</head>
<body>
<?php 
include 'lib.php';
echo '������� ����� �� 10 �� 53: ' . '<br>';
$count = 0;
for ($i = 10; $i <= 53; $i++) {
    if (checkSimpleNumber($i)) {
        echo $i;
        $count++;
        if ($i != 53) {
            echo ', ';
        } else {
            echo '. <br> ���������� ������� �����: ' . $count;
        }
    }
}

?>
</body>
</html>