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
    <style>
        body {
            background: #f6b76e;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        }
        div body{
            align-items: center;
        }

        h2 {
            background: #fff3e2;
            vertical-align: middle;
            text-align: center;
            border-radius: 7px;
            padding: 5px;
        }

        input{
            background: #fff3e2;
            vertical-align: middle;
            text-align: center;
            font-size: 22px;
            border-radius: 7px;
            padding: 5px;
        }

    </style>
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

