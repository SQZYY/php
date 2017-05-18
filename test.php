<?php

$uploaddir = './tests/';

if (isset($_GET['test']) ? $_GET['test'] : '') {
    $test = json_decode(file_get_contents($uploaddir . ($_GET['test'])), true);
} else {
    header('Location: ./list.php');
}

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Тест</title>
</head>
<body>
    <form action="./testdone.php" method="post">
        <fieldset>
        <?php foreach ($test as $key => $value) { ?>
        <label for="test"><?= $value['question']; }?></label><br>
        <?php foreach ($value['variables'] as $var) {echo $var . '<br>'; } ?>
        <input type="hidden" name="test" value="<?= $value['result']?>">
        <label><input type="text" name="answer"></label>
        <input type="submit" value="Узнать результат">
        </fieldset>
    </form>
    <a href="./admin.php">Загрузить новый тест</a><br>
    <a href="./list.php">Список тестов</a>
</body>
</html>