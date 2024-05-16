<!-- <?php
      require_once "config.php";

      $id = $_GET["id"];

      $d = tampilproduk($conn, $id);
      ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail produk</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>
  <div class="container-detail">
    <div class="produk-detail">
      <a class="close" href=" /index.php"><i class="bi bi-arrow-left-circle"></i></a>
      <div class="detail-judul">
        <h2>Detail Produk</h2>
        <p>ini adala detail dari produk yang anda pilih</p>
      </div>
      <table>
        <tr>
          <td><b> Nama produk</b></td>
          <td>
            <?= $d["nama_produk"] ?>
          </td>
        </tr>
        <tr>
          <td><b>Deskripsi</b></td>
          <td>
            <?= $d["deskripsi"] ?>
          </td>
        </tr>
        <tr>
          <td><b>harga</b></td>
          <td>
            <?= $d["harga"] ?>
          </td>
        </tr>
        <tr>
          <td><b>kategori</b></td>
          <td>
            <?= $d["kategori"] ?>
          </td>
        </tr>
      </table>
    </div>
  </div>
</body>

</html>

<!-- <?php
      mysqli_close($conn)
      ?> -->
