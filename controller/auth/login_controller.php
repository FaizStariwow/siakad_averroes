<?php 
// Include the connection file
include '../../connection/connection.php';

session_start();

// Get data from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Query to find the user by username
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = $conn->query($sql);

$_SESSION['is_login'] = false;

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();

    // Check if the password matches the hashed password in the database
    if (password_verify($password, $data['password'])) {
        
        $_SESSION['id'] = $data['id'];
        $_SESSION['is_login'] = true;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role_id'];
        
        // Redirect based on role_id
        if ($data['role_id'] == 1) {
            echo "<script>alert('Login Success, Anda Sebagai Admin');</script>";
            header('location: ../../pages/admin/index.php');
        } elseif ($data['role_id'] == 2) {
            echo "<script>alert('Login Success, Anda Sebagai Guru');</script>";
            echo "<script>location.href = '../../pages/guru/index.php';</script>";
        } elseif ($data['role_id'] == 3) {
            echo "<script>alert('Login Success, Anda Sebagai User');</script>";
            echo "<script>location.href = '../../pages/user/index.php';</script>";
        }
    } else {
        $_SESSION['message'] = "Password is incorrect";
        header('location: ../../pages/auth/signin.php');
    }
} else {
    $_SESSION['message'] = "User Not Found";
    header('location: ../../pages/auth/signin.php');
}
?>
