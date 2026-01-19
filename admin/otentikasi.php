<?php
include '../koneksi.php';
session_start();

// Ambil nilai dari form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Enkripsi password menggunakan MD5
$encrypted_password = md5($password);

// Prepared statement untuk melakukan query ke database
$stmt = mysqli_prepare($koneksi, "SELECT username_admin FROM tb_admin WHERE username_admin=? AND password_admin=?");

// Bind parameter ke prepared statement
mysqli_stmt_bind_param($stmt, "ss", $username, $encrypted_password);

// Eksekusi statement
mysqli_stmt_execute($stmt);

// Ambil hasil query
mysqli_stmt_store_result($stmt);

// Periksa jumlah baris yang dikembalikan
if (mysqli_stmt_num_rows($stmt) == 1) {
    // Jika login berhasil
    mysqli_stmt_bind_result($stmt, $username);
    mysqli_stmt_fetch($stmt);

    $_SESSION['id_admin'] = $username;

    echo '<script>alert("Login Sukses!"); document.location="index.php";</script>';
} else {
    // Jika login gagal
    echo '<script>alert("Login Gagal!"); document.location="login.php";</script>';
}

// Tutup statement
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>
