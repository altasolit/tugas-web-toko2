<?php
  include 'koneksi.php';
  session_start();
  if (!isset($_SESSION['username'])) {
    header('location: login.php');
  }

  $id_user = $_SESSION['id_user'];

if (isset($_POST["add"])){
    if (isset($_SESSION["cart"])){
        $item_array_id = array_column($_SESSION["cart"],"id");
        if (!in_array($_GET["id"], $item_array_id)){
        $count = count($_SESSION["cart"]);
        $item_array = array(
        'id'=> $_GET["id"],
        'nama' => $_POST["hidden_nama"],
        'harga' => $_POST["hidden_harga"],
        'foto' => $_POST["hidden_foto"],
        'jumlah' => $_POST["jumlah"],
        );
        $_SESSION["cart"][$count] = $item_array;

        echo '<script>alert("produk berhasil dimasukan keranjang")</script>';
        echo '<script>window.location="keranjang.php"</script>';
        } else{
            echo '<script>alert("produk sudah ada di keranjang")</script>';
            echo '<script>window.location="keranjang.php"</script>';
        } 

    } else{
        $item_array = array(
            'id'=> $_GET["id"],
            'nama' => $_POST["hidden_nama"],
            'harga' => $_POST["hidden_harga"],
            'foto' => $_POST["hidden_foto"],
            'jumlah' => $_POST["jumlah"],
            );
            $_SESSION["cart"][0] = $item_array;
            echo '<script>alert("produk berhasil dimasukan kedalam keranjang")</script>';
            echo '<script>window.location="keranjang.php"</script>';
    }
}

if (isset($_GET["aksi"])) {
  if ($_GET["aksi"] == "hapus") {
    foreach ($_SESSION["cart"] as $key => $value) {
      if ($value["id"] == $_GET["id"]) {
        unset($_SESSION["cart"] [$key]);
        echo '<script>alert("produk berhasil dihapus.")</script>';
        echo '<script>window.location="keranjang.php"</script>';
      }
    }
  } elseif ($_GET["aksi"] == "beli"){
    foreach ($_SESSION["cart"] as $key => $value) {
      $total =  $total + ($value["jumlah"] * $value["harga"]);

    }
    $query = mysqli_query($koneksi, "INSERT INTO tb_transaksi(tanggal,id_pelanggan,total) VALUE ('" . date("Y-m-d") . "','$id_user','$total')");
    $id_transaksi = mysqli_insert_id($koneksi);

    foreach ($_SESSION["cart"] as $key => $value){
      $id_produk = $value['id'];
      $jumlah = $value['jumlah'];
      $sql = "INSERT INTO tb_detail(id_transaksi,id_produk,jumlah) VALUES ('$id_transaksi', '$id_produk', '$jumlah')";
      $res = mysqli_query($koneksi,$sql);
    }
    if ($res > 0) {
      unset($_SESSION["cart"]);
      echo '<script>alert("Terima kasih sudah membeli")</script>';
      echo "<script>window.location='struk.php?id=" . $id_transaksi . "'</script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="keranjang.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
    
  <header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <header>
          <div class="header">
            <aside class="sidebar">
              <div class="sidebar-inner">
                <div class="sidebar-header">
                  <button type="button" onclick="toggleSidebar()">
                    <i class="fa-solid fa-bars"></i>
                  </button>
                  <img class="img-sidebar" src="#" alt="">
                </div>
                <nav class="sidebar-nav">
                  <button type="button">
                    <a href="index.php">Home</a>
                  </button>
                  <button type="button">
                    <a href="#">Edit</a>
                  </button>
                  <button type="button">
                    <a href="#">History</a>
                  </button>
                  <button type="button">
                    <a href="login.php">Sign Out</a>
                  </button>
                </nav>
              </div>
            </aside>
            <div class="logo">
              <img src="DapNik.png" alt="">
              <p>Confusion</p>
            </div>
          </div>
        </header>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
        <button type="button">
        <a href="keranjang.php"><i class="bi bi-cart2" style="color: #fff;"></i></a>
      </button>
      </div>
    </nav>
  </header>

<div class="cart">
<h2>Keranjang</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
          <tr>
              <th scope="col">Produk</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Harga</th>
              <th scope="col">Total Harga</th>
              <th scope="col">Aksi</th>
          </tr>
          </thead>
          <tbody>
          <?php
        if (!empty($_SESSION["cart"])){
            $total = 0;
            foreach ($_SESSION["cart"] as $key => $value){
        ?>
        <tr>
             <td>
                <img src="../foto/<?= $value["foto"] ?>" height="100px"><?= $value["nama"] ?>
             </td>
             <td><?= $value["jumlah"] ?></td>
             <td>Rp <?php echo number_format($value["harga"]) ?></td>
             <td>Rp <?php echo number_format($value["jumlah"] * $value["harga"], 2); ?> </td>
             <td><a href="keranjang.php?aksi=hapus&id=<?= $value["id"]; ?>"><span class="btn btn-danger">Hapus</span></td>
    
            </tr>

    <?php
   $total = $total + ($value["jumlah"] * $value["harga"]);
            }
            ?>
            <tr>
              <td collspam="3" align="right">Grand Total</td>
              <th align="right">Rp <?php echo number_format($total, 2); ?></th>
              <td>
                <a href="keranjang.php?aksi=beli"><span class="btn btn-outline-dark">Beli</span></a>
          </td>
          </tr>
          <?php
          }
?>
          </tbody>
        </table>
      </div>
    <!-- <div class="checkout-section">
        <div class="select-all">
            <input type="checkbox" class="select-all-checkbox"> Pilih Semua
        </div>
        <div class="checkout-details">
            <div class="total">
                <span>Total:</span>
                <span class="total-price">Rp 200,000</span>
            </div>
            <button class="checkout-btn">
                <span>Checkout</span>
                <span class="item-count">(2 barang)</span>
            </button>
        </div>
    </div> -->
</div>


<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
  </footer>
</div>
    <script type="text/javascript">
    const toggleSidebar = () => document.body.classList.toggle("open");
  </script>
</body>
</html>