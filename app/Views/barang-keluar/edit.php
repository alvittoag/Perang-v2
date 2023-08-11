<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<div class="px-5 py-4">
  <div style="display: flex; justify-content: space-between; align-items: center;">
    <h1>Edit Barang Keluar</h1>

    <a href="/barang-keluar" class="btn btn-danger">Kembali</a>
  </div>

  <form action="<?= base_url('barang-keluar/update/') . $brg['id'] ?>" method="post" class="mt-5" style="width: 50%; ">
    <input type="hidden" name="_method" value="PUT">

    <div class="mb-3">
      <label class="form-label">Nama Barang</label>
      <select class="custom-select" name="nama">
        <?php foreach ($barang as $bg) : ?>
          <option <?= $brg['nama'] === $bg['nama'] ? ("selected") : '' ?> value="<?= $bg['nama']; ?>">
            <?= $bg['nama']; ?></option>

        <?php endforeach ?>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Transportasi</label>
      <select class="custom-select" name="transportasi">
        <option <?= $brg['transportasi'] === "Truk" ? ("selected") : '' ?> value="Truk">Truk</option>
        <option <?= $brg['transportasi'] === "Motor" ? ("selected") : '' ?> value="Motor">Motor</option>
        <option <?= $brg['transportasi'] === "Mobil" ? ("selected") : '' ?> value="Mobil">Mobil</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Kota</label>
      <select class="custom-select" name="kota">
        <option <?= $brg['kota'] === "Jakarta" ? ("selected") : '' ?> value="Jakarta">Jakarta</option>
        <option <?= $brg['kota'] === "Surabaya" ? ("selected") : '' ?> value="Surabaya">Surabaya</option>
        <option <?= $brg['kota'] === "Bandung" ? ("selected") : '' ?> value="Bandung">Bandung</option>
      </select>
    </div>



    <button type="submit" class="btn btn-primary">Edit Data</button>
  </form>


</div>

<?= $this->endSection() ?>