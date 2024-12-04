<?php
include 'koneksi.php';

$id = $_GET['id'];

// Query untuk mengambil detail produk berdasarkan ID yang diberikan
$query = "SELECT * FROM produk WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

// Mengambil data sebagai array asosiatif
$koneksi = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - <?php echo $koneksi['nama']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dtl.css">
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
                <nav class="sidebar-nav ">
                  <button type="button">
                    <a href="index.php">Home</a>
                  </button>
                  <button type="button">
                    <a href="history.php">History</a>
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
              <img src="DapNik.png" alt="">
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

<div id="main">
    <div class="container" style="margin:5rem 0 3rem 1rem;">
        <div class="row" data-aos="fade-up">
            <div class="col-md-6 mb-4">
                <img src="../foto/<?php echo $koneksi['foto']; ?>" class="img-fluid rounded shadow product-image" alt="<?php echo $koneksi['nama']; ?>" style="width:500px; height500px;">
            </div>
            <div class="col-md-6">
                <h2 class="mb-3"><?php echo $koneksi['nama']; ?></h2>
                <p class="text-muted mb-3"><?php echo $koneksi['kategori']; ?></p>
                <h3 class="text-primary mb-4">Rp <?php echo number_format($koneksi['harga'], 0, ',', '.'); ?></h3>
                <form action="keranjang.php?id=<?php echo $id; ?>" method="POST">
                    <div class="mb-4">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" value="1" min="1">
                    </div>
                    <input type="hidden" name="hidden_nama" value="<?php echo $koneksi['nama']; ?>">
                    <input type="hidden" name="hidden_harga" value="<?php echo $koneksi['harga']; ?>">
                    <input type="hidden" name="hidden_foto" value="<?php echo $koneksi['foto']; ?>">
                    <div class="d-grid gap-2">
                        <button type="submit" name="add" class="btn btn-primary btn-lg">Tambah ke Keranjang</button>
                        <a href="struk.php?id=<?php echo $id; ?>" class="btn btn-success btn-lg">Beli Sekarang</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12">
                <h4 class="mb-3">Deskripsi Produk</h4>
                <p><?php echo $koneksi['dekskripsi']; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="container footer">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
        </ul>
        <p class="text-center text-body-secondary">&copy; 2024 Company, Inc</p>
      </footer>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();

    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>
<script type="text/javascript">
    const toggleSidebar = () => document.body.classList.toggle("open");
  </script>
</body>
</html>