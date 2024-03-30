<!doctype html>
<html lang ="en">

<style type="text/css">
    thead {
        background: #e1e1e1;
    }
</style>


<head>
    <meta charset = "UTF-8">


</head>
<body>
    <?php
echo "<br><b>ЗАДАНИЕ 1А</b></br>";
$str = 'ahb acb aeb aeeb adcb axeb';
$regExp = '/a[a-z]{2}b/'; // 1- буква "а" 2 любые, а потом "b"
$match = [];
$count = preg_match_all($regExp, $str, $match);

foreach ($match[0] as &$str)
echo "<br> $str</br>";
?>
</body>
</html>
