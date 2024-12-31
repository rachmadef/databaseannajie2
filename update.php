<?php
require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nik_santri = $_POST['nik_santri'];
    $nama_santri = $_POST['nama_santri'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
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

    $sql = "UPDATE registrations SET 
                nik_santri = ?, 
                nama_santri = ?, 
                tempat_lahir = ?, 
                tanggal_lahir = ?, 
                anak_ke = ?, 
                jumlah_saudara = ?, 
                nomor_tes = ?, 
                sekolah_tujuan = ?, 
                nama_ayah = ?, 
                pekerjaan_ayah = ?, 
                nama_ibu = ?, 
                pekerjaan_ibu = ?, 
                nomor_telepon = ?, 
                provinsi = ?, 
                kabupaten = ?, 
                kecamatan = ?, 
                desa = ?, 
                lainnya = ?
            WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssiiisssssssssssi", 
        $nik_santri, 
        $nama_santri, 
        $tempat_lahir, 
        $tanggal_lahir, 
        $anak_ke, 
        $jumlah_saudara, 
        $nomor_tes, 
        $sekolah_tujuan, 
        $nama_ayah, 
        $pekerjaan_ayah, 
        $nama_ibu, 
        $pekerjaan_ibu, 
        $nomor_telepon, 
        $provinsi, 
        $kabupaten, 
        $kecamatan, 
        $desa, 
        $lainnya, 
        $id
    );

    if ($stmt->execute()) {
        header("Location: admin_dashboard.php?updated=1");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: admin_dashboard.php");
    exit();
}
