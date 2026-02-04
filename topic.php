<?php
require 'check_auth.php';
$file = $_GET['file'] ?? '';
$path = 'uploads/topics/' . preg_replace("/[^a-zA-Z0-9_-]/", "", $file) . '.txt';
$content = file_exists($path) ? file_get_contents($path) : 'Тема не найдена';
?>
<!DOCTYPE html>
<html lang="ru">
<head><meta charset="UTF-8"><title><?=$file?></title></head>
<body>
<h1><?=htmlspecialchars($file)?></h1>
<p><?=nl2br($content)?></p>
<a href="index.php">Назад</a>
</body>
</html>
