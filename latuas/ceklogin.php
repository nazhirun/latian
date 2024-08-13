<?php
  session_start();
  $host = "localhost";
    $username = "root";
    $password = "A123b142";
    $database = "u710910476_dbuas";
    $connect = mysqli_connect($host, $username, $password, $database);
    mysqli_select_db($connect, $database) or Die ("Koneksi Gagal Ke Database!");
error_reporting(E_ALL);
ini_set('display_errors', 1);

$userid = $_POST['username'];
$pass = $_POST['password'];
$op = $_GET['op'];

if ($op == "in") {
    $cek = mysqli_query($connect, "SELECT * FROM admin2210020 WHERE adminid ='$userid' AND adminpass=md5('$pass')");
    
    if(mysqli_num_rows($cek)==1){
        $c = mysqli_fetch_array($cek);
        $_SESSION['adminid'] = $c['adminid'];
        $_SESSION['adminlevel'] = $c['adminlevel'];
        $_SESSION['adminnamalengkap'] = $c['adminnamalengkap'];
        $_SESSION['foto'] = $c['foto'];

        if ($c['adminlevel'] == 1) {
            header("location:https://majuintech.com/nazhir/latian/latuas//templatehome/BIMA.php");
        } else if ($c['adminlevel'] == 2) {
            header("location:https://majuintech.com/nazhir/latian/latuas//templatehome/BIMA.php");
        }
    } else {
        echo "<center>LOGIN GAGAL!</center><br>
              Username Atau Password Anda Salah.<br>
              Atau account Anda belum mendaftar.<br>";
              echo "<a href=index.php><b>ULANGI LAGI</b></a><br>";
    }
} else if ($op == "out") {
    unset($_SESSION['adminid']);
    unset($_SESSION['adminlevel']);
    header("location:index.php");
}


?>