<?php
define("DEV_FUNC", false) || $dev_func = false;
if ($_POST["post"] == "") {
    echo 'Вы ничего не вели';
} else {
    header("Location: index.php");
}

if ($_POST["username"] == "") {    
    echo "имя пустое";
} else if ($_POST["password"] <= 3) {
    echo "пароль слишком мал";
} else {
    header("Location: index.php");
}