<!--в двойных кавычках интерпретатор будет пытаться найти переменные, а внутри одинарных кавычек – нет -->
<!DOCTYPE html>
<html>
<head>
	<title>Тестовая страница</title>
</head>
<body>
<?php 
    $name = "Паша";
    $age = 24;
    echo "Меня зовут " . $name;
    echo "<p>";
    echo "Мне " . $age . " года";
    echo 'Test';
?>
</body>
</html>