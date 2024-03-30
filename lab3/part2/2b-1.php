<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $_SESSION['user_data'] = array(
        'surname' => $surname,
        'name' => $name,
        'age' => $age
    );

    header("Location: task_b.php");
    exit();
}
?>
<!doctype html>
<html lang ="en">

<head>
    <meta charset = "UTF-8">
</head>
<body>

<h2> Задание 2B </h2>
<div>
    <form method="post">
        <label>
            Введите Фамилию:
            <input name="surname" type="text" placeholder="Моя фамилия">
        </label>
        <label>
            Введите имя:
            <input name="name" type="text" placeholder="Моё имя">
        </label>
        <label>
            Введите возраст:
            <input name="age" type="text" placeholder="Мой возраст">
        </label>
        <input type="submit">
    </form>
</div>
</body>
</html>

