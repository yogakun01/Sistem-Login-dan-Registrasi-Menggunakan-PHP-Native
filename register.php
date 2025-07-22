<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($koneksi, $query)) {
        echo "Registrasi berhasil! <a href='login.php'>Login di sini</a>";
    } else {
        echo "Gagal registrasi: " . mysqli_error($koneksi);
    }
}
?>

<h2>Form Registrasi</h2>
<form method="POST">
  Username: <input type="text" name="username" required><br><br>
  Password: <input type="password" name="password" required><br><br>
  <button type="submit">Daftar</button>
</form>
