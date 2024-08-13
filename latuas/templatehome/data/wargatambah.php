<?php
include("../../koneksi.php");


$nama = $_POST['namawarga'];
$satuan = $_POST['alamat'];
$hargabeli = $_POST['nomortlp'];
$sql_tambah_barang = "INSERT INTO warga (namawarga, alamatwarga, nomortlp) VALUES 
    ('$nama', '$satuan', '$hargabeli')";
$tambahbarang = mysqli_query($connect, $sql_tambah_barang);

if ($tambahbarang) {
    header("location:../BIMA.php?p=warga");
} else {
    echo "Gagal Tambah Barang";
}