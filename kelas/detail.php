<?php include '../navbar.php'; ?>
<?php
include '../koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<h2>Detail Kelas</h2>

<p><b>Nama Kelas:</b> <?= $d['nama_kelas'] ?></p>
<p><b>Instruktur:</b> <?= $d['instruktur'] ?></p>
<p><b>Deskripsi:</b> <?= $d['deskripsi'] ?></p>

<a href="index.php">Kembali</a>
