<?php
if (empty($_POST["q1"]) or empty($_POST["q2"]) or empty($_POST["q3"]) or empty($_POST["q4"])
    or empty($_POST["q5"])) {
    echo "Выберите варианты ответа для всех вопросов <br> <a href='opros.php'>Вернуться к опросу</a>";

}