<?php
include 'koneksi.php';

// Fungsi untuk mendapatkan data pengguna berdasarkan ID
function getUserById($id, $koneksi) {
    $sql = "SELECT * FROM tb_profil WHERE id = $id";
    $result = $koneksi->query($sql);
    return $result->fetch_assoc();
}

// Fungsi untuk menyimpan atau mengupdate data pengguna
function saveUser($data, $files, $koneksi) {
    $id = isset($data['id']) ? $koneksi->real_escape_string($data['id']) : null;
    $username = $koneksi->real_escape_string($data['username']);
    $email = $koneksi->real_escape_string($data['email']);
    $level = $koneksi->real_escape_string($data['level']);
    $favorite_game = $koneksi->real_escape_string($data['favorite_game']);
    $bio = $koneksi->real_escape_string($data['bio']);

    // Upload Avatar
    $avatar = "";
    if (isset($files['avatar']) && $files['avatar']['error'] == 0) {
        $avatar_name = basename($files['avatar']['name']);
        $avatar_path = "uploads/" . $avatar_name;

        if (move_uploaded_file($files['avatar']['tmp_name'], $avatar_path)) {
            $avatar = $avatar_path;
        } else {
            echo "Error uploading avatar.";
            exit;
        }
    }

    // Jika ID ada, lakukan update, jika tidak, lakukan insert
    if ($id) {
        if ($avatar) {
            $sql = "UPDATE tb_profil SET username='$username', email='$email', level='$level', avatar='$avatar', favorite_game='$favorite_game', bio='$bio' WHERE id='$id'";
        } else {
            $sql = "UPDATE tb_profil SET username='$username', email='$email', level='$level', favorite_game='$favorite_game', bio='$bio' WHERE id='$id'";
        }
    } else {
        $sql = "INSERT INTO tb_profil (username, email, level, avatar, favorite_game, bio) VALUES ('$username', '$email', '$level', '$avatar', '$favorite_game', '$bio')";
    }

    if ($koneksi->query($sql) === TRUE) {
        header("Location: p.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

// Menangani pengiriman form (simpan atau update)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    saveUser($_POST, $_FILES, $koneksi);
}

// Mendapatkan data pengguna jika sedang mengedit
$user = null;
if (isset($_GET['id'])) {
    $user = getUserById($_GET['id'], $koneksi);
}

// Mendapatkan semua pengguna untuk ditampilkan dalam tabel
$sql = "SELECT * FROM tb_profil";
$result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Steam</title>
    <link rel="stylesheet" href="tes.css">
</head>
<body>
    <div class="container">
        <h2><?php echo $user ? "Edit Profil Steam" : "Input Profil Steam"; ?></h2>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $user ? $user['id'] : ''; ?>">
            Username: <input type="text" name="username" value="<?php echo $user ? $user['username'] : ''; ?>" required><br><br>
            Email: <input type="email" name="email" value="<?php echo $user ? $user['email'] : ''; ?>" required><br><br>
            Level: <input type="number" name="level" value="<?php echo $user ? $user['level'] : ''; ?>" required><br><br>
            Avatar: <input type="file" name="avatar" accept="image/*"><br>
            <?php if ($user && $user['avatar']): ?>
                <img src="<?php echo $user['avatar']; ?>" width="50" height="50"><br><br>
            <?php endif; ?>
            Game Favorit: <input type="text" name="favorite_game" value="<?php echo $user ? $user['favorite_game'] : ''; ?>"><br><br>
            Bio: <textarea name="bio"><?php echo $user ? $user['bio'] : ''; ?></textarea><br><br>
            <input type="submit" value="Simpan">
        </form>

        <h2>Daftar Profil Steam</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Username</th>
                <th>Email</th>
                <th>Level</th>
                <th>Game Favorit</th>
                <th>Bio</th>
                <th>Action</th>
            </tr>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><img src="<?php echo $row["avatar"]; ?>" width="50" height="50"></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["level"]; ?></td>
                        <td><?php echo $row["favorite_game"]; ?></td>
                        <td><?php echo $row["bio"]; ?></td>
                        <td><a href="p.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="8">Tidak ada data</td></tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>

<?php
$koneksi->close();
?>
