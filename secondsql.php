<?php

$pdo = new PDO("mysql:host=localhost;dbname=homework;charset=utf8", "root", "1234", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
if ($_POST) {
    $desc = $_POST['description'];
    $add = "INSERT INTO tasks (description, date_added) VALUES ('$desc', CURRENT_TIME)";
    $statementTwo = $pdo->prepare($add);
    $statementTwo->execute();
    header("location:/secondsql.php");
}
?>

<html>
<style>
    table {
        border-spacing: 0;
        border-collapse: collapse;
    }

    table td, table th {
        border: 1px solid #ccc;
        padding: 5px;
    }

    table th {
        background: #eee;
    }
</style>

<h1>Список дел на сегодня</h1>
<div style="float: left">
    <form method="POST">
        <input type="text" name="description" placeholder="Описание задачи"/>
        <input type="submit" name="add" value="Добавить" />
    </form>
</div>
<div style="clear: both"></div>

<table>
    <tr>
        <th>Описание задачи</th>
        <th>Дата добавления</th>
        <th>Статус</th>
        <th></th>
    </tr>
<?php
    $sql = "SELECT * FROM tasks";
    $statementOne = $pdo->prepare($sql);
    $statementOne->execute();
?>
    <?php foreach ($statementOne as $row) { ?>
    <tr>
        <td><?= htmlspecialchars($row["description"], ENT_QUOTES);?></td>
        <td><?= htmlspecialchars($row["date_added"], ENT_QUOTES);?></td>
        <td><?= htmlspecialchars($row["is_done"], ENT_QUOTES);?></td>
    </tr>
    <?php } ?>
</table>

</html>