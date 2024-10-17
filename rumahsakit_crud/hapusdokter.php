<?php
if (isset($_GET['id'])) {
    include 'model_dokter.php';
    hapusDokter($_GET['id']);
    header('Location: controller_dokter.php');
}

?>
