<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_pendaftaran";

// Koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Data admin pertama kali
$adminUsername = "admin2004";
$adminPassword = "NderekAbahYai2004*";

// Hash password
$hashedPassword = password_hash($adminPassword, PASSWORD_DEFAULT);

// Simpan data admin ke database
$sql = "INSERT INTO user (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $adminUsername, $hashedPassword);

if ($stmt->execute()) {
    echo "Admin pertama berhasil dibuat!";
} else {
    echo "Gagal membuat admin: " . $stmt->error;
}

$conn->close();
?>
