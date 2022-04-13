<?php
session_start();
$nik = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];
$id_catatan = $_POST['id_catatan'];

$format = "$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu";

$no = 0;
$data = file('catatan.txt', FILE_IGNORE_NEW_LINES); //UNTUK MEMBUAT ISI DARI DATA ITU DI UBAH MENJADI ARRAY
foreach ($data as $value) {
    $no++;
    $pecah = explode('|', $value);
    if ($pecah['0'] == $id_catatan) {
        $line = $no - 1; //fungsinya ialah untuk mencari urutan baris ke berapa
    }
}
$data[$line] = $format; //ini menjelaskan $data itu dari array line(ntuk mencari urutan baris ke berapa)dan $format dari beberapa isi dari data 
$data = implode("\n", $data);
file_put_contents('catatan.txt', $data);
session_start();
$_SESSION['BISAH'] = '<div class="alert alert-success" role="alert">
Data berhasil di ubah 
</div>';
header('location:user.php?url=catatan_perjalanan');
