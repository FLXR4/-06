<!DOCTYPE html>
<html>
<head>
    <title>Практическая 7</title>
</head>
<body>
    <?php
    echo "1.";
    $var1 = 10;
    $var2 = 20;

    if ($var1 > $var2) {
        $larger = $var1;
    } else {
        $larger = $var2;
    }

    echo "<p>Большая из $var1 и $var2 это $larger.</p><br>";
    echo "2.<br>";
    $number = -21;

    if ($number > 0) {
        echo "<p>Число $number положительное.</p>";
    } elseif ($number < 0) {
        echo "<p>Число $number отрицательное.</p>";
    } else {
        echo "<p>Число равно 0.</p>";
    }
echo "3.<br>";

$login = "admin";
$password = "password";

$inputLogin = $_GET["login"] ?? "admin";
$inputPassword = $_GET["password"] ?? "password";

if ($inputLogin == $login && $inputPassword == $password) {
    echo "<p>Логин и пароль верны.</p>";
} else {
    echo "<p>Логин и\или пароль не верны.</p>";
}
    ?>
</body>
</html>