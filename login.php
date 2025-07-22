<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION["username"] = $user["username"];
        header("Location: welcome.php");
    } else {
        echo "Login gagal. Username atau password salah.";
    }
}
?>

<h2>Form Login</h2>
<form method="POST">
  Username: <input type="text" name="username" required><br><br>
  Password: <input type="password" name="password" required><br><br>
  <button type="submit">Login</button>
</form>
<p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
