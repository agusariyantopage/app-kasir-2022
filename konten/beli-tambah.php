<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Input Pembelian</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item"><a href="index.php?hal=beli">Pembelian</a></li>
                    <li class="breadcrumb-item active">Input</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Input Transaksi Pembelian</h5>
            </div>
            <div class="card-body">  
                <!-- Form Pencarian Barang --> 
                <div class="form-row">
                    <div class="form-group col-sm-2">
                        <input class="form-control" type="number" name="jumlah" placeholder="Jumlah ..." required >
                    </div>
                    <div class="form-group col-sm-4">
                        <input class="form-control" type="text" name="barcode" placeholder="Barcode ..." required >
                    </div>
                    <div class="form-group col-sm-2">
                        <input class="form-control" type="number" name="harga_beli" placeholder="Harga Beli ..." required >
                    </div>
                    <div class="form-group col-sm-2">
                        <button class="btn btn-info btn-block" type="submit">Tambah</button>
                    </div>
                    <div class="form-group col-sm-2">
                        <button class="btn btn-warning btn-block" type="button">Cari</button>
                    </div>
                </div> 
                
                <!-- Tabel Keranjang Belanja -->
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <th>#</th>
                        <th>Nama Barang</th>
                        <th>Harga Beli</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Coki Coki</td>
                            <td align="right">5,000</td>
                            <td align="right">3</td>
                            <td align="right">15,000</td>
                        </tr>
                        <tr>
                            <td colspan="3">Total Pembelian</td>
                            <td colspan="2" align="right">15,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div><!-- /.container-fluid -->
</section>