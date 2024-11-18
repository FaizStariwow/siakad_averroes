<?php

// Include the connection file

function get_all_user()
{
    include '../../../connection/connection.php';

    $sql = "SELECT user.id, user.nama as nama_user, role.nama as role, user.username from user JOIN role ON user.role_id = role.id";
    $result = $conn->query($sql);

    return $result;
}

function edit_user($id)
{
    include '../../connection/connection.php';
    session_start();
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $sql = "UPDATE user SET nama = '$nama', username = '$username', password = '$password', role_id = $role WHERE id = $id";
    
    if($conn->query($sql) === TRUE){
        $_SESSION['status'] = "success";
        $_SESSION['msg'] = "Data Berhasil Diubah";
        echo "<script>location.href = '../../pages/admin/user/user.php';</script>";
    }else{
        $_SESSION['status'] = "error";
        $_SESSION['msg'] = "Data Gagal Diubah";
        echo "<script>location.href = '../../pages/admin/user/user.php';</script>";
    }
    
}

function delete_user($id){
    include '../../connection/connection.php';
    $sql = "DELETE FROM user WHERE id = $id";
    $conn->query($sql);
    
    header('location: ../../pages/admin/user.php');
}

function add_user(){
    include '../../connection/connection.php';
    session_start();
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $sql = "INSERT INTO user VALUES (null, '$nama', '$username', '$password', $role)";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "success";
        $_SESSION['msg'] = "Data Berhasil Ditambahkan";
        echo "<script>location.href = '../../pages/admin/user/user.php';</script>";
    } else {
        $_SESSION['status'] = "error";
        $_SESSION['msg'] = "Data Gagal Ditambahkan";
        echo "<script>location.href = '../../pages/admin/user/user.php';</script>";
    }
}

if (isset($_GET['action'])) {
    
    $action = $_GET['action'];
    
    if ($action == 'edit') {
        $id = $_POST['id'];
        $data = edit_user($id);
    } elseif ($action == 'delete') {
        $id = $_GET['id'];
        delete_user($id);
        header('location: ../../pages/admin/user/user.php');
    } elseif ($action == 'add') {
        add_user();
    }
}
