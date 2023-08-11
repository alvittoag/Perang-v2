<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<div class="px-5 py-4">
  <div style="display: flex; justify-content: space-between; align-items: center;">
    <h1>Barang Keluar</h1>

    <a href="/tambah-barang-keluar" class="btn btn-primary">Tambah Barang Keluar</a>

  </div>

  <table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">Id Barang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col"">Transportasi</th>
        <th scope=" col" ">Kota</th>
        <th scope=" col">Tanggal Keluar</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($barang as $brg) : ?>
        <tr>
          <th scope="row"><?= $brg['id']; ?></th>
          <td><?= $brg['nama']; ?></td>
          <td><?= $brg['transportasi']; ?></td>
          <td><?= $brg['kota']; ?></td>
          <td><?= $brg['created_at']; ?></td>
          <td>
            <a href="<?= base_url('barang-keluar/delete/') . $brg['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
            <a href="<?= base_url('barang-keluar/edit/') . $brg['id'] ?>" class="btn btn-info btn-sm">Edit</a>
          </td>
        </tr>
      <?php endforeach; ?>


    </tbody>
  </table>
</div>

<?= $this->endSection() ?>