<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tambah produk toko</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  </head>

  <body class="back">
    <div class="content">
      <div class="back-arrow">
        <a href=" /index.php"><i class="bi bi-arrow-left-circle"></i></a>
      </div>
      <form action="produk-store.php" method="post">
        <div class="judul">
          <h1>Tambah Daftar Produk</h1>
          <p>Silahkan tambahkan daftar produk sesuai stok yang ada di toko</p>
        </div>
        <div>
          <label>Nama produk</label>
          <input type="text" name="nama_produk" />
        </div>
        <div>
          <label>Deskripsi</label>
          <input type="text" name="deskripsi" />
        </div>
        <div>
          <label>Harga</label>
          <input type="text" name="harga" />
        </div>
        <div>
          <label>Kategori</label>
          <input type="text" name="kategori" />
        </div>
        <div>
          <input type="submit" value="submit" />
        </div>
      </form>
    </div>
  </body>
</html>
