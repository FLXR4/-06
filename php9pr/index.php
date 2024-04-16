<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Имя:</label><br>
        <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" style="background-color: <?php echo empty($_POST['name']) ? 'yellow' : 'white'; ?>"><br>
        <label for="group">Группа:</label><br>
        <input type="text" id="group" name="group" value="<?php echo isset($_POST['group']) ? $_POST['group'] : ''; ?>" style="background-color: <?php echo empty($_POST['group']) ? 'yellow' : 'white'; ?>"><br>
        <label for="gender">Пол:</label><br>
        <input type="radio" id="male" name="gender" value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'male') ? 'checked' : ''; ?>>
        <label for="male">Мужской</label><br>
        <input type="radio" id="female" name="gender" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'female') ? 'checked' : ''; ?>>
        <label for="female">Женский</label><br>
        <label for="birthday">День рождения:</label><br>
        <select id="birthday" name="birthday" style="background-color: <?php echo empty($_POST['birthday']) ? 'yellow' : 'white'; ?>">
            <?php for ($i = 1; $i <= 31; $i++): ?>
                <option value="<?= $i ?>" <?php echo (isset($_POST['birthday']) && $_POST['birthday'] == $i) ? 'selected' : ''; ?>><?= $i ?></option>
            <?php endfor; ?>
        </select><br>
        <label for="month">Месяц:</label><br>
        <select id="month" name="month" style="background-color: <?php echo empty($_POST['month']) ? 'yellow' : 'white'; ?>">
            <?php for ($i = 1; $i <= 12; $i++): ?>
                <option value="<?= $i ?>" <?php echo (isset($_POST['month']) && $_POST['month'] == $i) ? 'selected' : ''; ?>><?= date('F', mktime(0, 0, 0, $i, 1)) ?></option>
            <?php endfor; ?>
        </select><br>
        <label for="year">Год:</label><br>
        <select id="year" name="year" style="background-color: <?php echo empty($_POST['year']) ? 'yellow' : 'white'; ?>">
            <?php for ($i = date('Y'); $i >= 1900; $i--): ?>
                <option value="<?= $i ?>" <?php echo (isset($_POST['year']) && $_POST['year'] == $i) ? 'selected' : ''; ?>><?= $i ?></option>
            <?php endfor; ?>
        </select><br>
        <label for="license">Наличие водительского удостоверения:</label><br>
        <input type="checkbox" id="license" name="license" <?php echo isset($_POST['license']) ? 'checked' : ''; ?>><br><br>
        <input type="submit" value="Отправить">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name']) && !empty($_POST['group']) && !empty($_POST['gender']) && !empty($_POST['birthday']) && !empty($_POST['month']) && !empty($_POST['year'])) {
        $name = $_POST['name'];
        $group = $_POST['group'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $license = isset($_POST['license']);

    
        $current_age = date('Y') - $year;


        $pension_age = $gender === 'male' ? 65 : 63;
        $years_to_pension = $pension_age - $current_age;

        echo "Имя: {$name}<br>";
        echo "Группа: {$group}<br>";
        echo "Пол: {$gender}<br>";
        echo "День рождения: {$birthday}<br>";
        echo "Месяц: {$month}<br>";
        echo "Год: {$year}<br>";
        echo "Возраст: {$current_age}<br>";
        echo "Количество лет до пенсии: {$years_to_pension}<br>";
        echo "Наличие водительского удостоверения: {$license}<br>";
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3 style='color: red;'>Пожалуйста, заполните все обязательные поля!</h3>";
    }

    ?>
</body>
</html>