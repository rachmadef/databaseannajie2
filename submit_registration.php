<?php
// PHP untuk menyimpan data ke database
$status = ''; // Variabel untuk menyimpan status hasil pengiriman data

if (isset($_POST['submit'])) {
    // Koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "form_pendaftaran";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil data dari form
    $nik_santri = $_POST['nik_santri'];
    $nama_santri = $_POST['nama_santri'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
    $anak_ke = $_POST['anak_ke'];
    $jumlah_saudara = $_POST['jumlah_saudara'];
    $nomor_tes = $_POST['nomor_tes'];
    $sekolah_tujuan = $_POST['sekolah_tujuan'];
    $nama_ayah = $_POST['nama_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $provinsi = $_POST['provinsi'];
    $kabupaten = $_POST['kabupaten'];
    $kecamatan = $_POST['kecamatan'];
    $desa = $_POST['desa'];
    $lainnya = $_POST['lainnya'];


    // Query untuk menyimpan data
    $sql = "INSERT INTO registrations (nik_santri, nama_santri, tempat_lahir, tanggal_lahir, anak_ke, jumlah_saudara, nomor_tes, sekolah_tujuan, nama_ayah, pekerjaan_ayah, nama_ibu, pekerjaan_ibu, nomor_telepon, provinsi, kabupaten, kecamatan, desa, lainnya) 
            VALUES ('$nik_santri', '$nama_santri', '$tempat_lahir', '$tanggal_lahir', '$anak_ke', '$jumlah_saudara', '$nomor_tes', '$sekolah_tujuan', '$nama_ayah', '$pekerjaan_ayah', '$nama_ibu', '$pekerjaan_ibu', '$nomor_telepon', '$provinsi', '$kabupaten', '$kecamatan', '$desa', '$lainnya')";

    // Eksekusi query dan menentukan status hasil
    if ($conn->query($sql) === TRUE) {
        $status = 'success'; // Jika berhasil
    } else {
        $status = 'error'; // Jika gagal
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Modal untuk Pendaftaran Berhasil -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Pendaftaran Berhasil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Terima kasih, pendaftaran Anda berhasil! Data telah berhasil disimpan.
            </div>
            <div class="modal-footer">
                <a href="hasil.php" class="btn btn-secondary">Kembali ke Halaman Utama</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Pendaftaran Gagal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Pendaftaran Gagal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Maaf, pendaftaran Anda gagal. Silakan coba lagi.
            </div>
            <div class="modal-footer">
                <a href="coba_form.php" class="btn btn-danger">Kembali ke Formulir</a>
            </div>
        </div>
    </div>
</div>

<!-- Memasukkan Bootstrap JS untuk Modal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Cek status pendaftaran dan tampilkan modal yang sesuai
<?php if ($status == 'success'): ?>
    var modal = new bootstrap.Modal(document.getElementById('successModal'));
    modal.show();
<?php elseif ($status == 'error'): ?>
    var modal = new bootstrap.Modal(document.getElementById('errorModal'));
    modal.show();
<?php endif; ?>
</script>

</body>
</html>
