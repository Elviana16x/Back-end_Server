<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "elviana";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if (isset($_POST['nama']) 
    && isset($_POST['tgl_lahir']) 
    && isset($_POST['alamat']) 
    && isset($_POST['email'])
    && isset($_POST['no_hp'])) {

        $id_user = rand(100000, 999999);
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];

        $buat_data = mysqli_query($koneksi, "INSERT INTO tugas_semester_2 VALUES(
                '$id_user', '$nama', '$tgl_lahir', 
                '$alamat', '$email', '$no_hp'
            )
        ");

    if ($buat_data) {
        $pesan = 'data berhasil di simpan';
        } else if ($buat_data) {
        $pesan = 'data kosong';
    } else {
        $pesan = 'data gagal di simpan';
    }
    echo json_encode(array('status' => $pesan));
}

?>