<?php
  include 'koneksi.php';
  session_start();
  
  // Cek apakah pengguna sudah login
  if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
  }

  // Mengambil data pengguna dari database berdasarkan ID user yang tersimpan di session
  $query = "SELECT * FROM db_user WHERE id='$_SESSION[id_user]'";
  $result = mysqli_query($koneksi, $query);
  $data = mysqli_fetch_array($result);

  // Update profil
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $bio = $_POST['bio'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    // Update data user ke database
    $queryUpdate = "UPDATE db_user SET nama='$nama', email='$email', username='$username', password='$password', hp='$hp', alamat='$alamat', bio='$bio', tanggal_lahir='$tanggal_lahir' WHERE id='$_SESSION[id_user]'";
    $stmtUpdate = mysqli_prepare($koneksi, $queryUpdate);
        mysqli_stmt_bind_param($stmtUpdate, "sssssssi", $nama, $email, $username, $hp, $alamat, $bio, $tanggal_lahir, $_SESSION['id_user']);
    if (mysqli_query($koneksi, $queryUpdate)) {
      echo "Profil berhasil diperbarui!";
    } else {
      echo "Gagal memperbarui profil!";
    }
  }
  $update_message = '';
$update_success = false;

// Update profil
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (mysqli_stmt_execute($stmtUpdate)) {
        $update_message = "Profil berhasil diperbarui!";
        $update_success = true;

        $result = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($result);
    } else {
        $update_message = "Gagal memperbarui profil: " . mysqli_error($koneksi);
    }

    // Jika update berhasil, redirect ke profil.php
    if ($update_success) {
        $_SESSION['update_message'] = $update_message;
        header("Location: profil.php");
        exit();
    }
}
?>

<!doctype html>
<html lang="id" data-bs-theme="auto">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Profil</title>
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

  <div class="container mt-5">
    <h1 class="mb-4">Edit Profil</h1>
    <?php if (!empty($update_message)): ?>
            <div class="alert alert-info" role="alert">
                <?php echo $update_message; ?>
            </div>
        <?php endif; ?>
    <form method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required>
                <div class="invalid-feedback">
                    Nama harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>" required>
                <div class="invalid-feedback">
                    Email harus diisi dengan format yang benar.
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password Baru (kosongkan jika tidak ingin mengubah):</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($data['username']); ?>" required>
                <div class="invalid-feedback">
                    Username harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="hp" class="form-label">No. HP:</label>
                <input type="tel" class="form-control" id="hp" name="hp" value="<?php echo htmlspecialchars($data['hp']); ?>" required>
                <div class="invalid-feedback">
                    Nomor HP harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" required><?php echo htmlspecialchars($data['alamat']); ?></textarea>
                <div class="invalid-feedback">
                    Alamat harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Bio:</label>
                <textarea class="form-control" id="bio" name="bio"><?php echo htmlspecialchars($data['bio']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo htmlspecialchars($data['tanggal_lahir']); ?>" required>
                <div class="invalid-feedback">
                    Tanggal lahir harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="profil.php" class="btn btn-secondary">Kembali ke Profil</a>
            </div>
        </form>
  </div>

  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
