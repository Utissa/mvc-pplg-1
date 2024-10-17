<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'model_kunjungan.php';
    tambahKunjungan($_POST['idPasien'], $_POST['idDokter'], $_POST['tanggal']);
    header('Location: controller_kunjungan.php');
}

?>

<html>
<head>
    <title>Tambah Kunjungan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h3>Tambah Kunjungan</h3>
    <form action="tambahkunjungan.php" method="POST">
        <label>ID Pasien</label><br>
        <input type="text" name="idPasien" required><br>
        <label>ID Dokter</label><br>
        <input type="text" name="idDokter" required><br>
        <label>Tanggal</label><br>
        <input type="date" name="tanggal" required><br><br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
