<?php
session_start();
if (isset($_SESSION['user_id'])) return;

if (isset($_COOKIE['auth_token'])) {
    $token = $_COOKIE['auth_token'];
    $api = "https://alexandrovsk.c6t.ru/api/check_token.php?token=" . urlencode($token);
    $response = @file_get_contents($api);
    $data = json_decode($response, true);
    if ($data && $data['status'] === 'ok') {
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['username'] = $data['username'];
        return;
    }
}

$redirect = urlencode("https://forum-alexandrovsk.c6t.ru".$_SERVER['REQUEST_URI']);
header("Location: https://alexandrovsk.c6t.ru/login.html?redirect=$redirect");
exit;
