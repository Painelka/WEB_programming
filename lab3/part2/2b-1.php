<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['surname'] = $_POST['surname']; // изменено last_name
    $_SESSION['name'] = $_POST['name']; // изменено first_name
    $_SESSION['age'] = $_POST['age'];
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

<h2> Задание 2B_1 </h2>
<div>
    <form action="task_b.php" method="post">
        <label>
            Введите Вашу фамилию:
            <input name="surname" type="text" placeholder="Фамилия">
        </label>
        <label>
            Введите Ваше имя:
            <input name="name" type="text" placeholder="Имя">
        </label>
        <label>
            Введите Ваш возраст:
            <input name="age" type="text" placeholder="Возраст">
        </label>
        <input type="submit">
    </form>
</div>
</body>
</html>

