<!DOCTYPE html>
<html class="input" lang="id">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="UTF-8">
    <title>DATA PARKIR KENDARAAN</title>
</head>
<link rel="stylesheet" href="style.css">

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Tambah</button>
<br><br>
<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>ID warga</th>
                <th>nama Warga</th>
                <th> WargaAlamat</th>
                <th>Nomor Telepon</th>
                <!-- <th>stok barang</th> -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php
                  $no=0;
                            $query = mysqli_query(  $connect ,"SELECT * FROM warga ");
                                while ($data = mysqli_fetch_array($query)) 
                                { $no++?>
            <tr>
                <td widht='5%'><?php echo $no ?></td>
                <td class='text-center'><?php echo $data['idwarga']?></td>
                <td class='text-center'><?php echo $data['namawarga']?></td>
                <td class='text-center'><?php echo $data['alamatwarga']?></td>
                <td class='text-center'><?php echo $data['nomortlp']?></td>
                <td> <a href="BIMA.php?p=wargaedit&idwarga=<?php echo $data['idwarga'];?>" class='btn btn-success'><i
                            class='bi bi-pencil'></i></a></td>

                <td><a onclick="hapus_data('<?php echo $data['idwarga'];?>')" class='btn btn-danger'><i
                            class='bi bi-trash'></i></a>
                </td>
                </td>
            </tr>
            <?php   }?>

            </tr>

        </tbody>
        <tfoot>

            </tr>
        </tfoot>
    </table>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center">Tambah Data warga</h4>
            </div>
            <div class="modal-body">
                <!-- Form Input -->
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="data/wargatambah.php"
                    name="frmtambah" id="frmtambah">
                    <div class="box-body">

                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nama warga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="namawarga"
                                name="namawarga">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">alamat warga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="alamat" name="alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">nomor telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="nomortlp"
                                name="nomortlp">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-success">SIMPAN</button>
            </div>
        </div>
        </form>
    </div>

    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.2
    </div>
    <script>
    function hapus_data(datawarga) {
        //  alert('ok');
        //window.location="data/hapus.php?kdplg="+datakdbrg;
        Swal.fire({
            title: "Hapus Data Ini ?",
            // showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Hapus",
            confirmButtonColor: '#CD5C55'
            // denyButtonText: `Don't save`
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location = "data/wargahapus.php?datawarga=" + datawarga;
            }
        });
    }
    </script>