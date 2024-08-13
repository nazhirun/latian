<?php
include("../../koneksi.php");

$idwarga = $_GET['id'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$notelp = $_GET['notelp'];
$proses = "UPDATE warga SET namawarga='$nama', alamatwarga='$alamat', 
    nomortlp='$notelp'
    WHERE idwarga='$idwarga'";
$hasil = mysqli_query($connect, $proses);
if ($hasil) {
    header("location:../BIMA.php?p=warga");
} else {
    echo "PROSES UPDATE GAGAL!";
}