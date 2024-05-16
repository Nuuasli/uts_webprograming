<?php
require_once "config.php";
session_start();

$n = tambahproduk($conn, $_POST);

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['berhasil_nambah_produk'] = "gagal menambahkan data";
} else {
    $_SESSION['berhasil_nambah_produk'] = "berhasil menambah data nama_produk: {$_POST['nama_produk']}, deskripsi : {$_POST['deskripsi']}, harga: {$_POST['harga']}, kategori :{$_POST['kategori']}";
}
if ($conn) {
    header("Refresh: 0.2; url= /index.php");
    echo "<script>alert('tambah data Behasil');</script>";
} else {
    echo "<script>alert('Gagal menambahkan data');</script>";
}
die();
