<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Produk
                </div>
                <div class="card-body">
                    <?php if( validation_errors() ) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url(); ?>index.php/program/ubahproduk/<?= $edit->id_produk; ?>" method="post">
                        <label for="no">No</label>
                            <input type="text" name="no" id="no" value="<?= $edit->no; ?>" class="form-control" >
                        <label for="id_produk">ID Produk</label>
                            <input type="text" name="id_produk" id="id_produk" value="<?= $edit->id_produk; ?>" class="form-control" readonly="readonly">
                        <label for="nama_produk">Nama Produk</label>
                            <input type="text" name="nama_produk" id="nama_produk" value="<?= $edit->nama_produk; ?>" class="form-control" >
                        <label for="harga">Harga Produk</label>
                            <input type="text" name="harga" id="harga" value="<?= $edit->harga; ?>" class="form-control" placeholder="Masukkan harga beli">
                        <label for="Status">Kategori</label>
                            <input type="text" name="kategori" id="kategori" value="<?= $edit->kategori; ?>" class="form-control" placeholder="Kategori">
                        <label for="Status">Status</label>
                            <input type="text" name="status" id="status" value="<?= $edit->status; ?>" class="form-control" placeholder="masukkan jumlah status">
                        <button type="submit" class="btn btn-primary float-right" onclick="return confirm('Ubah Kategori ?')">Ubah Data</button>
                        <a href="<?= base_url(); ?>index.php/program/index" class="btn btn-primary float-right mr-2" onclick="return confirm('Kembali ?')">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>