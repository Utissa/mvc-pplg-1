<?php
include 'model_pasien.php'; // Or the file where your koneksi() function is defined

function getTabelKunjungan()
{
    $link = koneksi(); // Call the koneksi() function for DB connection
    $query = "SELECT * FROM kunjungan"; // Your query to fetch kunjungan data
    $result = mysqli_query($link, $query);

    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}

function tambahKunjungan($idPasien, $idDokter, $tanggal) {
    $link = koneksi();
    $query = "INSERT INTO kunjungan (idPasien, idDokter, tanggal) VALUES ('$idPasien', '$idDokter', '$tanggal')";
    mysqli_query($link, $query);
}

function hapusKunjungan($idKunjungan) {
    $link = koneksi();
    $query = "DELETE FROM kunjungan WHERE idKunjungan = '$idKunjungan'";
    mysqli_query($link, $query);
}
?>
