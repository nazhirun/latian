<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Pastikan jQuery di-load -->
<script>
function hitung() {
    var pembayaran = document.forms['finput']['bayar'].value; // Menggunakan nama form yang benar
    var jumlah;

    if (pembayaran === "Sosial") {
        jumlah = 20000;
    } else if (pembayaran === "Kebersihan") {
        jumlah = 50000;
    } else if (pembayaran === "kematian") {
        jumlah = 10000; // Tambahkan ini jika tidak ada yang dipilih
    }

    document.forms['finput']['jml'].value = jumlah;
}

function resetForm() {
    document.forms['finput'].reset();
}
</script>
<script>
function setPemasok(id, nama) {
    $('#namawarga').val(nama);
    $('#modalCariPemasok').modal('hide');
}
</script>

<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Input Data Pembayaran</h3>
        </div>
        <form class="form-horizontal form-label-left input_mask" method="POST" role="form"
            action="BIMA.php?p=pembayaranProsesTambah" name="finput" id="finput">

            <div class="form-group">
                <label for="tgl">Tanggal Pembayaran:</label>
                <input type="date" class="form-control" id="tgl" name="tgl" required>
            </div>
            <div class="form-group">
                <label for="namawarga">Nama Warga:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="namawarga" name="namawarga" required readonly>
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                            data-target="#modalCariPemasok"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="pembayaran">Pembayaran:</label>
                <select class="form-control" id="bayar" name="bayar" required onchange="hitung()">
                    <option value="">Pilih Pembayaran</option>
                    <option value="Sosial">Sosial</option>
                    <option value="Kebersihan">Kebersihan</option>
                    <option value="kematian">Kematian</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jml">Jumlah:</label>
                <input type="number" class="form-control" id="jml" name="jml" required readonly>
            </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary btnSimpan" name="ok" id="ok"><span
                class="glyphicon glyphicon-floppy-saved"></span> Simpan Data</button>
    </div>
    </form>
</div>
</div>

<!-- Modal Cari Warga -->
<div id="modalCariPemasok" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cari Data Warga</h4>
            </div>
            <div class="modal-body">
                <?php
                include '../koneksi.php';
                $result = mysqli_query($connect,"SELECT idwarga, namawarga FROM warga ORDER BY idwarga ASC");
                ?>
                <table id="datapemasok" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Warga</th>
                            <th>Nama Warga</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td>{$nomor}</td>
                                <td>{$row['idwarga']}</td>
                                <td>{$row['namawarga']}</td>
                                <td><button type='button' class='btn btn-info btn-sm' onclick=\"setPemasok('{$row['idwarga']}', '{$row['namawarga']}')\"><i class='glyphicon glyphicon-ok-sign'></i></button></td>
                            </tr>";
                            $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>