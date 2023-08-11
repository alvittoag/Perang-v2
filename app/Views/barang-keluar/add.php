<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<div class="px-5 py-4">
  <div style="display: flex; justify-content: space-between; align-items: center;">
    <h1>Tambah Barang Keluar</h1>

    <a href="/barang-keluar" class="btn btn-danger">Kembali</a>
  </div>

  <form action="<?= base_url('barang-keluar/add') ?>" method="post" class="mt-5" style="width: 50%; ">
    <div class="mb-3">
      <label class="form-label">Nama Barang</label>
      <select class="custom-select" name="nama">
        <?php foreach ($barang as $brg) : ?>
        <option value="<?= $brg['nama']; ?>"><?= $brg['nama']; ?></option>

        <?php endforeach ?>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Transportasi</label>
      <select class="custom-select" name="transportasi">
        <option value="Truk">Truk</option>
        <option value="Motor">Motor</option>
        <option value="Mobil">Mobil</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Kota</label>
      <select class="custom-select" name="kota">
        <option value="Jakarta">Jakarta</option>
        <option value="Surabaya">Surabaya</option>
        <option value="Bandung">Bandung</option>
      </select>
    </div>



    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </form>


</div>

<?= $this->endSection() ?>