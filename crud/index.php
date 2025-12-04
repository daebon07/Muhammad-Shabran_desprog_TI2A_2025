<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Data Anggota</h2>
        <a href="create.php" class="btn btn-success mt-2 mb-3">Tambah Data</a>
        
        <?php
        include "koneksi.php";
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $result = mysqli_query($koneksi, $query);
        ?>

        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan';
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $kelamin; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['no_telp']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal<?php echo $row['id']; ?>">
                            Hapus
                        </button>
                    </td>
                </tr>

                <div class="modal fade" id="hapusModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus data dengan nama "<?php echo $row['nama']; ?>"?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <a href="proses.php?aksi=hapus&id=<?php echo $row['id']; ?>" class="btn btn-danger">Ya, Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>
</html>