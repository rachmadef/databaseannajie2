<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_pendaftaran";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
