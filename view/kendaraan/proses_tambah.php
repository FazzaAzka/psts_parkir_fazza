<?php
include '../../config/koneksi.php';

$no_plat = $_POST['no-plat'];
$merek = $_POST['merek'];
$tahun = $_POST['tahun'];
$no_tempat_parkir = $_POST['no_tempat_parkir'];
$warna = $_POST['warna'];

$sql = "INSERT INTO parkir (id_parkir, merk, warna, jenis, bahan_bakar) VALUES ('$no_plat', '$merek', '$tahun',
'$no_tempat_parkir', '$warna')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan1";
    heaser("Location index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>