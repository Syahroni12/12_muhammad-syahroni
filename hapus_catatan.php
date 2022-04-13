<?php

$id_catatan = $_GET['id_catatan'];


$no = 0;
$data = file('catatan.txt', FILE_IGNORE_NEW_LINES); //UNTUK MEMBUAT ISI DARI DATA ITU DI UBAH MENJADI ARRAY
foreach ($data as $value) {
    $no++;
    $pecah = explode('|', $value);
    if ($pecah['0'] == $id_catatan) {
        $line = $no - 1; //fungsinya ialah untuk mencari urutan baris ke berapa
    }
}
$buka_file = file('catatan.txt'); //membaca file catatan
unset($buka_file[$line]);
file_put_contents('catatan.txt', implode("", $buka_file));
session_start();
$_SESSION['HAPUS'] = '<div class="alert alert-success" role="alert">
Data berhasil di hapus 
</div>';
header('location:user.php?url=catatan_perjalanan');
