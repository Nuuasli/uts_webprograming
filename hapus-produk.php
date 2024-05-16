<?php
require_once "config.php";

$id = $_GET["id"];

if (hapusdata($conn, $id) > 0) {
    echo "<script> alert('data produk berhasil dihapus'); </script>
    ";
};


if ($conn) {
    header("Refresh: 0.5; url= /index.php");
    echo "<script>alert('Hapus data produk Berhasil');</script>";
} else {
    echo "<script>alert('Gagal menghapus data produk');</script>";
}
