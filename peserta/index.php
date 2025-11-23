<?php 
include '../koneksi.php'; 
include '../navbar.php'; 

$data = mysqli_query($koneksi, "SELECT * FROM peserta");
?>

<div class="container mt-4">

    <div class="card shadow-sm border-0">
        <div class="card-header bg-Dark text-white">
            <h5 class="mb-0">Manajemen Peserta</h5>
        </div>

        <div class="card-body">

            <a href="tambah.php" class="btn btn-Dark mb-3">
                <i class="bi bi-plus-circle"></i> Tambah Peserta
            </a>

            <div class="table-responsive">
                <table class="table table-striped table-bordered shadow-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                        $no = 1;
                        while ($d = mysqli_fetch_assoc($data)) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d['nama'] ?></td>
                            <td><?= $d['email'] ?></td>
                            <td><?= $d['telepon'] ?></td>
                            <td>
                                <a href="edit.php?id=<?= $d['id'] ?>" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <a href="hapus.php?id=<?= $d['id'] ?>" 
                                   onclick="return confirm('Hapus data ini?')" 
                                   class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </a>

                                <a href="detail.php?id=<?= $d['id'] ?>" class="btn btn-info btn-sm text-white">
                                    <i class="bi bi-eye"></i>
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
