<?php
session_start();
require_once "config.php";

$p = getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=, initial-scale=1.0" />
  <title>Produk toko</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>
  <div class="container-produk">
    <div class="header">
      <h1>Display Produk</h1>
      <p>daftar produk yang stoknya masih ada di toko kami</p>
    </div>
    <div class="tombol-kembali">
      <a href="index.php"><i class="bi bi-arrow-left-circle"></i></a>
      <a href="tambah-produk.php"><i class="bi bi-database-add"></i></a>
    </div>

    <?php if (isset($_SESSION['berhasil_nambah_produk'])) : ?>
      <p><?= $_SESSION['berhasil_nambah_produk'] ?></p>
      <?php session_unset(); ?>
    <?php endif; ?>
    <div class="card-produk">
      <table>
        <thead>
          <tr style="background-color: gray;">
            <th>Nama produk</th>
            <th>Desktipsi</th>
            <th>Harga</th>
            <th>aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($p as $k => $v) : ?>
            <tr>
              <td align="center"><?= $v['nama_produk'] ?></td>
              <td><?= $v['deskripsi'] ?></td>
              <td align="center"><?= $v['harga'] ?></td>
              <td align="center"><a href="<?= "/detail-produk.php?id={$v["id"]}" ?>"><i class="bi bi-search"></i> |</a>
                <a href="<?= "/edit-produk.php?id={$v["id"]}" ?>" style="color:green;"><i class="bi bi-pencil-square"></i> |</a>
                <a href="<?= "/hapus-produk.php?id={$v["id"]}" ?>" style="color:red;"><i class="bi bi-trash3"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>

<?php
mysqli_close($conn)
?>