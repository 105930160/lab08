<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'Angel' && $password === '105930160') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
} else {
    header('Location: login.php?error=1');
    exit();
}
