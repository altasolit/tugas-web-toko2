<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

require_once 'koneksi.php';

// Fungsi untuk membersihkan output
function clean_output($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Query untuk mengambil data transaksi beserta detail produk
$sql = "SELECT t.id_transaksi, u.nama AS nama_pembeli, t.total, t.tanggal,
               p.nama AS nama_produk, p.harga, p.kategori, p.dekskripsi, p.foto, d.jumlah
        FROM tb_transaksi t
        JOIN db_user u ON t.id_pelanggan = u.id
        JOIN tb_detail d ON t.id_transaksi = d.id_transaksi
        JOIN produk p ON d.id_produk = p.id
        ORDER BY t.tanggal DESC";

$stmt = $koneksi->prepare($sql);
if ($stmt === false) {
    die("Error preparing statement: " . $koneksi->error);
}

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
    <title>History Transaksi Pembelian</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-responsive {
            max-height: 600px;
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">History Transaksi Pembelian</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Nama Pembeli</th>
                        <th>Total Harga</th>
                        <th>Tanggal Transaksi</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Jumlah Barang</th>
                        <th>Foto Produk</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . clean_output($row["id_transaksi"]) . "</td>
                                    <td>" . clean_output($row["nama_pembeli"]) . "</td>
                                    <td>Rp " . number_format($row["total"], 2, ',', '.') . "</td>
                                    <td>" . clean_output($row["tanggal"]) . "</td>
                                    <td>" . clean_output($row["nama_produk"]) . "</td>
                                    <td>Rp " . number_format($row["harga"], 2, ',', '.') . "</td>
                                    <td>" . clean_output($row["kategori"]) . "</td>
                                    <td>" . clean_output($row["dekskripsi"]) . "</td>
                                    <td>" . clean_output($row["jumlah"]) . "</td>
                                    <td><img src='../foto/" . clean_output($row["foto"]) . "' alt='" . clean_output($row["nama_produk"]) . "' class='img-thumbnail' width='100'></td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='10' class='text-center'>Tidak ada data transaksi.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$stmt->close();
$koneksi->close();
?>