<?php
include "../koneksi.php";

if($_POST){
    if($_POST['aksi']=='tambah'){
        $nama_barang=$_POST['nama_barang'];
        $stok=$_POST['stok'];
        $harga_pokok=$_POST['harga_pokok'];
        $harga_jual=$_POST['harga_jual'];
        $barcode=$_POST['barcode'];

        $sql="insert into barang (id_barang,nama_barang,stok,harga_pokok,harga_jual,barcode) values(DEFAULT,'$nama_barang',$stok,$harga_pokok,$harga_jual,$barcode)";
        mysqli_query($koneksi,$sql);

        header('location:../index.php?hal=barang');
    }
}

if($_GET){
    // Perintah Hapus Data
    if($_GET['aksi']=='hapus'){
        $id=$_GET['id'];
        $sql="delete from barang where id_barang=$id";
        mysqli_query($koneksi,$sql);

        header('location:../index.php?hal=barang');
    }
}
