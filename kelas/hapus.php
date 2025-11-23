<?php include '../navbar.php'; ?>
<?php
include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM kelas WHERE id='$id'");

header("Location: index.php");
exit;
?>
