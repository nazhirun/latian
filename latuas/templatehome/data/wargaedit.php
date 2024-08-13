<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>UPDATE DATA BARANG</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
</head>

<body>

    <?php
include("../koneksi.php");
    $kd = $_GET['idwarga'];
    $edit = "SELECT * FROM warga WHERE idwarga='$kd'";
    $hasil = mysqli_query($connect, $edit);
    $data = mysqli_fetch_array($hasil);
?>

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Update Data Pelanggan</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" enctype="multipart/form-data" method="get" action="data/wargaProsesEdit.php"
            name="frmedit" id="frmedit">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ID Warga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="id"
                            value="<?php echo $data['idwarga']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Warga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="nama"
                            value="<?php echo $data['namawarga']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat Warga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="alamat"
                            value="<?php echo $data['alamatwarga']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">No telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="notelp"
                            value="<?php echo $data['nomortlp']; ?>">
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">UPDATE</button>
                <button type="button" class="btn btn-danger pull-left"
                    onclick="location.href='BIMA.php?p=warga'">KALUA</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
</body>

</html>