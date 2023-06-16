<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Produk
                </div>
                <div class="card-body">
                    <?php if( validation_errors() ) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>


                    <form action="<?= base_url(); ?>index.php/Program/tambahproduk " method="post">
                        <div class="form-group">
                            <label for="no">No</label>
                            <input type="text" name="no" id="no" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama_bar">Id Produk</label>
                            <input type="text" name="id_produk" id="id_produk" class="form-control" placeholder="Masukkan ID Produk">
                        </div>
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan Nama Produk">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Produk</label>
                            <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga Produk">
                        </div>
                        <div class="form-group">
                            <label for="kategori">kategori</label>
                            <input type="text" name="kategori" id="kategori" class="form-control" placeholder="kategori">
                        </div>
                        <div class="form-group">
                            <label for="stock">Status</label>
                            <input type="text" name="status" id="status"  class="form-control" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary float-right" onclick="return confirm('Apakah Mau menambah Produk ?')">Tambah Data Produk</button>
                        <a href="<?= base_url(); ?>index.php/program/index"  class="btn btn-primary float-right mr-2" onclick="return confirm('Kembali ?')">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

