<?php
// Hubungkan ke database
require_once 'db_connection.php';

// Set header untuk file Excel
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_santri.xls");
header("Pragma: no-cache");
header("Expires: 0");

// Query untuk mendapatkan data dari tabel
$sql = "SELECT * FROM registrations";
$result = $conn->query($sql);

// Buat header tabel di Excel
echo "ID\tNIK Santri\tNama Santri\tTempat Lahir\tTanggal Lahir\tAnak Ke\tJumlah Saudara\tNomor Tes\tSekolah Tujuan\tNama Ayah\tPekerjaan Ayah\tNama Ibu\tPekerjaan Ibu\tNomor Telepon\n";

// Tulis data ke dalam file Excel
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['id'] . "\t" .
            $row['nik_santri'] . "\t" .
            $row['nama_santri'] . "\t" .
            $row['tempat_lahir'] . "\t" .
            $row['tanggal_lahir'] . "\t" .
            $row['anak_ke'] . "\t" .
            $row['jumlah_saudara'] . "\t" .
            $row['nomor_tes'] . "\t" .
            $row['sekolah_tujuan'] . "\t" .
            $row['nama_ayah'] . "\t" .
            $row['pekerjaan_ayah'] . "\t" .
            $row['nama_ibu'] . "\t" .
            $row['pekerjaan_ibu'] . "\t" .
            $row['nomor_telepon'] . "\n";
    }
} else {
    echo "Tidak ada data.\n";
}

// Tutup koneksi
$conn->close();
?>
