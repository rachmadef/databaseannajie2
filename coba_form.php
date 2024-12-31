<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="css/style.css">
</head>
<style>

</style>
<body>
    <?php include 'header.php'; ?>
    <div class="idx-container-form">
        <img src="img/Logo.png" alt="">
        <h2>Formulir Pendaftaran Santri Baru</h2>
        <p>Pondok Pesantren An - Najiyah 2 Bahrul Ulum<br>Tahun Ajaran 2026/2027</p>
        <form action="submit_registration.php" method="POST" class="form-container" novalidate>
            <div class="form-main-container">
                <h3>Data Santri</h3>
                <div class="data-santri">
                    <div class="form-data-santri">
                        <label for="nik_santri" class="form-label">NIK Santri</label>
                        <input type="text" class="form-control" id="nik_santri" name="nik_santri" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="nama_santri" class="form-label">Nama Santri</label>
                        <input type="text" class="form-control" id="nama_santri" name="nama_santri" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="nik_santri" class="form-label">Anak Ke-</label>
                        <input type="number" class="form-control" id="anak_ke" name="anak_ke" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="jumlah_saudara" class="form-label">Jumlah Saudara</label>
                        <input type="number" class="form-control" id="jumlah_saudara" name="jumlah_saudara" required>
                    </div>
                </div>
            </div>
            <div class="form-main-container">
                <h3>Data Sekolah</h3>
                <div class="data-santri">
                    <div class="form-data-santri">
                        <label for="nomor_tes" class="form-label">Nomor Tes</label>
                        <input type="text" class="form-control" id="nomor_tes" name="nomor_tes" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="sekolah tujuan" class="form-label">Sekolah tujuan</label>
                        <select class="form-control" id="sekolah_tujuan" name="sekolah_tujuan">
                            <option value="" disabled selected>-- Pilih Sekolah Tujuan --</option>
                            <option value="MTsN 3 Jombang">MTsN 3 Jombang</option>
                            <option value="MTs Bahrul Ulum">MTs Bahrul Ulum</option>
                            <option value="MTs Fattah Hasyim Bahrul Ulum">MTs Fattah Hasyim Bahrul Ulum</option>
                            <option value="SMP Bahrul Ulum">SMP Bahrul Ulum</option>
                            <option value="MMA Bahrul Ulum">MMA Bahrul Ulum</option>
                            <option value="MAN 3 Jombang">MAN 3 Jombang</option>
                            <option value="MA Unggulan KH. Abd. Wahab Hasbulloh">MA Unggulan KH. Abd. Wahab Hasbullah</option>
                            <option value="MA Bahrul Ulum">MA Bahrul Ulum</option>
                            <option value="MA Fattah Hasyim Bahrul Ulum">MA Fattah Hasyim Bahrul Ulum</option>
                            <option value="MA Al - I'dadiyah Bahrul Ulum">MA Al-I'dadiyah Bahrul Ulum</option>
                            <option value="SMK Kreatif Hasbulloh Bahrul Ulum">SMK Kreatif Bahrul Ulum</option>
                            <option value="SMK TI ANNAJIYAH Bahrul Ulum">SMK TI Annajiyah Bahrul Ulum</option>
                            <option value="IAIBAFA Bahrul Ulum">IAIBAFA Bahrul Ulum</option>
                            <option value="STIKES Bahrul Ulum">STIKES Bahrul Ulum</option>
                            <option value="UNWAHA Bahrul Ulum">UNWAHA Bahrul Ulum</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-main-container">
                <h3>Data Orang Tua</h3>
                <div class="data-santri">
                    <div class="form-data-santri">
                        <label for="nama_ayah" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                        <select class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
                            <option value="" disabled selected>-- Pilih Pekerjaan --</option>
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
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                        <select class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
                            <option value="" disabled selected>-- Pilih Pekerjaan --</option>
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
                        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
                    </div>
                </div>
            </div>
            <div class="form-main-container">
                <h3>Alamat</h3>
                <div class="data-santri">
                    <div class="form-data-santri">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Contoh : Jawa Timur" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="kabupaten" class="form-label">Kabupaten</label>
                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Contoh : Jombang" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Contoh : Jombang" required>
                    </div>
                    <div class="form-data-santri">
                        <label for="desa" class="form-label">Desa</label>
                        <input type="text" class="form-control" id="desa" name="desa" placeholder="Contoh : Tambakrejo" required>
                    </div>
                </div>
                    <div class="form-data-santri">
                        <label for="lainnya" class="form-label">Lainnya</label>
                        <input type="text" class="form-control" style="margin: 0 auto; width: 100%; text-align: center;" id="lainnya" name="lainnya" placeholder="Contoh : Jl. KH. Abd. Wahab Hasbulloh Gg. 3" required>
                    </div>
            </div>
            <button type="submit" class="btn-submit" name="submit">Daftar</button>
        </form>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Pendaftaran Berhasil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Terima kasih telah mendaftar. Data Anda telah berhasil dikirim.
                </div>
                <div class="modal-footer">
                    <a href="hasil.php" class="btn btn-secondary">Kembali ke Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Validasi Form -->
    <script>
        (function () {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>
</html>