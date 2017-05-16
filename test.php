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
    <fieldset>
    <?php foreach ($test as $key => $value) { ?>
    <label for="test"><?= $value['question']; }?></label><br>
    <?php foreach ($value['variables'] as $var) {echo $var . '<br>'; } ?>
    <input type="hidden" name="test" value="<?= $value['result']?>">
    <label><input type="text" name="answer"></label>
    <input type="submit" value="Узнать результат">
    </fieldset>
</form>
</body>
</html>