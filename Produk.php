<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WEB JUAL BELI GAME</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="produk.css">
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path
        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path
        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path
        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path
        d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>

  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
      aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
        <use href="#circle-half"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
          aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#sun-fill"></use>
          </svg>
          Light
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
          aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
          </svg>
          Dark
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
          aria-pressed="true">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#circle-half"></use>
          </svg>
          Auto
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
    </ul>
  </div>


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
                    <a href="#">History</a>
                  </button>
                  <button type="button">
                    <a href="#">Calculator</a>
                  </button>
                  <button type="button">
                    <a href="profil.php">Accounts</a>
                  </button>
                </nav>
              </div>
            </aside>
            <div class="logo">
              <img src="DapNik.png" alt="">
              <p>Confesion</p>
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

  <main>


    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active col-md-7">
          <img src="./foto/coba.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/img"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)" /></img>
          <div class="container">
            <div class="carousel-caption text-start">
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-7">
          <img src="./foto/pubg.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/img"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)" /></img>
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-7">
          <img src="./foto/steam.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/img"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)" /></img>
          <div class="container">
            <div class="carousel-caption text-end">
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    
    </div>
        <div class="judul-contain">
            <h3 class="">Genre RPG</h3>
        </div>
    <div class="container-main">
    <?php
        include 'koneksi.php';
        $tambah = mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori='rpg'");
        while ($produk = mysqli_fetch_array($tambah)) {
            // Default image if no image is found
            $image = !empty($produk['foto']) ? "../foto/" . $produk['foto'] : "default.jpg"; 
            
            // Truncate description if too long
            $description = strlen($produk['dekskripsi']) > 100 ? substr($produk['dekskripsi'], 0, 100) . '...' : $produk['dekskripsi'];
            
            // Calculate discounted price if applicable
            $originalPrice = $produk['harga'];
            $discount = isset($produk['diskon']) && $produk['diskon'] > 0 ? $produk['diskon'] : 0;
            $finalPrice = $originalPrice - ($originalPrice * ($discount / 100));
    ?>
        <div class="col-lg-4 col-md-6 mb-5">
            <article class="card h-100 shadow-sm" style="border: none; overflow: hidden; transition: transform 0.3s ease;">
                <div class="position-relative">
                    <img class="card-img-top img-fluid" src="<?= $image ?>" alt="<?= $produk['nama'] ?>" style="transition: transform 0.3s ease; width:300px;height:200px;">
                    <?php if ($discount > 0): ?>
                        <div class="badge bg-danger text-white position-absolute" style="top: 10px; right: 10px;">
                            -<?= $discount ?>%
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center font-weight-bold"><?= $produk['nama'] ?></h5>
                    <p class="card-text text-muted"><?= $description ?></p>
                    <div class="mt-auto">
                        <?php if ($discount > 0): ?>
                            <p class="price font-weight-bold text-center text-danger mb-0">
                                <span class="text-muted"><s>Rp. <?= number_format($originalPrice); ?></s></span><br>
                                Rp. <?= number_format($finalPrice); ?> 
                            </p>
                        <?php else: ?>
                            <p class="price font-weight-bold text-center text-primary">Rp. <?= number_format($finalPrice); ?></p>
                        <?php endif; ?>
                        <div class="rating text-center mt-3">
                            <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> <!-- Example rating -->
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <div class="text-center">
                        <a class="btn btn-outline-primary mt-auto" href="detail.php?aksi=edit&id=<?= $produk['id'] ?>">DETAIL</a>
                    </div>
                </div>
            </article>
        </div>

        <style>
            .card:hover {
                transform: scale(1.05);
            }
            .card-img-top:hover {
                transform: scale(1.1);
            }
            .card:hover .badge {
                background-color: #ff4500;
            }
        </style>
    <?php } ?>
