<?php
error_reporting(0);

$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];
$oi = strlen($nik); //strlen=untuk menghitung jumlah karakter yang ada di inputan nik
// cek apakah nik sudah terdaftar atau belum
$data = file('config.txt', FILE_IGNORE_NEW_LINES); //FUNGSI DARI FILE_IGNORE_NEW_LINES IALAH MEMBUAT ISINYA MENJADI ARRAY


foreach ($data as $dat) {
    $pecah = explode("|", $dat); //explode ialah memecahkan antara variabel nik,sama nama_lengkap
    if ($nik == $pecah['0']) {
        $cek = true;
    }
}
if ($oi == 16) {
    if ($cek) { //jika nik sudah terdaftar

        session_start();
        $_SESSION['terdaftar'] = '<div class="alert alert-danger" role="alert">
 Maaf nik yang anda gunakan telah terdaftar
  </div>';
        header('location:register.php');
    } else //jika nik tidak terdaftar  buat penyimpanan ke file config
    {
        $format = "\n$nik|$nama_lengkap";
        //buka dulu file config.txt
        $file = fopen('config.txt', 'a');
        fwrite($file, $format);
        //lalu di tutup $file nya
        fclose($file);

        session_start();
        $_SESSION['aman'] = '<div class="alert alert-success" role="alert">
        Data berhasil ditambahkan,silahkan login
      </div>';
        header('location:index.php');
    }
} else {
    session_start();
    $_SESSION['sedikit'] = '<div class="alert alert-danger" role="alert">
 Maaf nik yang anda tambahkan terlalu sedikit
  </div>';
    header('location:register.php');
}
