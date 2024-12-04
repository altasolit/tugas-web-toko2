<?php

include 'koneksi.php';

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $bio = $_POST['bio'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    // buat query update
    $sql = "UPDATE db_user SET nama='$nama', email='$email', username='$username', password='$password', hp='$hp', alamat='$alamat', bio='$bio', tanggal_lahir='$tanggal_lahir' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: profil.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}