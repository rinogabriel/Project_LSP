<?php include '../navbar.php'; ?>
<?php
include '../koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<h2>Detail Peserta</h2>

<p><b>Nama:</b> <?= $d['nama'] ?></p>
<p><b>Email:</b> <?= $d['email'] ?></p>
<p><b>Telepon:</b> <?= $d['telepon'] ?></p>

<a href="index.php">Kembali ke daftar</a>
