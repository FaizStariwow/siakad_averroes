<?php 

// 1. connection to database
include '../../connection/connection.php';
// 2. query pertama yg jumlah guru
$sql = "SELECT COUNT(*) as jumlah_guru FROM user WHERE role_id = 2";
// 3. query kedua yg jumlah siswa
$sql2 = "SELECT COUNT(*) as jumlah_siswa FROM user WHERE role_id = 3";
// 4. query ketiga yg jumlah kelas
$sql3 = "SELECT COUNT(*) as jumlah_kelas FROM kelas";
// 5. query keempat yg jumlah mata pelajaran
$sql4 = "SELECT COUNT(*) as jumlah_mapel FROM mapel";

// 6. eksekusi query
$guru = $conn->query($sql);
$siswa = $conn->query($sql2);
$kelas = $conn->query($sql3);
$mapel = $conn->query($sql4);

// 7. fetch data
$data_guru = $guru->fetch_assoc();
$data_siswa = $siswa->fetch_assoc();
$data_kelas = $kelas->fetch_assoc();
$data_mapel = $mapel->fetch_assoc();


?>