<?php
session_start();
include '../../connection/connection.php';

if (isset($_POST['register'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Cek apakah username sudah ada
    $check_query = "SELECT * FROM user WHERE username='$username'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $_SESSION['error'] = "Username sudah digunakan!";
        header("Location: ../../register.php");
        exit();
    }

    // Validasi password
    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Password tidak cocok!";
        header("Location: ../../register.php");
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user baru
    $query = "INSERT INTO user (id, nama, username, password, role_id) VALUES (null, '$nama','$username', '$hashed_password', 1)";

    if (mysqli_query($conn, $query)) {
        $_SESSION['success'] = "Registrasi berhasil! Silakan login.";
        header("Location: ../../login.php");
        exit();
    } else {
        $_SESSION['error'] = "Terjadi kesalahan! Silakan coba lagi.";
        header("Location: ../../register.php");
        exit();
    }
}
