<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Форум</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header>
    <h1>Форум</h1>

    <?php if (isset($_SESSION['username'])): ?>
        <span>👤 <?= htmlspecialchars($_SESSION['username']) ?></span>
        <a href="new_topic.php">➕ Создать тему</a>
        <a href="https://alexandrovsk.c6t.ru/logout.php">Выйти</a>
    <?php endif; ?>
</header>

<main>
