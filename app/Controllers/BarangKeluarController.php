<?php

namespace App\Controllers;

use App\Models\BarangKeluarModel;
use App\Models\BarangMasukModel;

class BarangKeluarController extends BaseController
{

  public function barangKeluar()
  {
    $brg = new BarangKeluarModel();
    $data['barang'] = $brg->findAll();
    return view('barang-keluar/index', $data);
  }

  public function tambahbarangKeluar()
  {
    $brg = new BarangMasukModel();
    $data['barang'] = $brg->findAll();
    return view('barang-keluar/add', $data);
  }

  public function store()
  {
    $brg = new BarangKeluarModel();
    $data = [
      'nama' => $this->request->getPost('nama'),
      'transportasi' => $this->request->getPost('transportasi'),
      'kota' => $this->request->getPost('kota'),
    ];

    $brg->save($data);
    return redirect('barang-keluar')->with('status', 'Inserted Succesfully');
  }

  public function edit($id)
  {
    $barangmasuk = new BarangMasukModel();
    $barangkeluar = new BarangKeluarModel();
    $data = [
      'barang' => $barangmasuk->findAll(),
      'brg' => $barangkeluar->find($id)
    ];

    return view('barang-keluar/edit', $data);
  }

  public function update($id)
  {
    $brg = new BarangKeluarModel();
    $data = [
      'nama' => $this->request->getPost('nama'),
      'transportasi' => $this->request->getPost('transportasi'),
      'kota' => $this->request->getPost('kota'),
    ];

    $brg->update($id, $data);
    return redirect()->to(base_url('barang-keluar'))->with('status', 'Updated Succesfully');
  }

  public function delete($id)
  {
    $brg = new BarangKeluarModel();
    $brg->delete($id);


    return redirect()->back()->with('status', 'Deleted Succesfully');
  }
}
