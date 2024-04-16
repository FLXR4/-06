<?php
echo "Задание 1<br>";
$name = $_GET['name'] = "Булат";
$age = $_GET['age'] = "19";
$gender = $_GET['gender'] = "Мужской";

    echo "Здравствуйте, {$name}, Вы указали данные: Возраст {$age} и Пол {$gender}<br>";
    echo"Задание 2<br>";
$num1 = $_GET['num1'] = "1";
$num2 = $_GET['num2'] = "4";
$num3 = $_GET['num3'] = "2";

    $min = min($num1, $num2, $num3);
    $max = max($num1, $num2, $num3);
    echo "Минимальное число: {$min}<br>";
    echo "Максимальное число: {$max}<br>";
    echo"Задание 3<br>";
    $text = $_GET['text'] = "Я - Зиннатуллин Булат Марселевич";

    $modified_text = str_replace(['а', 'к'], ['о', 'н'], $text);

    echo "Исходный текст: {$text}<br>";
    echo "Измененный : {$modified_text}";

?>
