<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembelian</title>
    <link rel="stylesheet" href="strk.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    include 'koneksi.php';
    session_start();
    if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
    }

    $koneksi = mysqli_connect("localhost", "root", "", "db_toko");
    if (!$koneksi) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }

    if (!isset($_GET['id']) || empty($_GET['id'])) {
        die("ID transaksi tidak ditemukan");
    }

    $id = $_GET['id'];

    // Query transaksi
    $trans = "SELECT * FROM tb_detail 
    INNER JOIN tb_transaksi ON tb_detail.id_transaksi = tb_transaksi.id_transaksi
    WHERE tb_detail.id_transaksi='$id'";
    $query = mysqli_query($koneksi, $trans);
    if (!$query || mysqli_num_rows($query) == 0) {
        die("Data transaksi tidak ditemukan");
    }
    $data = mysqli_fetch_array($query);

    // Query user
    $res = "SELECT * FROM tb_transaksi 
    INNER JOIN db_user ON tb_transaksi.id_pelanggan = db_user.id
    WHERE tb_transaksi.id_transaksi='$id'";
    $query = mysqli_query($koneksi, $res);
    if (!$query || mysqli_num_rows($query) == 0) {
        die("Data user tidak ditemukan");
    }
    $user = mysqli_fetch_array($query);
    
    ?>
    <div class="receipt" style="width: 65%">
        <h1>Confusion</h1>
        <p>Jl.Naga kembar No.666</p>
        <p>Telepon: 021-12399917</p>
        <hr>        
        <div style="clear: both"></div>
        <div class="table-responsive"></div>
            <table class="table table-bordered receipt-table">
                No. Invoice : INV-<?= $id ?> <br>
                Nama Pembeli: <?= ucfirst($user['nama'])?> <br> <!-- Pastikan kolom nama ada -->
                Tanggal Pembelian <?= $data['tanggal']?>
                <tr>
                    <th width="30%">Nama Barang</th>
                    <th width="10%">Qty</th>
                </tr>

                <?php
                $prod = "SELECT * FROM tb_detail
                INNER JOIN produk ON tb_detail.id_produk = produk.id
                WHERE tb_detail.id_transaksi='$id'";
                $query2 = mysqli_query($koneksi, $prod);
                
                while ($row = mysqli_fetch_array($query2)) { ?>
                    <tr>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['jumlah'] ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td>Grand Total</td>
                    <td align="right">Rp <?= number_format($data['total'], 2); ?></td>
                </tr>
            </table>
            <div class="mt-6 text-center" style="display: flex;flex-direction: column;align-items: center;">
                <p class="text-sm text-gray">terima kasih atas pemebelian anda</p>
                <div class="container-card" style="display:flex;">                
                    <button class="card" style="margin-right: 5px;" id="Print">Print</button>            
                    <button class="card" style="margin-left: 5px;">
                        <a href="index.php" style="text-decoration: none;color: #000;">Home</a>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <script>
        document.getElementById("Print").addEventListener("click", () => {
            window.print();
        });
    </script>

</body>
</html>
