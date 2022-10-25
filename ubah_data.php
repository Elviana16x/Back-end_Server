<?php

include "koneksi.php";

if (isset($_POST['id_user'])
    && isset($_POST['nama']) 
    && isset($_POST['tgl_lahir']) 
    && isset($_POST['alamat']) 
    && isset($_POST['email'])
    && isset($_POST['no_hp'])) {

    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $kelas = $_POST['alamat'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    $ubah_data = mysqli_query($koneksi, 
        "UPDATE tugas_semester_2 SET 
        nama = '$nama', 
        tgl_lahir = '$tgl_lahir', 
        alamat = '$kelas', 
        email = '$email', 
        no_hp = '$no_hp'
        WHERE id_user = '$id_user'
    ");

    if ($ubah_data) {
        $pesan = 'data berhasil di update';
    } else {
        $pesan = 'data gagal di update';
    }
    echo json_encode(array('status' => $pesan));
}

?>