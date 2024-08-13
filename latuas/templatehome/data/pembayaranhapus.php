<?php
 include("../../koneksi.php");

$kode = $_REQUEST['databayar'];
$query = "DELETE FROM pembayaran WHERE kdpembayaran='$kode'";
$hasil = mysqli_query($connect, $query);

if ($hasil) {
    header("Location:../BIMA.php?p=pembayarandata");
    exit;
} else {
    echo "PROSES UPDATE GAGAL!";
}

echo "<center>DATA TELAH DIHAPUS</center>";