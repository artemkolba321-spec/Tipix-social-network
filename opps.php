<?php
define("DEV_FUNC", false) || $dev_func = false;
if ($_POST["post"] == "") {
    echo 'Вы ничего не вели';
} else {
    header("Location: index.php");
}

