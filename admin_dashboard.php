<?php
require_once 'db_connection.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';
$successMessage = isset($_GET['deleted']) ? 'Data berhasil dihapus!' : '';

// Query untuk menampilkan data
$sql = "SELECT * FROM registrations WHERE nama_santri LIKE ?";
$stmt = $conn->prepare($sql);
$search_param = "%" . $search . "%";
$stmt->bind_param("s", $search_param);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        // Script untuk modal persetujuan
        function confirmDelete(id) {
            const modal = document.getElementById('deleteModal');
            modal.style.display = 'flex';
            document.getElementById('deleteId').value = id;
        }

        function closeModal() {
            document.getElementById('deleteModal').style.display = 'none';
        }
    </script>
    <style>
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <header>
            <h1>Dashboard Admin</h1>
            <a href="logout.php" class="logout-btn">Logout</a>
        </header>

        <!-- Success Message -->
        <?php if ($successMessage): ?>
            <div class="success-message"> 
                <?php echo $successMessage; ?>
            </div>
        <?php endif; ?>

        <div class="search-bar">
            <form method="GET">
                <input type="text" name="search" placeholder="Cari nama..." value="<?php echo htmlspecialchars($search); ?>">
                <button type="submit">Cari</button>
            </form>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIK Santri</th>
                        <th>Nama Santri</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Anak Ke</th>
                        <th>Jumlah Saudara</th>
                        <th>Nomor Tes</th>
                        <th>Sekolah Tujuan</th>
                        <th>Nama Ayah</th>
                        <th>Pekerjaan Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Pekerjaan Ibu</th>
                        <th>Nomor Telepon</th>
                        <th>Provinsi</th>
                        <th>Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>Lainnya</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nik_santri']; ?></td>
                                <td><?php echo $row['nama_santri']; ?></td>
                                <td><?php echo $row['tempat_lahir']; ?></td>
                                <td><?php echo $row['tanggal_lahir']; ?></td>
                                <td><?php echo $row['anak_ke']; ?></td>
                                <td><?php echo $row['jumlah_saudara']; ?></td>
                                <td><?php echo $row['nomor_tes']; ?></td>
                                <td><?php echo $row['sekolah_tujuan']; ?></td>
                                <td><?php echo $row['nama_ayah']; ?></td>
                                <td><?php echo $row['pekerjaan_ayah']; ?></td>
                                <td><?php echo $row['nama_ibu']; ?></td>
                                <td><?php echo $row['pekerjaan_ibu']; ?></td>
                                <td><?php echo $row['nomor_telepon']; ?></td>
                                <td><?php echo $row['provinsi']; ?></td>
                                <td><?php echo $row['kabupaten']; ?></td>
                                <td><?php echo $row['kecamatan']; ?></td>
                                <td><?php echo $row['desa']; ?></td>
                                <td><?php echo $row['lainnya']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn edit-btn">Edit</a> |
                                    <button class="btn delete-btn" onclick="confirmDelete(<?php echo $row['id']; ?>)">Hapus</button>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr><td colspan="20">Data tidak ditemukan.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Modal Persetujuan -->
        <div class="modal" id="deleteModal">
            <div class="modal-content">
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
                <form method="POST" action="delete.php">
                    <input type="hidden" name="id" id="deleteId">
                    <div class="modal-buttons">
                        <button type="submit" class="btn confirm-btn">Ya</button>
                        <button type="button" class="btn cancel-btn" onclick="closeModal()">Tidak</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="actions">
            <a href="export_excel.php" class="btn-export">Ekspor ke Excel</a>
            <a href="coba_form.php" class="btn-add">Tambah Data</a>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>

<?php $conn->close(); ?>