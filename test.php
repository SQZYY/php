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
    <?php foreach ($test as $key => $value) { ?>
    <label for="test"><?= $value['description']; }?></label>
    <input type="hidden" name="test" value="<?= $value['result']?>">
    <label><input type="text" name="answer"></label>
    <input type="submit" value="Узнать результат">
</form>
</body>
</html>