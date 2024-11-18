<?php 

// connection to database
include '../../connection/connection.php';


$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

// make enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user VALUES (null, '$nama', '$username', '$password',3)";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Register Success');</script>";
    echo "<script>location.href = '../../pages/auth/signin.php';</script>";
}else{
    echo "<script>alert('Register Failed');</script>";
    echo "<script>location.href = '../../pages/auth/signup.php';</script>";
}

?>