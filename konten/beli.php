<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pembelian</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item active">Pembelian</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <!-- Tombol Tambah -->
        <a href="index.php?hal=beli-tambah"><button type="button" class="btn btn-primary mb-2">
            Tambah
        </button></a>

        <div class="card">
            <div class="card-header">
                <h5>Data Pembelian</h5>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead>
                        <th>ID</th>
                        <th>TANGGAL</th>
                        <th>WAKTU</th>
                        <th>ID PEMASOK</th>
                        <th>TOTAL ITEM</th>                        
                        <th>TOTAL BELANJA</th>
                        <th>AKSI</th>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from beli";
                        $query = mysqli_query($koneksi, $sql);
                        while ($kolom = mysqli_fetch_array($query)) {


                        ?>
                            <tr>
                                <td><?= $kolom['id_beli']; ?></td>
                                <td><?= $kolom['tanggal']; ?></td>
                                <td><?= $kolom['waktu']; ?></td>
                                <td><?= $kolom['id_pemasok']; ?></td>
                                <td></td>                             
                                <td></td>
                                <td></td>
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