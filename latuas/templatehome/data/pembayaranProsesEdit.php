<?php
include("../../koneksi.php");

$idbayar = $_GET['kdpembayaran'];
$tanggal = $_GET['tglbayar'];
$nama = $_GET['namawarga'];
$pembayaran = $_GET['bayar'];
$jml = $_GET['jumlah'];
$proses = "UPDATE pembayaran SET tglbayar='$tanggal', namawarga='$nama', 
    bayar='$pembayaran', jumlah='$jml'
    WHERE kdpembayaran='$idbayar'";
$hasil = mysqli_query($connect, $proses);
if ($hasil) {
    header("location:../BIMA.php?p=pembayarandata");
} else {
    echo "PROSES UPDATE GAGAL!";
}