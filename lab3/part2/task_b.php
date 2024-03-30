<?php
session_start();

$userData = $_SESSION['user_data'] ?? array(
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вывод данных</title>
</head>
<body>
<h2>Данные пользователя</h2>
<p>Фамилия: <?php echo $userData['surname']; ?></p>
<p>Имя: <?php echo $userData['name']; ?></p>
<p>Возраст: <?php echo $userData['age']; ?></p>
</body>
</html>
