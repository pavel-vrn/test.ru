<!--в двойных кавычках интерпретатор будет пытатьс€ найти переменные, а внутри одинарных кавычек Ц нет -->
<!DOCTYPE html>
<html>
<head>
    <title>“естова€ страница</title>
</head>
<body>
<?php 
include 'lib.php';
echo 'ѕростые числа от 10 до 53: ' . '<br>';
$count = 0;
for ($i = 10; $i <= 53; $i++) {
    if (checkSimpleNumber($i)) {
        echo $i;
        $count++;
        if ($i != 53) {
            echo ', ';
        } else {
            echo '. <br>  оличество простых чисел: ' . $count;
        }
    }
}

?>
</body>
</html>