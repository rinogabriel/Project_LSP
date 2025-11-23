<?php 
include '../navbar.php';
include '../koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM kelas");
?>

<div class="container mt-4">

    <div class="card shadow-sm border-0">
        <div class="card-header bg-Dark text-white">
            <h5 class="mb-0">Manajemen Kelas</h5>
        </div>

        <div class="card-body">

            <a href="tambah.php" class="btn btn-Dark mb-3">
                <i class="bi bi-plus-circle"></i> Tambah Kelas
            </a>

            <div class="table-responsive">
                <table class="table table-striped shadow-sm" style="border: 1px solid #dee2e6;">
                    <thead class="table-dark">
                        <tr>
                            <th style="border:1px solid #dee2e6;">Nama Kelas</th>
                            <th style="border:1px solid #dee2e6;">Instruktur</th>
                            <th style="border:1px solid #dee2e6;">Deskripsi</th>
                            <th style="border:1px solid #dee2e6;">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($d = mysqli_fetch_assoc($data)) { ?>
                        <tr>
                            <td style="border:1px solid #dee2e6;"><?= $d['nama_kelas'] ?></td>
                            <td style="border:1px solid #dee2e6;"><?= $d['instruktur'] ?></td>
                            <td style="border:1px solid #dee2e6;"><?= $d['deskripsi'] ?></td>

                            <td style="border:1px solid #dee2e6;">
                                <a href="edit.php?id=<?= $d['id'] ?>" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>

                                <a href="hapus.php?id=<?= $d['id'] ?>" 
                                   onclick="return confirm('Hapus kelas?')" 
                                   class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Hapus
                                </a>

                                <a href="detail.php?id=<?= $d['id'] ?>" class="btn btn-info btn-sm text-white">
                                    <i class="bi bi-eye"></i> Detail
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>
