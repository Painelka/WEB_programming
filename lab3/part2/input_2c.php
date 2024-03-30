<?php session_start(); ?>
<!doctype html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<div>
    <h2>Задание2С</h2>
    <form action="task_c.php" method="post">
        <label>
            Как вас зовут?
            <input name="name" type="text" placeholder="Имя">
        </label>
        <label>
            Сколько вам лет?
            <input name="age" type="text" placeholder="Возраст">
        </label>
        <label>
            Сколько вы зарабатывате с учетом налогов?
            <input name="money" type="text" placeholder="Зарплата">
        </label>
        <label>
            Еще что-нибудь?
            <br>
            <label>
                <input name="other" value="true" type="radio">
                Да
            </label>
            <label>
                <input name="other" value="false" type="radio">
                Нет
            </label>
        </label>
        <input type="submit">
    </form>
</div>
</body>
