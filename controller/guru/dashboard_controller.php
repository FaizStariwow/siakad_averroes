<?php
include '../../connection/connection.php';

function get_jadwal_hari_ini()
{
    global $conn;
    $id = $_SESSION['id'];
    $sql = "SELECT jadwal.id, kelas.nama as nama_kelas, mapel.nama as nama_mapel, user.nama as pengajar, jadwal.jam_mulai, jadwal.jam_selesai
    FROM jadwal
    JOIN user ON jadwal.pengajar_id = user.id
    JOIN kelas ON jadwal.kelas_id = kelas.id
    JOIN mapel ON jadwal.mapel_id = mapel.id
    WHERE pengajar_id = $id AND jadwal.hari = 
        CASE DAYNAME (NOW())
        WHEN 'Monday' THEN 'Senin'
        WHEN 'Tuesday' THEN 'Selasa'
        WHEN 'Wednesday' THEN 'Rabu'
        WHEN 'Thursday' THEN 'Kamis'
        WHEN 'Friday' THEN 'Jumat'
        WHEN 'Saturday' THEN 'Sabtu'
        WHEN 'Sunday' THEN 'Minggu'
        END
        ";
    $result = $conn->query($sql);

    return $result;
}

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

function get_absen(){
    global $conn;

    $sql = "SELECT absensi.id, jadwal.id as nama_jadwal, user.nama as nama_user, absensi.status, absensi.tanggal_absen FROM absensi 
    JOIN jadwal ON absensi.jadwal_id = jadwal.id
    JOIN user ON absensi.user_id = user.id
    ";

    $result = $conn-> query($sql);

    return $result;
}