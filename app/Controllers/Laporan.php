<?php

namespace App\Controllers;

use App\Models\Laporan_Model;
use App\Models\Pegawai_model;
use App\Models\Tunjangan_model;
use App\Models\Potongan_model;
use App\Models\Penggajian_model;
use CodeIgniter\Controller;

class Laporan extends Controller
{
    public function index()
    {
        helper('currency');
        $laporanModel = new Laporan_Model();
        $pegawaiModel = new Pegawai_model();
        $tunjanganModel = new Tunjangan_model();
        $potonganModel = new Potongan_model();
        $penggajianModel = new Penggajian_model();

        $data['title'] = 'Data Penggajian';
        $data['laporanBulanan'] = $laporanModel->findAll();
        $data['pegawai'] = $pegawaiModel->findAll();
        $data['tunjangan'] = $tunjanganModel->findAll();
        $data['potongan'] = $potonganModel->findAll();
        $data['penggajian'] = $penggajianModel->getPenggajian();

        return view('konten/laporan/view', $data);
    }

    public function add()
    {
        $model = new Laporan_Model();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'status_kepegawaian' => $this->request->getPost('status_kepegawaian'),
            'tanggal_gajian' => $this->request->getPost('tanggal_gajian'),
            'gaji_bersih' => $this->request->getPost('gaji_bersih'),
            'kode_penggajian' => $this->request->getPost('kode_penggajian'),
        ];

        $model->insert($data);
        return redirect()->to(base_url('laporan'))->with('status', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $laporanModel = new Laporan_Model();
        $pegawaiModel = new Pegawai_model();
        $tunjanganModel = new Tunjangan_model();
        $potonganModel = new Potongan_model();
        $penggajianModel = new Penggajian_model();

        $data['laporan'] = $laporanModel->find($id);
        if ($data['laporan']) {
            $data['title'] = 'Edit Data Laporan';
            $data['pegawai'] = $pegawaiModel->findAll();
            $data['tunjangan'] = $tunjanganModel->findAll();
            $data['potongan'] = $potonganModel->findAll();
            $data['penggajian'] = $penggajianModel->getPenggajian($data['laporan']->kode_penggajian)->getRow();
            return view('konten/laporan/edit', $data);
        } else {
            return redirect()->to(base_url('laporan'))->with('error', 'Kode Laporan ' . $id . ' tidak ditemukan');
        }
    }

    public function update($id)
    {
        $model = new Laporan_Model();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'status_kepegawaian' => $this->request->getPost('status_kepegawaian'),
            'tanggal_gajian' => $this->request->getPost('tanggal_gajian'),
            'gaji_bersih' => $this->request->getPost('gaji_bersih'),
            'kode_penggajian' => $this->request->getPost('kode_penggajian'),
        ];

        $model->update($id, $data);
        return redirect()->to(base_url('laporan'))->with('status', 'Data berhasil diupdate.');
    }

    public function hapus($id)
    {
        $model = new Laporan_Model();
        $getLaporan = $model->find($id);
        if ($getLaporan) {
            $model->delete($id);
            return redirect()->to(base_url('laporan'))->with('status', 'Data berhasil terhapus.');
        } else {
            return redirect()->to(base_url('laporan'))->with('error', 'Gagal Menghapus! ID Laporan ' . $id . ' tidak ditemukan');
        }
    }
}