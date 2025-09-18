<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>лента</title>
</head>
<body>
    <?php
        require "blocks/header.php";
        require "blocks/aside.php";
    ?>
    <main>
        <form action="opps.php" method="post">
            <input type="text" name="post" placeholder="Что нового">
            <button type="submit">Отправить</button>
        </form>
    </main>
    <?php
        include "blocks/footer.php";
    ?>
</body>
</html>