<!--в двойных кавычках интерпретатор будет пытаться найти переменные, а внутри одинарных кавычек – нет -->
<!DOCTYPE html>
<html>
<head>
    <title>Тестовая страница</title>
</head>
<body>
<?php 
include 'lib.php';

$arr = array (
    array(
        "a" => "value",
        "b" => "value",
        "c" => "value",
        "s" => "value",
    )
);

for ($i = 10; $i <= 53; $i++) {
    $arr_index = 0;
    if (checkSimpleNumber($i)) {
        switch ($arr_index) {
            case 0: 
                $arr[0]["a"] = i;
            case 1:
                $arr[0]["b"] = i;
            case 2:
                $arr[0]["c"] = i;
        }
        $arr_index++;
    }
}

?>
</body>
</html>