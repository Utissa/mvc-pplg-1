<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'model_pasien.php';
    tambahPasien($_POST['nmPasien'], $_POST['jk'], $_POST['alamat']);
    header('Location: controller_pasien.php');
}

?>

<html>
<head>
    <title>Tambah Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h3>Tambah Pasien</h3>
    <form action="tambahpasien.php" method="POST">
        <label>Nama Pasien</label><br>
        <input type="text" name="nmPasien" required><br>
        <label>Jenis Kelamin</label><br>
        <select name="jk">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select><br>
        <label>Alamat</label><br>
        <input type="text" name="alamat" required><br><br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
