<?php
// Koneksi ke database
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "form_pendaftaran";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password']; // Password yang dimasukkan oleh pengguna

// Enkripsi password menggunakan password_hash()
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Query untuk menyimpan username dan password terenkripsi
$sql = "INSERT INTO user (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $hashed_password);
$stmt->execute();

// Sukses
echo "Akun berhasil dibuat!";
$conn->close();
?>
