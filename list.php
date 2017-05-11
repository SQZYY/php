<?php

$dir = './tests';
$scan = array_diff(scandir($dir), array('..', '.'));

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Список тестов</title>
</head>
<body>
    <h1>Список тестов:</h1>
            <?php foreach ($scan as $test) { ?>
            <a href='./tests/<?php echo $test; ?>'><?php echo $test . '<br>'; ?></a>
    <?php } ?>
</body>
</html>



