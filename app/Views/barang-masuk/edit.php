<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<div class="px-5 py-4">
  <div style="display: flex; justify-content: space-between; align-items: center;">
    <h1>Edit Barang Masuk</h1>

    <a href="/barang-masuk" class="btn btn-danger">Kembali</a>
  </div>

  <form action="<?= base_url('barang-masuk/update/') . $barang['id'] ?>" method="post" class="mt-5"
    style="width: 50%; ">
    <input type="hidden" name="_method" value="PUT">

    <div class="mb-3">
      <label class="form-label">Nama Barang</label>
      <input type="text" value="<?= $barang['nama']; ?>" class="form-control" name="nama">
    </div>

    <div class="mb-3">
      <label class="form-label">Tipe Barang</label>
      <input type="text" value="<?= $barang['tipe']; ?>" class="form-control" name="tipe">
    </div>

    <div class="mb-3">
      <label class="form-label">Jumlah Barang</label>
      <input type="number" name="jumlah" value="<?= $barang['jumlah']; ?>" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Edit Data</button>
  </form>


</div>

<?= $this->endSection() ?>