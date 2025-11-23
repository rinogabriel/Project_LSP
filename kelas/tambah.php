<?php include '../navbar.php'; ?>
<?php
include '../koneksi.php';
?>

<h2>Tambah Kelas</h2>

<form method="post">
    Nama Kelas: <br>
    <input type="text" name="nama_kelas" required><br><br>

    Instruktur: <br>
    <input type="text" name="instruktur" required><br><br>

    Deskripsi: <br>
    <textarea name="deskripsi"></textarea><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_kelas'];
    $instruktur = $_POST['instruktur'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($koneksi, "INSERT INTO kelas VALUES ('', '$nama', '$deskripsi', '$instruktur')")
        or die(mysqli_error($koneksi));

    header("Location: index.php");
    exit;
}
?>
