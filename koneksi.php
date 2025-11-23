<?php
$host = "localhost";
$user = "root";
$pass = "";        // jika XAMPP kamu tidak pakai password
$db   = "skillhub";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
