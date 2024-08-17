<?php
    $host = "127.0.0.1:3306";
    $username = "root";
    $password = "A123b142";
    $database = "u710910476_dbuas";
    $connect = mysqli_connect($host, $username, $password, $database);
    mysqli_select_db($connect, $database) or Die ("Koneksi Gagal Ke Database!");
?>