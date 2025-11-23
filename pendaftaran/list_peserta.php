<?php include '../navbar.php'; ?>
<?php
include '../koneksi.php';

$peserta_id = $_GET['id'];

$peserta = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM peserta WHERE id='$peserta_id'"));

$data = mysqli_query($koneksi, "
    SELECT kelas.nama_kelas 
    FROM pendaftaran 
    JOIN kelas ON kelas.id = pendaftaran.kelas_id
    WHERE peserta_id='$peserta_id'
");
?>

<h2>Kelas yang Diikuti: <?= $peserta['nama'] ?></h2>

<ul>
    <?php while ($k = mysqli_fetch_assoc($data)) { ?>
        <li><?= $k['nama_kelas'] ?></li>
    <?php } ?>
</ul>

<a href="index.php">Kembali</a>
