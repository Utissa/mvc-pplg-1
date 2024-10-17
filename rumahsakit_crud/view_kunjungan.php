<html>
<head>
    <title>My App | Kunjungan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h3>Tabel Kunjungan</h3>
    <a href="tambahkunjungan.php" class="btn btn-primary">Tambah Kunjungan</a>
    <table class="table table-striped">
        <tr>
            <th>ID Kunjungan</th>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Tanggal</th>
            <th>Action</th>
        </tr>
        <?php foreach ($isiTabelKunjungan as $kunjungan): ?>
        <tr>
            <td><?= $kunjungan['idKunjungan'] ?></td>
            <td><?= $kunjungan['nmPasien'] ?></td>
            <td><?= $kunjungan['nmDokter'] ?></td>
            <td><?= $kunjungan['tanggal'] ?></td>
            <td>
    <a href="editkunjungan.php?id=<?= $kunjungan['idKunjungan']; ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="hapuskunjungan.php?id=<?= $kunjungan['idKunjungan']; ?>" class="btn btn-danger btn-sm">Hapus</a>
</td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
