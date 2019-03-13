

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="3.php" method="post">
    <label for="name">Имя куки</label>
    <input type="text" name="name" id="name">
    <label for="value">Значение куки</label>
    <input type="text" name="value" id="value">
    <label for="time">Время куки</label>
    <input type="number" name="time" id="time">
    <button type="submit">Отправить</button>
</form>


    <?php if (isset($_COOKIE)){foreach ($_COOKIE as $key=>$value): ?>
    <form action="delete.php" method="post">
    <input type="text" id="delete" name="delete" value="<?php echo $key; ?>" readonly>
    <button type="submit">Удалить</button><br>
    </form>
    <?php endforeach; } else {echo 'Cookie нет';} ?>

</body>
</html>
