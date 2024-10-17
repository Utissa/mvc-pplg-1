<?php
if (isset($_GET['id'])) {
    include 'model_pasien.php';
    hapusPasien($_GET['id']);
    header('Location: controller_pasien.php');
}

?>
