<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'model_dokter.php';
    tambahDokter($_POST['nmDokter'], $_POST['spesialis'], $_POST['telepon']);
    header('Location: controller_dokter.php');
}

?>

<html>
<head>
    <title>Tambah Dokter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h3>Tambah Dokter</h3>
    <form action="tambahdokter.php" method="POST">
        <label>Nama Dokter</label><br>
        <input type="text" name="nmDokter" required><br>
        <label>Spesialis</label><br>
        <input type="text" name="spesialis"><br>
        <label>Telepon</label><br>
        <input type="text" name="telepon"><br><br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
