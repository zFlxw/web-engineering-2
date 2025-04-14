<?php

$username = $_POST['username'];
$password = $_POST['password'];

$correctUsername = 'admin';
$correctPassword = '1234';

if ($correctUsername === $username && $password === $correctPassword) {
    echo "Login successful! Welcome, $username!";
} else {
    echo "Login failed! Incorrect password.";
}
?>