<?php
if (isset($_GET['id'])) {
    include 'model_kunjungan.php';
    hapusKunjungan($_GET['id']);
    header('Location: controller_kunjungan.php');
}

?>
