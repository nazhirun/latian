<?php
 include("../../koneksi.php");

$kode = $_REQUEST['datawarga'];
$query = "DELETE FROM warga WHERE idwarga='$kode'";
$hasil = mysqli_query($connect, $query);

if ($hasil) {
    header("Location:../BIMA.php?p=warga");
    exit;
} else {
    echo "PROSES UPDATE GAGAL!";
}

echo "<center>DATA TELAH DIHAPUS</center>";