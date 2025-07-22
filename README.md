# Sistem Login dan Registrasi PHP Native

Proyek ini merupakan implementasi sederhana dari sistem login dan registrasi menggunakan **PHP Native** dan **MySQL**, tanpa menggunakan framework seperti Laravel. Proyek ini cocok untuk pemula yang ingin memahami dasar autentikasi di web menggunakan PHP.

## 🔧 Fitur

- Registrasi akun dengan validasi sederhana.
- Login dengan verifikasi username dan password.
- Logout dengan session.
- Proteksi halaman agar hanya bisa diakses oleh pengguna yang sudah login.

## 📁 Struktur Folder

sistem-login/
├── db.php # Koneksi database
├── register.php # Halaman registrasi
├── login.php # Halaman login
├── welcome.php # Halaman setelah login (protected)
└── logout.php # Logout pengguna

## 🛠️ Cara Menjalankan Proyek (Mac & Windows)

### 1. Pastikan sudah menginstall XAMPP
- **Windows**: https://www.apachefriends.org/index.html
- **Mac**: Gunakan `/Applications/XAMPP/`

### 2. Simpan folder proyek
- **Windows**: `C:\xampp\htdocs\sistem-login`
- **Mac**: `/Applications/XAMPP/htdocs/sistem-login`

### 3. Buat database dan tabel
1. Buka **phpMyAdmin** melalui browser:  
   `http://localhost/phpmyadmin`
2. Buat database baru bernama `login_db`
3. Jalankan query SQL berikut:

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

4. Jalankan proyek
Buka browser dan akses:
👉 http://localhost/sistem-login/login.php

🔒 Catatan Keamanan
Password sudah dienkripsi dengan password_hash()

Jangan gunakan proyek ini untuk aplikasi produksi tanpa validasi dan sanitasi tambahan

📌 Teknologi yang Digunakan
PHP Native

MySQL

HTML & CSS dasar

📃 Lisensi
Proyek ini bebas digunakan untuk belajar.

Semoga bermanfaat! 🚀
