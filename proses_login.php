<?php
$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];

$format = "$nik|$nama_lengkap";
$file = file('config.txt', FILE_IGNORE_NEW_LINES);
if (in_array($format, $file)) { //cek apakah data ada pada array
    //jika data ada
    session_start();
    $_SESSION['nik'] = $nik;
    $_SESSION['nama_lengkap'] = $nama_lengkap;
    header("Location:user.php");
} else {
    session_start();
    $_SESSION['gagal'] = '<div class="alert alert-danger" role="alert">
    Maaf nik atau nama lengkap anda salah
  </div>';
    header('location:index.php');
}
