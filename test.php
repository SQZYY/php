<?php

$uploaddir = './tests/';
$uploadfile = $uploaddir . basename($_FILES['test']['name']);

if (move_uploaded_file($_FILES['test']['tmp_name'], $uploadfile)) {
    $test = json_decode(file_get_contents($uploaddir . basename($_FILES['test']['name'])), true);
} else {
    echo "Не удалось загрузить тест";
}

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Тест</title>
</head>
<body>
    <form action="./testdone.php" method="post">
        <?php foreach ($test as $key) { ?>
        <label for="test"><?php echo $key['description']; ?></label>
            <label><input name="q1" type="radio" value="a">11</label>
            <label><input name="q1" type="radio" value="b">12</label>
            <label><input name="q1" type="radio" value="c">13</label>
            <input type="submit" value="Узнать результат">
        <?php } ?>
    </form>
</body>
</html>