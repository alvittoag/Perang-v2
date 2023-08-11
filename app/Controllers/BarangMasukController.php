<?php

namespace App\Controllers;

use App\Models\BarangKeluarModel;
use App\Models\BarangMasukModel;

class BarangMasukController extends BaseController
{
    public function index(): string
    {
        $brgmsk = new BarangMasukModel();
        $brgklr = new BarangKeluarModel();
        $data = [
            'barangmasuk' => $brgmsk->findAll(),
            'barangkeluar' => $brgklr->findAll(),
        ];
        return view('index', $data);
    }

    public function barangMasuk()
    {
        $brg = new BarangMasukModel();
        $data['barang'] = $brg->findAll();
        return view('barang-masuk/index', $data);
    }

    public function tambahbarangMasuk()
    {
        return view('barang-masuk/add');
    }

    public function store()
    {
        $brg = new BarangMasukModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tipe' => $this->request->getPost('tipe'),
            'jumlah' => $this->request->getPost('jumlah'),
        ];

        $brg->save($data);
        return redirect('barang-masuk')->with('status', 'Inserted Succesfully');
    }

    public function edit($id)
    {

        $brg = new BarangMasukModel();
        $data['barang'] = $brg->find($id);

        return view('barang-masuk/edit', $data);
    }

    public function update($id)
    {
        $brg = new BarangMasukModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tipe' => $this->request->getPost('tipe'),
            'jumlah' => $this->request->getPost('jumlah'),
        ];

        $brg->update($id, $data);
        return redirect()->to(base_url('barang-masuk'))->with('status', 'Updated Succesfully');
    }

    public function delete($id)
    {
        $brg = new BarangMasukModel();;
        $brg->delete($id);


        return redirect()->back()->with('status', 'Deleted Succesfully');
    }
}
