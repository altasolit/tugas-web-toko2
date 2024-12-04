<?php
  include 'koneksi.php';
  session_start();
  if (isset($_POST['login'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $no_telepon = $_POST['no_telepon'];
    $alamat = $_POST['alamat'];
    if ($nama && $email && $username && $password) {
      $login = mysqli_query($koneksi,"INSERT INTO db_user(nama,email,username,password,hp,alamat,role) 
    VALUES('$nama','$email','$username','$password','$no_telepon','$alamat','pelanggan')" );
    }
    
    if ($login > 0) {
      //berhasil login 
        header("location: login.php");
    } else {
      // gagal login
      echo "Lengkapi datamu!";
      header('location: regis.php');
    }
  }
?>
<!DOCTYPE HTML>
<html>

<head>
  <link rel="stylesheet" href="regis.css">
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <video id="bg-video" poster="../cyberpunk.jpg" autoplay muted loop>
    <source src="cyber.mp4" type="video/mp4" />
  </video>
  <div class="filter">
  </div>
  <div class="container">
    <h1 class="Login">Login</h1>
    <form action="" method="post" encytype="multipart/form-data">
      <div>
        <label>Name</label><br>
        <input type="text"  placeholder="Enter name" name="nama"/>
      </div>
      <div>
        <label>Email</label><br>
        <input type="email" name="email" placeholder="Enter email" />
      </div>
      <div>
        <label>Username</label><br>
        <input type="text"  placeholder="Enter Username" name="username"/>
      </div>
      <div>
        <label type="password">Password</label><br>
        <input type="password" style="-webkit-text-security: square" placeholder="Enter Password"
          name="password" />
      </div>
      <div>
        <label>HP</label><br>
        <input type="tel" placeholder="Enter HP" name="no_telepon"/>
      </div>     
      <div>
        <label>Alamat</label><br>
        <input type="text"  placeholder="Enter Alamat" name="alamat"/>
      </div>      
      <div class="button">
        <button class="btn-hover color-9" type="submit" name="login" href="login.php">Log in</button>
      </div>

    </form>
  </div>
</body>

</html>