</div>
    </div>
        <div class="judul-contain">
            <h3 class="">Genre Sport</h3>
        </div>
    <div class="container-main">
    <?php
        include 'koneksi.php';
        $tambah = mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori='sport'");
        while ($produk = mysqli_fetch_array($tambah)) {
            // Default image if no image is found
            $image = !empty($produk['foto']) ? "../foto/" . $produk['foto'] : "default.jpg"; 
            
            // Truncate description if too long
            $description = strlen($produk['dekskripsi']) > 100 ? substr($produk['dekskripsi'], 0, 100) . '...' : $produk['dekskripsi'];
            
            // Calculate discounted price if applicable
            $originalPrice = $produk['harga'];
            $discount = isset($produk['diskon']) && $produk['diskon'] > 0 ? $produk['diskon'] : 0;
            $finalPrice = $originalPrice - ($originalPrice * ($discount / 100));
    ?>
        <div class="col-lg-4 col-md-6 mb-5">
            <article class="card h-100 shadow-sm" style="border: none; overflow: hidden; transition: transform 0.3s ease;">
                <div class="position-relative">
                    <img class="card-img-top img-fluid" src="<?= $image ?>" alt="<?= $produk['nama'] ?>" style="transition: transform 0.3s ease; width:300px;height:200px;">
                    <?php if ($discount > 0): ?>
                        <div class="badge bg-danger text-white position-absolute" style="top: 10px; right: 10px;">
                            -<?= $discount ?>%
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center font-weight-bold"><?= $produk['nama'] ?></h5>
                    <p class="card-text text-muted"><?= $description ?></p>
                    <div class="mt-auto">
                        <?php if ($discount > 0): ?>
                            <p class="price font-weight-bold text-center text-danger mb-0">
                                <span class="text-muted"><s>Rp. <?= number_format($originalPrice); ?></s></span><br>
                                Rp. <?= number_format($finalPrice); ?> 
                            </p>
                        <?php else: ?>
                            <p class="price font-weight-bold text-center text-primary">Rp. <?= number_format($finalPrice); ?></p>
                        <?php endif; ?>
                        <div class="rating text-center mt-3">
                            <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> <!-- Example rating -->
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <div class="text-center">
                        <a class="btn btn-outline-primary mt-auto" href="detail.php?aksi=edit&id=<?= $produk['id'] ?>">DETAIL</a>
                    </div>
                </div>
            </article>
        </div>

        <style>
            .card:hover {
                transform: scale(1.05);
            }
            .card-img-top:hover {
                transform: scale(1.1);
            }
            .card:hover .badge {
                background-color: #ff4500;
            }
        </style>
    <?php } ?>
</div>
    </div>
        <div class="judul-contain">
            <h3 class="">Genre Casual</h3>
        </div>
    <div class="container-main">
    <?php
        include 'koneksi.php';
        $tambah = mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori='casual'");
        while ($produk = mysqli_fetch_array($tambah)) {
            // Default image if no image is found
            $image = !empty($produk['foto']) ? "../foto/" . $produk['foto'] : "default.jpg"; 
            
            // Truncate description if too long
            $description = strlen($produk['dekskripsi']) > 100 ? substr($produk['dekskripsi'], 0, 100) . '...' : $produk['dekskripsi'];
            
            // Calculate discounted price if applicable
            $originalPrice = $produk['harga'];
            $discount = isset($produk['diskon']) && $produk['diskon'] > 0 ? $produk['diskon'] : 0;
            $finalPrice = $originalPrice - ($originalPrice * ($discount / 100));
    ?>
        <div class="col-lg-4 col-md-6 mb-5">
            <article class="card h-100 shadow-sm" style="border: none; overflow: hidden; transition: transform 0.3s ease;">
                <div class="position-relative">
                    <img class="card-img-top img-fluid" src="<?= $image ?>" alt="<?= $produk['nama'] ?>" style="transition: transform 0.3s ease; width:300px;height:200px;">
                    <?php if ($discount > 0): ?>
                        <div class="badge bg-danger text-white position-absolute" style="top: 10px; right: 10px;">
                            -<?= $discount ?>%
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center font-weight-bold"><?= $produk['nama'] ?></h5>
                    <p class="card-text text-muted"><?= $description ?></p>
                    <div class="mt-auto">
                        <?php if ($discount > 0): ?>
                            <p class="price font-weight-bold text-center text-danger mb-0">
                                <span class="text-muted"><s>Rp. <?= number_format($originalPrice); ?></s></span><br>
                                Rp. <?= number_format($finalPrice); ?> 
                            </p>
                        <?php else: ?>
                            <p class="price font-weight-bold text-center text-primary">Rp. <?= number_format($finalPrice); ?></p>
                        <?php endif; ?>
                        <div class="rating text-center mt-3">
                            <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> <!-- Example rating -->
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <div class="text-center">
                        <a class="btn btn-outline-primary mt-auto" href="detail.php?aksi=edit&id=<?= $produk['id'] ?>">DETAIL</a>
                    </div>
                </div>
            </article>
        </div>

        <style>
            .card:hover {
                transform: scale(1.05);
            }
            .card-img-top:hover {
                transform: scale(1.1);
            }
            .card:hover .badge {
                background-color: #ff4500;
            }
        </style>
    <?php } ?>
