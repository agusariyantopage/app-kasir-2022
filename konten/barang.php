<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Pokok</a></li>
                    <li class="breadcrumb-item active">Barang</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <!-- Tombol Tambah -->
        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
            Tambah
        </button>

        <div class="card">
            <div class="card-header">
                <h5>Data Barang</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <th>ID</th>
                        <th>NAMA BARANG</th>
                        <th>STOK</th>
                        <th>HARGA BELI</th>
                        <th>HARGA JUAL</th>
                        <th>BARCODE</th>
                        <th>AKSI</th>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from barang order by nama_barang";
                        $query = mysqli_query($koneksi, $sql);
                        while ($kolom = mysqli_fetch_array($query)) {


                        ?>

                            <tr>
                                <td><?= $kolom['id_barang']; ?></td>
                                <td><?= $kolom['nama_barang']; ?></td>
                                <td><?= $kolom['stok']; ?></td>
                                <td><?= number_format($kolom['harga_pokok']); ?></td>
                                <td><?= number_format($kolom['harga_jual']); ?></td>
                                <td><?= $kolom['barcode']; ?></td>
                                <td>
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="aksi/barang.php" method="POST">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" required>

                    <label for="stok">Stok</label>
                    <input type="number" name="stok" class="form-control" required>

                    <label for="harga_pokok">Harga Pokok</label>
                    <input type="number" name="harga_pokok" class="form-control" required>

                    <label for="harga_jual">Harga Jual</label>
                    <input type="number" name="harga_jual" class="form-control" required>

                    <label for="barcode">Barcode</label>
                    <input type="text" name="barcode" class="form-control" required>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>