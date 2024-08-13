<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_uas";
    $connect = mysqli_connect($host, $username, $password, $database);
    mysqli_select_db($connect, $database) or Die ("Koneksi Gagal Ke Database!");
?>