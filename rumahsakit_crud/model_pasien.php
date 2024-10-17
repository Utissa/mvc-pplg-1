<?php
function koneksi()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "rumahsakit";

    return mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}

function getTabelPasien()
{
    $link = koneksi();
    $query = "SELECT * FROM pasien";
    $result = mysqli_query($link, $query);

    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}
function tambahPasien($nmPasien, $jk, $alamat) {
    $link = koneksi();
    $query = "INSERT INTO pasien (nmPasien, jk, alamat) VALUES ('$nmPasien', '$jk', '$alamat')";
    mysqli_query($link, $query);
}
function hapusPasien($idPasien) {
    $link = koneksi();
    $query = "DELETE FROM pasien WHERE idPasien = '$idPasien'";
    mysqli_query($link, $query);
}


?>