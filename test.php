<?php

$uploaddir = './tests/';

if ($_GET) {
    $test = json_decode(file_get_contents($uploaddir . ($_GET['test'])), true);
}

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Тест</title>
</head>
<body>
<form action="/testdone.php" method="post">
    <?php foreach ($test as $key) { ?>
        <label for="test"><?= $key['description']; }?></label>
        <?php
        $randOne = rand(1, 3 - 1);
        $randTwo = rand($key['result'] + 1, 20);
        $array = [$randOne, $randTwo, $key['result']]; ?>
        <input type="hidden" name="answer" value="<?= $key['result']?>">
        <?php shuffle($array);
        foreach ($array as $num) { ?>
        <label><input name="q1" type="radio" value="<?= $num; ?>"><?= $num; ?></label>
        <?php } ?>
        <input type="submit" value="Узнать результат">
</form>
</body>
</html>