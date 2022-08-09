<?php
// Mengarahkan Konten Sesuai Navigasi

if(empty($_GET['hal'])){
    $judul="App Kasirku V 1.0 | Dashboard";
    $konten="konten/home.php";
}
// Modul Data Pokok
else if($_GET['hal']=='barang'){
    $judul="Data Barang";
    $konten="konten/barang.php";
}
else if($_GET['hal']=='pemasok'){
    $judul="Data Pemasok";
    $konten="konten/pemasok.php";
}
else if($_GET['hal']=='pelanggan'){
    $judul="Data Pelanggan";
    $konten="konten/pelanggan.php";
}
else if($_GET['hal']=='karyawan'){
    $judul="Data Karyawan";
    $konten="konten/karyawan.php";
}
// Akhir Modul Data Pokok

// Modul Pembelian
else if($_GET['hal']=='beli'){
    $judul="Data Pembelian";
    $konten="konten/beli.php";
}
else if($_GET['hal']=='beli-tambah'){
    $judul="Input Pembelian Baru";
    $konten="konten/beli-tambah.php";
}
// Akhir Modul Pembelian

else {
    $judul="Halaman Tidak Ditemukan";
    $konten="konten/home.php"; // Jika Tidak Ditemukan Diarahkan Ke Halaman Utama
}
