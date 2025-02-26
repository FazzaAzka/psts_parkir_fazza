<?php
include '../../config/koneksi.php';

$id_parkir = $_POST['no_tempat_parkir'];
$lokasi = $_POST['kapasitas'];
$kendaraan = $_POST['luas'];
$harga = $_POST['tarif_parkir'];

$sql = "INSERT INTO parkir (ino_tempat_parkir, kapasitas, luas, yarif_parkir) VALUES ('$no_tempat_parkir', '$kapasitas', '$kendaraan',
'$luas', '$tarif_parkir')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan1";
    heaser("Location index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>