<?php
// One-time setup. DELETE THIS FILE from the server after running it.
require_once __DIR__ . '/config/database.php';
$username = 'admin';
$stmt = $pdo->prepare('select id from users where username=?');
$stmt->execute([$username]);
if ($stmt->fetch()) {
    exit('Admin user already exists. Delete setup_admin.php.');
}
$password = bin2hex(random_bytes(6)); // random, shown once
$stmt = $pdo->prepare('insert into users (username, password) values (?, ?)');
$stmt->execute([$username, password_hash($password, PASSWORD_DEFAULT)]);
header('Content-Type: text/plain; charset=utf-8');
echo "Admin user created.\nUsername: $username\nPassword: $password\n\nSave this password now and DELETE setup_admin.php.";
