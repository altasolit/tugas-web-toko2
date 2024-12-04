<?php
  include 'koneksi.php';
  session_start();
  if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $register = mysqli_query($koneksi,"INSERT INTO db_user(username,password) 
    VALUES('$username','$password')" );
    
    if ($register > 0) {
      //berhasil login 
        header("location: login.php");
    } else {
      // gagal login
      header('location: adminreg.php');
    }
  }
?>
<!DOCTYPE HTML>
<html>

<head>
  <link rel="stylesheet" href="adminreg.css">
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
        <label>Username</label><br>
        <input type="text"  placeholder="Enter Username" name="username"value="<?=@$username?>"/>
      </div>
      <div>
        <label type="password">Password</label><br>
        <input type="password" style="-webkit-text-security: square" placeholder="Enter Password"
          name="password" value="<?=@$password?>" />
      </div>  
      <div class="button">
        <button class="btn-hover color-9" type="submit" name="register" >Log in</button>
      </div>

    </form>
  </div>
</body>

</html>