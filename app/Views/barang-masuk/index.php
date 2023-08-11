<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<div class="px-5 py-4">
  <div style="display: flex; justify-content: space-between; align-items: center;">
    <h1>Barang Masuk</h1>

    <a href="/tambah-barang-masuk" class="btn btn-primary">Tambah Barang Masuk</a>

  </div>

  <table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">Id Barang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col" style="text-align: center;">Tipe Barang</th>
        <th scope="col" style="text-align: center;">Jumlah Barang</th>
        <th scope="col">Tanggal Input</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($barang as $brg) : ?>
        <tr>
          <th scope="row"><?= $brg['id']; ?></th>
          <td><?= $brg['nama']; ?></td>
          <td style="text-align: center;"><?= $brg['tipe']; ?></td>
          <td style="text-align: center;"><?= $brg['jumlah']; ?></td>
          <td><?= $brg['created_at']; ?></td>
          <td>
            <a href="<?= base_url('barang-masuk/delete/') . $brg['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
            <a href="<?= base_url('barang-masuk/edit/') . $brg['id'] ?>" class="btn btn-info btn-sm">Edit</a>
          </td>
        </tr>
      <?php endforeach; ?>


    </tbody>
  </table>
</div>

<?= $this->endSection() ?>