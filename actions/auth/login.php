<?php
session_start();
include '../../connection/connection.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role_id'] = $user['role_id'];

            header("Location: ../../index.php");
            exit();
        } else {
            $_SESSION['error'] = "Password salah!";
            header("Location: ../../pages/auth/signin.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Username tidak ditemukan!";
        header("Location: ../../pages/auth/signin.php");
        exit();
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: ../../pages/auth/signin.php");
    exit();
}
