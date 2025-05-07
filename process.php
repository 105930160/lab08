<?php
session_start();

// Get form inputs
$username = $_POST['username'];
$password = $_POST['password'];

// Replace these with your actual credentials
$valid_username = 'Angel';
$valid_password = '105930160';

if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit();
} else {
    header('Location: login.php?error=1');
    exit();
}
