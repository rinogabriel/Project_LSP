<?php include '../navbar.php'; ?>
<?php
include '../koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<h2>Edit Kelas</h2>

<form method="post">
    Nama Kelas: <br>
    <input type="text" name="nama_kelas" value="<?= $d['nama_kelas'] ?>" required><br><br>

    Instruktur: <br>
    <input type="text" name="instruktur" value="<?= $d['instruktur'] ?>" required><br><br>

    Deskripsi: <br>
    <textarea name="deskripsi"><?= $d['deskripsi'] ?></textarea><br><br>

    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $nama = $_POST['nama_kelas'];
    $instruktur = $_POST['instruktur'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($koneksi, "
        UPDATE kelas SET 
        nama_kelas='$nama',
        instruktur='$instruktur',
        deskripsi='$deskripsi'
        WHERE id='$id'
    ");

    header("Location: index.php");
    exit;
}
?>
