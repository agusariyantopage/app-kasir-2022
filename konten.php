<?php
// Mengarahkan Konten Sesuai Navigasi

if(empty($_GET['hal'])){
    $judul="App Kasirku V 1.0 | Dashboard";
    $konten="konten/home.php";
}
else if($_GET['hal']=='barang'){
    $judul="Data Barang";
    $konten="konten/barang.php";
}
else if($_GET['hal']=='pemasok'){
    $judul="Data Pemasok";
    $konten="konten/pemasok.php";
}
else {
    $judul="Halaman Tidak Ditemukan";
    $konten="konten/home.php"; // Jika Tidak Ditemukan Diarahkan Ke Halaman Utama
}
