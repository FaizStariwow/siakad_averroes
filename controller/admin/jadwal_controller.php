<?php

include '../../../connection/connection.php';

function get_jadwal(){
    global $conn;
    
    $sql = "SELECT jadwal.id, kelas.nama as nama_kelas, mapel.nama as nama_mapel, user.nama as guru, jadwal.hari, jadwal.jam_mulai, jadwal.jam_selesai
    FROM jadwal
    JOIN user ON jadwal.pengajar_id = user.id
    JOIN kelas ON jadwal.kelas_id = kelas.id
    JOIN mapel ON jadwal.mapel_id = mapel.id";

    $result = $conn->query($sql);

    return $result;
}

function delete_jadwal($id){
    include '../../connection/connection.php';
    $sql = "DELETE FROM jadwal WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "success";
        $_SESSION['msg'] = "Data Berhasil Ditambahkan";
        echo "<script>location.href = '../../pages/admin/jadwal/jadwal.php';</script>";
    } else {
        $_SESSION['status'] = "error";
        $_SESSION['msg'] = "Data Gagal Ditambahkan";
        echo "<script>location.href = '../../pages/admin/jadwal/jadwal.php';</script>";
    }
}

function get_all_guru() {
    include '../../../connection/connection.php';

    $sql = "SELECT * FROM user WHERE role_id = 2";

    $result = $conn->query($sql);
    return $result;
}

function get_all_kelas() {
    include '../../../connection/connection.php';

    $sql = "SELECT kelas.id, kelas.nama FROM kelas ";

    $result = $conn->query($sql);
    return $result;
}

function get_all_mapel() {
    include '../../../connection/connection.php';

    $sql = "SELECT mapel.id, mapel.nama FROM kelas ";

    $result = $conn->query($sql);
    return $result;
}

function add_jadwal(){
    include '../../connection/connection.php';
    session_start();
    $nama = $_POST['nama'];
    $kode_kelas = $_POST['kode_kelas'];
    $wali_kelas = $_POST['wali_kelas'];

    $sql = "INSERT INTO kelas VALUES (null, '$nama', '$kode_kelas', $wali_kelas)";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "success";
        $_SESSION['msg'] = "Data Berhasil Ditambahkan";
        echo "<script>location.href = '../../pages/admin/kelas/kelas.php';</script>";
    } else {
        $_SESSION['status'] = "error";
        $_SESSION['msg'] = "Data Gagal Ditambahkan";
        echo "<script>location.href = '../../pages/admin/kelas/kelas.php';</script>";
    }
}

if (isset($_GET['action'])) {
    
    $action = $_GET['action'];
    
    if ($action == 'edit') {
        $id = $_POST['id'];
        $data = edit_kelas($id);
    } elseif ($action == 'delete') {
        $id = $_GET['id'];
        delete_kelas($id);
    } elseif ($action == 'add') {
        add_kelas();
    }
}