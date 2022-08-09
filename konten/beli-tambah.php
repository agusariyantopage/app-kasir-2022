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
                    <div class="form-group col-sm-6">
                        <input class="form-control" type="barcode" name="jumlah" placeholder="Barcode ..." required >
                    </div>
                    <div class="form-group col-sm-2">
                        <button class="btn btn-info btn-block" type="submit">Tambah</button>
                    </div>
                    <div class="form-group col-sm-2">
                        <button class="btn btn-warning btn-block" type="button">Cari</button>
                    </div>
                </div>             
            </div>
            <div class="card-footer"></div>
        </div>
    </div><!-- /.container-fluid -->
</section>