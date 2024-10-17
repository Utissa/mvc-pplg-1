<?php

include 'model_pasien.php'; // or the file where koneksi() is defined
function getTabelDokter()
{
    $link = koneksi(); // Call to the koneksi() function to get the DB connection
    $query = "SELECT * FROM dokter"; // Adjust this query based on your dokter table
    $result = mysqli_query($link, $query);

    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}
function tambahDokter($nmDokter, $spesialis, $telepon) {
    $link = koneksi();
    $query = "INSERT INTO dokter (nmDokter, spesialis, telepon) VALUES ('$nmDokter', '$spesialis', '$telepon')";
    mysqli_query($link, $query);
}

function hapusDokter($idDokter) {
    $link = koneksi();
    $query = "DELETE FROM dokter WHERE idDokter = '$idDokter'";
    mysqli_query($link, $query);
}
?>



