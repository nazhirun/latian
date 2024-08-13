<script>
$(document).ready(function(e) {
    $('#databrgmasuk').DataTable();
})
</script>

<?php
    include '../koneksi.php';
    $result = mysqli_query($connect,"SELECT * FROM pembayaran order by kdpembayaran");
    $total = mysqli_num_rows($result);
?>
<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Barang Masuk</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <a href="BIMA.php?p=pembayarantambah" class="btn btn-success btn-sm btnTambah"><i
                    class="glyphicon glyphicon-plus-sign"></i> Tambah</a>
            <br /><br />
            <table id="databrgmasuk" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pembayaran</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Nama Warga</th>
                        <th>pembayaran</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $row['kdpembayaran'] ?></td>
                        <td><?php echo $row['tglbayar'] ?></td>
                        <td><?php echo $row['namawarga'] ?></td>
                        <td><?php echo $row['bayar'] ?></td>
                        <td><?php echo $row['jumlah'] ?></td>
                        <td>
                        <td> <a href="BIMA.php?p=pembayaranedit&kodebayar=<?php echo $row['kdpembayaran'];?>"
                                class='btn btn-success'><i class='bi bi-pencil'></i></a></td>

                        <td><a onclick="hapus_data('<?php echo $row['kdpembayaran'];?>')" class='btn btn-danger'><i
                                    class='bi bi-trash'></i></a>

                        </td>
                    </tr>
                    <?php
                    $nomor++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
function hapus_data(databayar) {
    //  alert('ok');
    //window.location="data/hapus.php?kdbrg="+datakdbrg;
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
            window.location = "data/pembayaranhapus.php?databayar=" + databayar;
        }
    });
}
</script>