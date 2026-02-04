<?php
require 'check_auth.php';
$title = $_POST['title'] ?? '';
$content = $_POST['content'] ?? '';
if (!$title || !$content) exit('Ошибка');

$dir = 'uploads/topics';
if (!is_dir($dir)) mkdir($dir, 0777, true);

$filename = $dir . '/' . preg_replace("/[^a-zA-Z0-9_-]/", "", $title) . '.txt';
file_put_contents($filename, htmlspecialchars($content));

if (isset($_FILES['image']) && $_FILES['image']['tmp_name']) {
    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['image']['tmp_name'], "uploads/topics/{$title}.$ext");
}

header("Location: topic.php?file=" . urlencode($title));
exit;
