<?php
require_once 'db_connection.php';

if (!isset($_GET['id'])) {
    die('ID tidak ditemukan.');
}

$id = $_GET['id'];
$sql = "SELECT * FROM registrations WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die('Data tidak ditemukan.');
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="idx-container">
        <h1>Edit Data</h1>
        <form method="POST" action="update.php" class="form-container">
            <div class="form-main-container">
                <h3>Data Santri</h3>
                <div class="data-santri">
                    <div class="form-data-santri">
                        <label for="nik_santri" class="form-label">NIK Santri</label>
                        <input type="text" class="form-control" id="nik_santri" name="nik_santri" value="<?php echo htmlspecialchars($data['nik_santri']); ?>" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="nama_santri" class="form-label">Nama Santri</label>
                        <input type="text" class="form-control" id="nama_santri" name="nama_santri" value="<?php echo htmlspecialchars($data['nama_santri']); ?>" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo htmlspecialchars($data['tempat_lahir']); ?>" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo htmlspecialchars($data['tanggal_lahir']); ?>" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="nik_santri" class="form-label">Anak Ke-</label>
                        <input type="number" class="form-control" id="anak_ke" name="anak_ke" value="<?php echo htmlspecialchars($data['anak_ke']); ?>" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="jumlah_saudara" class="form-label">Jumlah Saudara</label>
                        <input type="number" class="form-control" id="jumlah_saudara" name="jumlah_saudara" value="<?php echo htmlspecialchars($data['jumlah_saudara']); ?>" required>
                    </div>
                </div>
            </div>
            <div class="form-main-container">
                <h3>Data Sekolah</h3>
                <div class="data-santri">
                    <div class="form-data-santri">
                        <label for="nomor_tes" class="form-label">Nomor Tes</label>
                        <input type="text" class="form-control" id="nomor_tes" name="nomor_tes" value="<?php echo htmlspecialchars($data['nomor_tes']); ?>" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="sekolah tujuan" class="form-label">Sekolah tujuan</label>
                        <select class="form-control" id="sekolah_tujuan" name="sekolah_tujuan">
                            <option value="<?php echo htmlspecialchars($data['sekolah_tujuan']); ?>" selected><?php echo htmlspecialchars($data['sekolah_tujuan']); ?></option>
                            <option value="mtsn3jombang">MTsN 3 Jombang</option>
                            <option value="mtsbahrulum">MTs Bahrul Ulum</option>
                            <option value="mtsfhbahrululum">MTs Fattah Hasyim Bahrul Ulum</option>
                            <option value="smpbahrululum">SMP Bahrul Ulum</option>
                            <option value="man3jombang">MAN 3 Jombang</option>
                            <option value="mauwh">MA Unggulan KH. Abd. Wahab Hasbullah</option>
                            <option value="mabahrululum">MA Bahrul Ulum</option>
                            <option value="mafhbahrululum">MA Fattah Hasyim Bahrul Ulum</option>
                            <option value="mai">MA Al-I'dadiyah Bahrul Ulum</option>
                            <option value="smkkreatif">SMK Kreatif Bahrul Ulum</option>
                            <option value="smkti">SMK TI Annajiyah Bahrul Ulum</option>
                            <option value="iaibafa">IAIBAFA Bahrul Ulum</option>
                            <option value="stikes">STIKES Bahrul Ulum</option>
                            <option value="unwaha">UNWAHA Bahrul Ulum</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-main-container">
                <h3>Data Orang Tua</h3>
                <div class="data-santri">
                    <div class="form-data-santri">
                        <label for="nama_ayah" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?php echo htmlspecialchars($data['nama_ayah']); ?>" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                        <select class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
                            <option value="<?php echo htmlspecialchars($data['pekerjaan_ayah']); ?>" selected><?php echo htmlspecialchars($data['pekerjaan_ayah']); ?></option>
                            <option value="pns">Pegawai Negeri Sipil (PNS)</option>
                            <option value="asn">Aparatur Sipil Negara (ASN)</option>
                            <option value="tni-polri">TNI/Polri</option>
                            <option value="petani">Petani</option>
                            <option value="nelayan">Nelayan</option>
                            <option value="buruh">Buruh</option>
                            <option value="pedagang">Pedagang</option>
                            <option value="wirausaha">Wirausaha</option>
                            <option value="guru">Guru</option>
                            <option value="dosen">Dosen</option>
                            <option value="dokter">Dokter</option>
                            <option value="perawat">Perawat</option>
                            <option value="pengacara">Pengacara</option>
                            <option value="seniman">Seniman</option>
                            <option value="freelancer">Freelancer</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-data-santri">
                        <label for="nama_ibu" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?php echo htmlspecialchars($data['nama_ibu']); ?>" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                        <select class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
                            <option value="<?php echo htmlspecialchars($data['pekerjaan_ibu']); ?>" selected><?php echo htmlspecialchars($data['pekerjaan_ibu']); ?></option>
                            <option value="pns">Pegawai Negeri Sipil (PNS)</option>
                            <option value="asn">Aparatur Sipil Negara (ASN)</option>
                            <option value="tni-polri">TNI/Polri</option>
                            <option value="petani">Petani</option>
                            <option value="nelayan">Nelayan</option>
                            <option value="buruh">Buruh</option>
                            <option value="pedagang">Pedagang</option>
                            <option value="wirausaha">Wirausaha</option>
                            <option value="guru">Guru</option>
                            <option value="dosen">Dosen</option>
                            <option value="dokter">Dokter</option>
                            <option value="perawat">Perawat</option>
                            <option value="pengacara">Pengacara</option>
                            <option value="seniman">Seniman</option>
                            <option value="freelancer">Freelancer</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-data-santri">
                        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?php echo htmlspecialchars($data['nomor_telepon']); ?>" required>
                    </div>
                </div>
            </div>
            <div class="form-main-container">
                <h3>Alamat</h3>
                <div class="data-santri">
                    <div class="form-data-santri">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Contoh : Jawa Timur" value="<?php echo htmlspecialchars($data['provinsi']); ?>" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="kabupaten" class="form-label">Kabupaten</label>
                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Contoh : Jombang" value="<?php echo htmlspecialchars($data['kabupaten']); ?>" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Contoh : Jombang" value="<?php echo htmlspecialchars($data['kecamatan']); ?>" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="desa" class="form-label">Desa</label>
                        <input type="text" class="form-control" id="desa" name="desa" placeholder="Contoh : Tambakrejo" value="<?php echo htmlspecialchars($data['desa']); ?>" required>
                    </div>
                </div>
                    <div class="form-data-santri">
                        <label for="lainnya" class="form-label">Lainnya</label>
                        <input type="text" class="form-control" style="margin: 0 auto; width: 100%; text-align: center;" id="lainnya" name="lainnya" placeholder="Contoh : Jl. KH. Abd. Wahab Hasbulloh Gg. 3" value="<?php echo htmlspecialchars($data['lainny']); ?>" required>
                    </div>
            </div>
            <button type="submit">Simpan Perubahan</button>       
          </form>
    </div>     
</body>
</html>

<?php $conn->close(); ?>
