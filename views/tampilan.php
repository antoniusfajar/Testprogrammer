<div class="container-fluid">
    <div class="card">
       <div class="card-header">
       <div class="card-header">
        <div class="d-flex justify-content-between">
        <h5 class="card-title">Detail Produk</h5>
        <a href="<?= base_url(); ?>index.php/program/tambahproduk" class="badge badge-primary badge-pill text-center" onclick="return confirm('Tambah Data Produk ?');">Tambah Data</a>
        </div>
       </div>
            <div class="card-body">
                <div class="col-md-12" >
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead> 
                        <tr>
                            <td>NO</td>
                            <td>ID Produk</td>
                            <td>Nama Produk</td>
                            <td>Harga Produk</td>
                            <td>Kategoti Produk</td>
                            <td>status</td>
                            <td rowspan = '2'>Aksi</td>
                        </tr>
                        </thead>
                      <tr>
                      <?php foreach ($produk as $produk) :?>
                      <td><?= $produk['no'];?></td>
                      <td><?= $produk['id_produk'];?></td>
                      <td><?= $produk['nama_produk'];?></td>
                      <td><?= $produk['harga'];?></td>
                      <td><?= $produk['kategori'];?></td>
                      <td><?= $produk['status'];?></td>
                      <td>
                          <a href="<?= base_url(); ?>index.php/program/ubahproduk/<?= $produk['id_produk'];?>"  class="badge badge-primary badge-pill" onclick="return confirm('Edit produk no = <?= $produk['no'];?> ? ');">Edit</a>
                          <a href="<?= base_url(); ?>index.php/program/hapusproduk/<?= $produk['id_produk'];?>" class="badge badge-danger badge-pill"  onclick="return confirm('Hapus produk no = <?= $produk['no'];?> ? ');">Hapus</a>
                          </tr>
                    <?php endforeach; ?>

                        </table>

   </div>
 </div>
</div>

