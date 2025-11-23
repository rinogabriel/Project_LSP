<?php include '../navbar.php'; ?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../koneksi.php';
?>

<h2>Tambah Peserta</h2>

<form method="post">
    Nama: <br>
    <input type="text" name="nama" required><br><br>

    Email: <br>
    <input type="email" name="email" required><br><br>

    Telepon: <br>
    <input type="text" name="telepon"><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telepon'];

    mysqli_query($koneksi, "INSERT INTO peserta VALUES('', '$nama', '$email', '$telp')")
        or die(mysqli_error($koneksi));

    header("Location: index.php");
    exit;
}
?>