</div>
    </div>
        <div class="judul-contain">
            <h3 class="">Genre Survival</h3>
        </div>
    <div class="container-main">
    <?php
        include 'koneksi.php';
        $tambah = mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori='survival'");
        while ($produk = mysqli_fetch_array($tambah)) {
            // Default image if no image is found
            $image = !empty($produk['foto']) ? "../foto/" . $produk['foto'] : "default.jpg"; 
            
            // Truncate description if too long
            $description = strlen($produk['dekskripsi']) > 100 ? substr($produk['dekskripsi'], 0, 100) . '...' : $produk['dekskripsi'];
            
            // Calculate discounted price if applicable
            $originalPrice = $produk['harga'];
            $discount = isset($produk['diskon']) && $produk['diskon'] > 0 ? $produk['diskon'] : 0;
            $finalPrice = $originalPrice - ($originalPrice * ($discount / 100));
    ?>
        <div class="col-lg-4 col-md-6 mb-5">
            <article class="card h-100 shadow-sm" style="border: none; overflow: hidden; transition: transform 0.3s ease;">
                <div class="position-relative">
                    <img class="card-img-top img-fluid" src="<?= $image ?>" alt="<?= $produk['nama'] ?>" style="transition: transform 0.3s ease; width:300px;height:200px;">
                    <?php if ($discount > 0): ?>
                        <div class="badge bg-danger text-white position-absolute" style="top: 10px; right: 10px;">
                            -<?= $discount ?>%
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center font-weight-bold"><?= $produk['nama'] ?></h5>
                    <p class="card-text text-muted"><?= $description ?></p>
                    <div class="mt-auto">
                        <?php if ($discount > 0): ?>
                            <p class="price font-weight-bold text-center text-danger mb-0">
                                <span class="text-muted"><s>Rp. <?= number_format($originalPrice); ?></s></span><br>
                                Rp. <?= number_format($finalPrice); ?> 
                            </p>
                        <?php else: ?>
                            <p class="price font-weight-bold text-center text-primary">Rp. <?= number_format($finalPrice); ?></p>
                        <?php endif; ?>
                        <div class="rating text-center mt-3">
                            <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> <!-- Example rating -->
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <div class="text-center">
                        <a class="btn btn-outline-primary mt-auto" href="detail.php?aksi=edit&id=<?= $produk['id'] ?>">DETAIL</a>
                    </div>
                </div>
            </article>
        </div>

        <style>
            .card:hover {
                transform: scale(1.05);
            }
            .card-img-top:hover {
                transform: scale(1.1);
            }
            .card:hover .badge {
                background-color: #ff4500;
            }
        </style>
    <?php } ?>
