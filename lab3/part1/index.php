
<!doctype html>
<html lang ="en">
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
echo "<br> $str";
echo "<br>";
echo "<br>";
echo "<b>ЗАДАНИЕ 1Б</b>";
echo "<br>";
$str2 = '2a3bc4';
$regch = '/[0-9]/ui';
$matcha = [];

function Cube($matcha){
    $num = (int)$matcha[0];
    $cubnum = pow($num, 3);
    return $cubnum;
}
$result = preg_replace_callback($regch, 'Cube', $str2);
echo $result;
?>

</body>
</html>
