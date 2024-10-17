<html>
<head>
    <title>My App | Dokter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h3>Tabel Dokter</h3>
    <a href="tambahdokter.php" class="btn btn-primary">Tambah Dokter</a>
    <table class="table table-striped">
        <tr>
            <th>ID Dokter</th>
            <th>Nama Dokter</th>
            <th>Spesialis</th>
            <th>Telepon</th>
            <th>Action</th>
        </tr>
        <?php foreach ($isiTabelDokter as $dokter): ?>
        <tr>
            <td><?= $dokter['idDokter'] ?></td>
            <td><?= $dokter['nmDokter'] ?></td>
            <td><?= $dokter['spesialis'] ?></td>
            <td><?= $dokter['telepon'] ?></td>
            <td>
    <a href="editdokter.php?id=<?= $dokter['idDokter']; ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="hapusdokter.php?id=<?= $dokter['idDokter']; ?>" class="btn btn-danger btn-sm">Hapus</a>
</td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
