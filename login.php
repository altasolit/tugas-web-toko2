<?php
  include 'koneksi.php';
  session_start();
  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = mysqli_query($koneksi,
    "SELECT * FROM db_user where username='$username' and password='$password' ");
    
    if (mysqli_num_rows($login) > 0) {
      $koneksi = mysqli_fetch_assoc($login);
      if ($koneksi['role'] == "admin") {
        $_SESSION['admin'] = $username;
        header("location: dashboard.php");
      }elseif ($koneksi['role'] == "pelanggan") {
        $_SESSION['password'] = $koneksi['password'];
        $_SESSION['username'] = $koneksi['username'];
        $_SESSION['nama'] = $koneksi['nama'];
        $_SESSION['email'] = $koneksi['email'];
        $_SESSION['hp'] = $koneksi['hp'];
        $_SESSION['alamat'] = $koneksi['alamat'];
        $_SESSION['bio'] = $koneksi['bio'];
        $_SESSION['tanggal_lahir'] = $koneksi['tanggal_lahir'];
        $_SESSION['id_user'] = $koneksi['id'];
        header('location: profil.php');      
      }

    } else {
      echo "Username dan Password salah!";
      header('location: login.php');
    }
  }

?>
<!DOCTYPE HTML>
<html>

<head>
  <link rel="stylesheet" href="main.css">
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
    <form action="" method="post">
      <div>
        <label>Username</label><br>
        <input type="text" name="username" placeholder="Enter Username" />
      </div>
      <div>
        <label type="password">Password</label><br>
        <input type="password" style="-webkit-text-security: square" placeholder="Enter Password"
          name="password" />
      </div>
      <div class="forget">
        <label for=""><input type="checkbox" name="remember">Remember Me</label>
        <a >Forget Password</a>
      </div>
      <div class="button">
        <button class="btn-hover color-9" type="submit" name="login">Log in</button>
      </div>
      <div class="fluid"><br>
        <p>don't have an account?<a href="regis.php" name="register"> Register</a></p>
      </div>
    </form>
  </div>
</body>

</html>