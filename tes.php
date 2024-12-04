

<!DOCTYPE html>
<html>
<head>
    <title>Form Profil Steam</title>
    <link rel="stylesheet" href="tes.css">
</head>
<body>
    <h2>Input Profil Steam</h2>
    <form action="simpan-img.php" method="post" enctype="multipart/form-data">
        Username: <input type="text" name="username" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Level: <input type="number" name="level" required><br><br>
        Avatar: <input type="file" name="avatar" accept="image/*"><br><br>
        Game Favorit: <input type="text" name="favorite_game"><br><br>
        Bio: <textarea name="bio"></textarea><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
