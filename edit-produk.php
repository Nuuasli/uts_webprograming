<?php
require_once "config.php";
$id = $_GET['id'];

if (isset($_POST["submit"])) {
  $nama_produk = $_POST['nama_produk'];
  $deskripsi = $_POST['deskripsi'];
  $harga = $_POST['harga'];
  $kategori = $_POST['kategori'];

  $sql = "UPDATE produk SET nama_produk ='$nama_produk', deskripsi ='$deskripsi',harga ='$harga', kategori ='$kategori' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Refresh: 0.5; url= /index.php");
    exit;
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Produk Toko</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="back">
  <?php
  $sql = "SELECT * FROM `produk` WHERE id = $id LIMIT 1";
  $result = mysqli_query($conn, $sql);
  $v = mysqli_fetch_assoc($result);
  ?>
  <div class="content">
    <div class="back-arrow">
      <a href="/index.php"><i class="bi bi-arrow-left-circle"></i></a>
    </div>
    <form method="post">
      <div class="judul">
        <h1>Edit Daftar Produk</h1>
        <p>Silahkan edit daftar produk sesuai stok yang ada di toko</p>
      </div>
      <div>
        <input type="hidden" name="id" value="<?php echo $v["id"]; ?>">
      </div>
      <div>
        <label>Nama produk</label>
        <input type="text" name="nama_produk" value="<?php echo $v["nama_produk"]; ?>">
      </div>
      <div>
        <label>Deskripsi</label>
        <input type="text" name="deskripsi" value="<?php echo $v["deskripsi"]; ?>">
      </div>
      <div>
        <label>Harga</label>
        <input type="text" name="harga" value="<?php echo $v["harga"]; ?>">
      </div>
      <div>
        <label>Kategori</label>
        <input type="text" name="kategori" value="<?php echo $v["kategori"]; ?>">
      </div>
      <div>
        <input type="submit" name="submit" value="submit">
      </div>
    </form>
  </div>
</body>

</html>
