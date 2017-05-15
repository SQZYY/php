<?php

if ($_POST['answer'] === $_POST['rightanswer']) {
    echo 'Правильно!';
} else {
    echo 'Неправильно!';
}