<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<div class="px-5 py-4">
  <div style="display: flex; justify-content: space-between; align-items: center;">
    <h1>Tambah Barang Masuk</h1>

    <a href="/barang-masuk" class="btn btn-danger">Kembali</a>
  </div>

  <form action="<?= base_url('barang-masuk/add') ?>" method="post" class="mt-5" style="width: 50%; ">
    <div class="mb-3">
      <label class="form-label">Nama Barang</label>
      <input type="text" class="form-control" name="nama">
    </div>

    <div class="mb-3">
      <label class="form-label">Tipe Barang</label>
      <input type="text" class="form-control" name="tipe">
    </div>

    <div class="mb-3">
      <label class="form-label">Jumlah Barang</label>
      <input type="number" name="jumlah" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </form>


</div>

<?= $this->endSection() ?>