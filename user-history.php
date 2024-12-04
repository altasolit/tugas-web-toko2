<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['id_user'])) {
    header('Location: login.php');
    exit();
}

require_once 'koneksi.php';

// Fungsi untuk membersihkan output
function clean_output($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Query untuk mengambil data transaksi beserta detail produk untuk pelanggan tertentu
$sql = "SELECT t.id_transaksi, t.total, t.tanggal,
               p.nama AS nama_produk, p.harga, p.kategori, p.dekskripsi, p.foto, d.jumlah
        FROM tb_transaksi t
        JOIN tb_detail d ON t.id_transaksi = d.id_transaksi
        JOIN produk p ON d.id_produk = p.id
        WHERE t.id_pelanggan = ?
        ORDER BY t.tanggal DESC";

$stmt = $koneksi->prepare($sql);
if ($stmt === false) {
    die("Error preparing statement: " . $koneksi->error);
}

$stmt->bind_param("i", $_SESSION['id_user']);

if (!$stmt->execute()) {
    die("Error executing statement: " . $stmt->error);
}

$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Transaksi Anda</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .header {
  width: 100;
  height: 52px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  color: #000000;
  padding: 10px;
}

.logo {
  display: flex;
  align-items: center;
  font-family: 'Times New Roman', Times, serif;
  font-size: 27px;
  font-weight: bold;
}

.logo img {
  height: 40px;
  margin-right: 10px;
  margin-left: 40px;
  /* border: 1px solid #fff; */
}

.logo p {
  height: 40px;
  margin-top: 20px;
  margin-right: 600px;
  color: #fff;
  /* border: 1px solid #fff; */
}

button {
  background: transparent;
  border: 0;
  padding: 0;
  cursor: pointer;
}

.sidebar {
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  width: 72px;
  height: 71px;
  transition: width 0.4s;
}

body.open .sidebar {
  width: 300px;
  height: 100vh;
}

.sidebar-inner {
  position: absolute;
  top: 0;
  left: 0;
  width: 300px;
  height: inherit;
  display: flex;
  flex-direction: column;
  padding-bottom: 10px;
  height: 102vh;
}

.sidebar-header {
  display: flex;
  align-items: center;
  height: 72px;
  padding: 0 1.25rem 0 0;
}

.sidebar-header button {
  display: flex;
  align-items: center;
  height: 72px;
  width: 72px;
  font-family: "Poppins";
  font-size: 16px;
  font-weight: 200;
  letter-spacing: 2px;
  line-height: 1;
  /* border: 1px solid #ffff; */
}

.sidebar-header button > i {
  align-items: center;
  margin-left: 28px;
}

.sidebar-header button > a {
  color: #ffffff;
  opacity: 0;
  transition: 0.3s;
  text-decoration: none;
}

body.open .sidebar-header button>a {
  opacity: 1;
  animation: appear 0.3s both;
}

/* .sidebar-logo {
  height: 20px;
  opacity: 0;
  transition: 0.3s;
}

body.open .sidebar-logo {
  opacity: 1;
} */

.sidebar-nav {
  padding-top: 10px;
  flex: 1 1 auto;
  background-color: #A0937D;
  opacity: 80%;
}

.sidebar-nav button {
  display: flex;
  gap: 25px;
  align-items: center;
  height: 50px;
  width: 72px;
  font-family: "Poppins";
  font-size: 16px;
  font-weight: 200;
  letter-spacing: 2px;
  line-height: 1;
  padding: 0 25px;
  /* border: 1px solid #ffff; */
}

.sidebar-nav button > img {
  width: 24px;
  height: 24px;
}

.sidebar-nav button > a {
  color: #000000;
  opacity: 0;
  transition: 0.3s;
  text-decoration: none;
}

body.open .sidebar-nav button>a {
  opacity: 1;
  animation: appear 0.3s both;
}

.fa-duotome {
  size: 20px;
}

.img-sidebar {
  width: 40px;
  height: auto;
  /* border: 1px solid #fff; */
}

.d-flex > input {
  width: 200px;
  height: 32px;
  margin-top: 5px;
}

.d-flex > button {
  width: 80px;  
  height: 32px;
  margin-top: 5px;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
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
                <nav class="sidebar-nav ">
                  <button type="button">
                    <a href="index.php">Home</a>
                  </button>
                  <button type="button">
                    <a href="user-history.php">History</a>
                  </button>
                  <button type="button">
                    <a href="Produk.php">Product</a>
                  </button>
                  <button type="button">
                    <a href="profil.php">Accounts</a>
                  </button>
                </nav>
              </div>
            </aside>
            <div class="logo">
              <img src="./DapNik.png" alt="">
              <p>Confusion</p>
            </div>
          </div>
        </header>

        <div class="collapse navbar-collapse col-mb-3" id="navbarCollapse">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success " type="submit">Search</button>
          </form>
        </div>
        <button type="button flex">
          <a href="keranjang.php"><i class="bi bi-cart2" style="color: #fff;"></i></a>
        </button>
      </div>
    </nav>
  </header>
    <div class="container mt-5">
        <h2 class="mb-4">History Transaksi Anda</h2>

            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Total Harga</th>
                        <th>Tanggal Transaksi</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Jumlah Barang</th>
                        <th>Foto Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . clean_output($row["id_transaksi"]) . "</td>
                                    <td>Rp " . number_format($row["total"], 2, ',', '.') . "</td>
                                    <td>" . clean_output($row["tanggal"]) . "</td>
                                    <td>" . clean_output($row["nama_produk"]) . "</td>
                                    <td>Rp " . number_format($row["harga"], 2, ',', '.') . "</td>
                                    <td>" . clean_output($row["kategori"]) . "</td>
                                    <td>" . clean_output($row["dekskripsi"]) . "</td>
                                    <td>" . clean_output($row["jumlah"]) . "</td>
                                    <td><img src='../foto/" . clean_output($row["foto"]) . "' alt='" . clean_output($row["nama_produk"]) . "' class='img-thumbnail' width='100'></td>
                                    <td style='width:120px;'><a type='button' href='struk.php?id=". clean_output($row['id_transaksi']).";' style='text-decoration: none;width:90px;'>Lihat nota</a></td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='9' class='text-center'>Anda belum memiliki transaksi.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>

    </div>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
    const toggleSidebar = () => document.body.classList.toggle("open");
  </script>
</body>
</html>

<?php
$stmt->close();
$koneksi->close();
?>