</div>
    </div>
        <div class="judul-contain">
            <h3 class="">Genre Horror</h3>
        </div>
    <div class="container-main">
    <?php
        include 'koneksi.php';
        $tambah = mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori='horor'");
        while ($produk = mysqli_fetch_array($tambah)) {
            // Default image if no image is found
            $image = !empty($produk['foto']) ? "../foto/" . $produk['foto'] : "default.jpg"; 
            
            // Truncate description if too long
            $description = strlen($produk['dekskripsi']) > 100 ? substr($produk['dekskripsi'], 0, 100) . '...' : $produk['dekskripsi'];
            
            // Calculate discounted price if applicable
            $originalPrice = $produk['harga'];
            $discount = isset($produk['diskon']) && $produk['diskon'] > 0 ? $produk['diskon'] : 0;
            $finalPrice = $originalPrice - ($originalPrice * ($discount / 100));
    ?>
        <div class="col-lg-4 col-md-6 mb-5">
            <article class="card h-100 shadow-sm" style="border: none; overflow: hidden; transition: transform 0.3s ease;">
                <div class="position-relative">
                    <img class="card-img-top img-fluid" src="<?= $image ?>" alt="<?= $produk['nama'] ?>" style="transition: transform 0.3s ease; width:300px;height:200px;">
                    <?php if ($discount > 0): ?>
                        <div class="badge bg-danger text-white position-absolute" style="top: 10px; right: 10px;">
                            -<?= $discount ?>%
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center font-weight-bold"><?= $produk['nama'] ?></h5>
                    <p class="card-text text-muted"><?= $description ?></p>
                    <div class="mt-auto">
                        <?php if ($discount > 0): ?>
                            <p class="price font-weight-bold text-center text-danger mb-0">
                                <span class="text-muted"><s>Rp. <?= number_format($originalPrice); ?></s></span><br>
                                Rp. <?= number_format($finalPrice); ?> 
                            </p>
                        <?php else: ?>
                            <p class="price font-weight-bold text-center text-primary">Rp. <?= number_format($finalPrice); ?></p>
                        <?php endif; ?>
                        <div class="rating text-center mt-3">
                            <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> <!-- Example rating -->
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <div class="text-center">
                        <a class="btn btn-outline-primary mt-auto" href="detail.php?aksi=edit&id=<?= $produk['id'] ?>">DETAIL</a>
                    </div>
                </div>
            </article>
        </div>

        <style>
            .card:hover {
                transform: scale(1.05);
            }
            .card-img-top:hover {
                transform: scale(1.1);
            }
            .card:hover .badge {
                background-color: #ff4500;
            }
        </style>
    <?php } ?>
</div>
    </div>
        <div class="judul-contain">
            <h3 class="">Genre Action</h3>
        </div>
    <div class="container-main">
    <?php
        include 'koneksi.php';
        $tambah = mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori='action'");
        while ($produk = mysqli_fetch_array($tambah)) {
            // Default image if no image is found
            $image = !empty($produk['foto']) ? "../foto/" . $produk['foto'] : "default.jpg"; 
            
            // Truncate description if too long
            $description = strlen($produk['dekskripsi']) > 100 ? substr($produk['dekskripsi'], 0, 100) . '...' : $produk['dekskripsi'];
            
            // Calculate discounted price if applicable
            $originalPrice = $produk['harga'];
            $discount = isset($produk['diskon']) && $produk['diskon'] > 0 ? $produk['diskon'] : 0;
            $finalPrice = $originalPrice - ($originalPrice * ($discount / 100));
    ?>
        <div class="col-lg-4 col-md-6 mb-5">
            <article class="card h-100 shadow-sm" style="border: none; overflow: hidden; transition: transform 0.3s ease;">
                <div class="position-relative">
                    <img class="card-img-top img-fluid" src="<?= $image ?>" alt="<?= $produk['nama'] ?>" style="transition: transform 0.3s ease; width:300px;height:200px;">
                    <?php if ($discount > 0): ?>
                        <div class="badge bg-danger text-white position-absolute" style="top: 10px; right: 10px;">
                            -<?= $discount ?>%
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center font-weight-bold"><?= $produk['nama'] ?></h5>
                    <p class="card-text text-muted"><?= $description ?></p>
                    <div class="mt-auto">
                        <?php if ($discount > 0): ?>
                            <p class="price font-weight-bold text-center text-danger mb-0">
                                <span class="text-muted"><s>Rp. <?= number_format($originalPrice); ?></s></span><br>
                                Rp. <?= number_format($finalPrice); ?> 
                            </p>
                        <?php else: ?>
                            <p class="price font-weight-bold text-center text-primary">Rp. <?= number_format($finalPrice); ?></p>
                        <?php endif; ?>
                        <div class="rating text-center mt-3">
                            <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> <!-- Example rating -->
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <div class="text-center">
                        <a class="btn btn-outline-primary mt-auto" href="detail.php?aksi=edit&id=<?= $produk['id'] ?>">DETAIL</a>
                    </div>
                </div>
            </article>
        </div>

        <style>
            .card:hover {
                transform: scale(1.05);
            }
            .card-img-top:hover {
                transform: scale(1.1);
            }
            .card:hover .badge {
                background-color: #ff4500;
            }
        </style>
    <?php } ?>
</div>

    </div><!-- /.container -->

    <!-- <div class="b-example-divider"></div> -->
    <!-- FOOTER -->

    <!-- <p class="float-end"><a href="#">Back to top</a></p> -->
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
  </div>

  </main>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    const toggleSidebar = () => document.body.classList.toggle("open");
  </script>
  <script src="script.js"></script>
</body>

</html>