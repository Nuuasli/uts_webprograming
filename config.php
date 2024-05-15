<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toko";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("gagal konek ke database: " . mysqli_connect_error());
}

function getAllData($conn)
{
    $sql = " SELECT * from produk";
    $result = mysqli_query($conn, $sql);

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    return $data;
}

function tampilproduk($conn, $id)
{
    $sql = " SELECT * from produk where id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}

function tambahproduk($conn, $data)
{
    $sql = "INSERT INTO produk
    (nama_produk, deskripsi, harga, kategori, created_at, updated_at)
    VALUES (
        '{$data['nama_produk']}', 
        '{$data['deskripsi']}', 
        '{$data['harga']}', 
        '{$data['kategori']}', 
        NOW(), 
        NOW()
    );";

    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }

    return null;
}

function hapusdata($conn, $id)
{
    // sql to delete a record
    $sql = "DELETE FROM produk WHERE id = $id ";
    if (mysqli_query($conn, $sql)) {
        echo "berhasil menghapus data produk";
    } else {
        echo "Error deleting record: kamu tholol " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
