<?php

ini_set('display_errors', 0);
$uploaddir = './tests/';

if ($_GET) {
    if (file_get_contents($uploaddir . ($_GET['test']))) {
        $test = json_decode(file_get_contents($uploaddir . ($_GET['test'])), true);
    } else {
        exit(file_get_contents('404.htm'));
    }
}

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Тест</title>
</head>
<body>
<form action="/testdone.php" method="post">
    <label for="name">Введите имя:</label>
    <input type="text" name="name" placeholder="Имя"><br>
    <?php foreach ($test as $key => $value) { ?>
    <label for="test"><?= $value['description']; }?></label>
    <input type="hidden" name="test" value="<?= $value['result']?>">
    <label><input type="text" name="answer"></label>
        <input type="submit" value="Узнать результат">
</form>
</body>
</html>