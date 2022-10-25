<?php

include "koneksi.php";

$lihat_data = "SELECT* FROM tugas_semester_2";
$hasil = mysqli_query($koneksi, $lihat_data);
$data = array();

while ($baris = mysqli_fetch_assoc($hasil)) {
    $data[] = $baris;
}
echo json_encode(array(
    'data' => $data
));

?>