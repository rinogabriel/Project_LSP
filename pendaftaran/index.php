<?php 
include '../navbar.php';
include '../koneksi.php';

$data = mysqli_query($koneksi, "
    SELECT pendaftaran.id, peserta.nama AS peserta, kelas.nama_kelas AS kelas
    FROM pendaftaran
    JOIN peserta ON peserta.id = pendaftaran.peserta_id
    JOIN kelas ON kelas.id = pendaftaran.kelas_id
");
?>

<div class="container mt-4">

    <div class="card shadow-sm border-0">
        <div class="card-header bg-Dark text-white">
            <h5 class="mb-0">Daftar Pendaftaran</h5>
        </div>

        <div class="card-body">

            <a href="daftar.php" class="btn btn-Dark mb-3">
                <i class="bi bi-plus-circle"></i> Tambah Pendaftaran
            </a>

            <div class="table-responsive">
                <table class="table table-striped shadow-sm" style="border: 1px solid #dee2e6;">
                    <thead class="table-dark">
                        <tr>
                            <th style="border:1px solid #dee2e6;">Peserta</th>
                            <th style="border:1px solid #dee2e6;">Kelas</th>
                            <th style="border:1px solid #dee2e6;">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($d = mysqli_fetch_assoc($data)) { ?>
                        <tr>
                            <td style="border:1px solid #dee2e6;"><?= $d['peserta'] ?></td>
                            <td style="border:1px solid #dee2e6;"><?= $d['kelas'] ?></td>
                            <td style="border:1px solid #dee2e6;">
                                <a href="hapus.php?id=<?= $d['id'] ?>" 
                                   onclick="return confirm('Batalkan pendaftaran?')"
                                   class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Hapus
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
