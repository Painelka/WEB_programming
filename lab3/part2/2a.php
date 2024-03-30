
<!doctype html>
<html lang ="en">

<head>
    <meta charset = "UTF-8">

</head>
<body>
<h2> Задание 2А </h2>
<form method="post">
    <label>
        <textarea name ="TextInput" cols="50" rows="5" placeholder="Я очень настотельно прошу Вас ввести текст."></textarea>
    </label>
    <p><input type="submit" value="Отправить"></p>
</form>
<?php
if(isset($_POST["TextInput"]))
{
    $str= $_POST['TextInput'];
}
else {$str ='';}
$regexp = '/[a-zа-яё0-9]+/ui';
$match = [];
$count = preg_match_all($regexp, $str, $match);
?>
<p>Количество слов в тексте: <?php echo $count?></p>
<p>Длина текста: <?php echo mb_strlen($str)?></p>
?>


</body>
</html>
