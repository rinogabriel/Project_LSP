<?php include '../navbar.php'; ?>
<?php
include '../koneksi.php';

// ambil semua peserta
$peserta = mysqli_query($koneksi, "SELECT * FROM peserta");
// ambil semua kelas
$kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
?>

<h2>Daftar Peserta ke Kelas</h2>

<form method="post">
    Peserta: <br>
    <select name="peserta_id" required>
        <option value="">-- Pilih Peserta --</option>
        <?php while ($p = mysqli_fetch_assoc($peserta)) { ?>
            <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
        <?php } ?>
    </select>
    <br><br>

    Kelas: <br>
    <select name="kelas_id" required>
        <option value="">-- Pilih Kelas --</option>
        <?php while ($k = mysqli_fetch_assoc($kelas)) { ?>
            <option value="<?= $k['id'] ?>"><?= $k['nama_kelas'] ?></option>
        <?php } ?>
    </select>
    <br><br>

    <button type="submit" name="daftar">Daftarkan</button>
</form>

<?php
if (isset($_POST['daftar'])) {
    $peserta_id = $_POST['peserta_id'];
    $kelas_id   = $_POST['kelas_id'];

    mysqli_query($koneksi, "
        INSERT INTO pendaftaran VALUES ('', '$peserta_id', '$kelas_id')
    ") or die(mysqli_error($koneksi));

    echo "<br><b>Pendaftaran berhasil!</b>";
}
?>
