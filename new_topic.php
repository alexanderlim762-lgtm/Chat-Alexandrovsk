<?php
require 'check_auth.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head><meta charset="UTF-8"><title>Новая тема</title></head>
<body>
<h1>Создать тему</h1>
<form method="post" action="save_topic.php" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Название темы" required><br>
    <textarea name="content" placeholder="Содержимое темы" required></textarea><br>
    <label>Прикрепить изображение: <input type="file" name="image" accept="image/*"></label><br>
    <button type="submit">Создать</button>
</form>
</body>
</html>
