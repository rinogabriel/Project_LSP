<?php include '../navbar.php'; ?>
<?php
include '../koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<h2>Edit Peserta</h2>

<form method="post">
    Nama: <br>
    <input type="text" name="nama" value="<?= $d['nama'] ?>" required><br><br>

    Email: <br>
    <input type="email" name="email" value="<?= $d['email'] ?>" required><br><br>

    Telepon: <br>
    <input type="text" name="telepon" value="<?= $d['telepon'] ?>"><br><br>

    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telepon'];

    mysqli_query($koneksi, "UPDATE peserta SET nama='$nama', email='$email', telepon='$telp' WHERE id='$id'");

    header("Location: index.php");
    exit;
}
?>
