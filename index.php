<?php
include 'koneksi.php';

// hitung jumlah peserta
$jml_peserta = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM peserta"))['total'];

// hitung jumlah kelas
$jml_kelas = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM kelas"))['total'];

// hitung jumlah pendaftaran
$jml_daftar = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM pendaftaran"))['total'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard SkillHub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            margin: 0;
            padding: 0;
        }

        .header {
            background: #212324ff;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 28px;
        }

        .container {
            width: 80%;
            margin: 40px auto;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .card {
            width: 260px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
            text-align: center;
            padding: 20px;
            transition: 0.3s;
            margin-bottom: 20px;
        }

        .stat {
            font-size: 32px;
            font-weight: bold;
            color: #2d98da;
            margin: 10px 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            background: #242628ff;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            transition: 0.3s;
            font-size: 16px;
        }

        .btn:hover {
            background: #227bb0;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            color: #888;
        }
    </style>
</head>
<body>

<div class="header">
    Dashboard SkillHub
</div>

<div class="container">

    <!-- Card Peserta -->
    <div class="card">
        <h3>Manajemen Peserta</h3>
        <div class="stat"><?= $jml_peserta ?></div>
        <small>Jumlah Peserta</small><br><br>
        <a href="peserta/" class="btn">Buka</a>
    </div>

    <!-- Card Kelas -->
    <div class="card">
        <h3>Manajemen Kelas</h3>
        <div class="stat"><?= $jml_kelas ?></div>
        <small>Jumlah Kelas</small><br><br>
        <a href="kelas/" class="btn">Buka</a>
    </div>

    <!-- Card Pendaftaran -->
    <div class="card">
        <h3>Pendaftaran Kelas</h3>
        <div class="stat"><?= $jml_daftar ?></div>
        <small>Total Pendaftaran</small><br><br>
        <a href="pendaftaran/" class="btn">Buka</a>
    </div>

</div>

<div class="footer">
    © <?= date('Y') ?> SkillHub Management System
</div>

</body>
</html>
