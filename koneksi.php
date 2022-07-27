<?php

$servername ="localhost";
$username   ="root";
$password   ="";
$database   ="dbkasir";

// Perintah Koneksi Database
$koneksi    =mysqli_connect($servername,$username,$password,$database);

// Cek Koneksi
if(!$koneksi){
    //echo "Gagal Koneksi";
} else {
    //echo "Sukses Koneksi";
}