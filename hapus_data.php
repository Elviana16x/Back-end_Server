<?php

include "koneksi.php";

if (isset($_POST['id_user'])) {

    $id_user = $_POST['id_user'];
    $hapus_data = mysqli_query($koneksi, "DELETE FROM tugas_semester_2 WHERE id_user = $id_user");


    if ($hapus_data) {
        $pesan = 'data berhasil di hapus';
    } else {
        $pesan = 'data gagal di hapus';
    }
    echo json_encode(array('status' => $pesan));
}

?>