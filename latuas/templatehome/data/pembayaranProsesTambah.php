<?php
include("../koneksi.php");
$tgl = $_POST['tgl'];
$nama = $_POST['namawarga'];
$satuan = $_POST['bayar'];
$hargabeli = $_POST['jml'];
// $stok = $_POST['stok'];

$sql_tambah_barang = "INSERT INTO pembayaran (tglbayar, 
    namawarga, bayar, jumlah) VALUES 
    ('$tgl', '$nama', '$satuan', '$hargabeli')";
$tambahbarang = mysqli_query($connect, $sql_tambah_barang);

if ($tambahbarang) {
    header("location:../BIMA.php?p=pembayarandata");
} else {
    echo "Gagal Tambah Barang";
}