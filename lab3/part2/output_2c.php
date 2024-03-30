<!doctype html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<div>
    <?php
    $_SESSION['inputData'] = array();
    $_SESSION['inputData'][] = !empty($_POST['name']) ? $_POST['name'] : '';
    $_SESSION['inputData'][] = !empty($_POST['age']) ? $_POST['age'] : '';
    ?>

</div>
</body>
