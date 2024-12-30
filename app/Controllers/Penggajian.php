<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Penggajian_model;
use App\Models\Pegawai_model;
use App\Models\Tunjangan_model;
use App\Models\Potongan_model;

class Penggajian extends Controller
{
    public function index()
    {
        helper('currency');
        $model = new Penggajian_model;
        $pegawaiModel = new Pegawai_model;
        $tunjanganModel = new Tunjangan_model;
        $potonganModel = new Potongan_model;

        $data['title'] = 'Data Penggajian';
        $data['getPenggajian'] = $model->getPenggajian();
        $data['pegawai'] = $pegawaiModel->findAll();
        $data['tunjangan'] = $tunjanganModel->findAll();
        $data['potongan'] = $potonganModel->findAll();
        echo view('konten/penggajian/view', $data);
    }

    public function add()
    {
        $model = new Penggajian_model;
        $data = [
            'kode_penggajian'       => $this->request->getPost('kode_penggajian'),
            'kode_pegawai'          => $this->request->getPost('kode_pegawai'),
            'kode_tunjangan'        => $this->request->getPost('kode_tunjangan'),
            'kode_potongan'         => $this->request->getPost('kode_potongan'),
            'gaji_bersih'           => $this->request->getPost('gaji_bersih')
        ];

        $model->savePenggajian($data);
        echo '<script>
                alert("Data Berhasil di Tambahkan");
                window.location="' . base_url('penggajian') . '"
                </script>';
    }

    public function edit($kode_penggajian)
    {
        $model = new Penggajian_model;
        $pegawaiModel = new Pegawai_model;
        $tunjanganModel = new Tunjangan_model;
        $potonganModel = new Potongan_model;

        $data['penggajian'] = $model->getPenggajian($kode_penggajian);
        if ($data['penggajian']) {
            $data['title'] = 'Edit Data Penggajian';
            $data['pegawai'] = $pegawaiModel->findAll();
            $data['tunjangan'] = $tunjanganModel->findAll();
            $data['potongan'] = $potonganModel->findAll();
            echo view('konten/penggajian/edit_view', $data);
        } else {
            echo '<script>
                    alert("Kode Penggajian ' . $kode_penggajian . ' tidak ditemukan");
                    window.location="' . base_url('penggajian') . '"
                    </script>';
        }
    }

    public function update($kode_penggajian)
    {
        $model = new Penggajian_model;
        $kode_penggajian = $this->request->getPost('kode_penggajian');
        $data = [
            'kode_penggajian'    => $this->request->getPost('kode_penggajian'),
            'kode_pegawai'          => $this->request->getPost('kode_pegawai'),
            'kode_tunjangan'        => $this->request->getPost('kode_tunjangan'),
            'kode_potongan'         => $this->request->getPost('kode_potongan'),
            'gaji_bersih'           => $this->request->getPost('gaji_bersih')
        ];

        $model->editPenggajian($data, $kode_penggajian);
        echo '<script>
                alert("Data berhasil diupdate.");
                window.location="' . base_url('penggajian') . '"
                </script>';
    }

    public function hapus($kode_penggajian)
    {
        $model = new Penggajian_model;
        $getPenggajian = $model->getPenggajian($kode_penggajian);
        if (isset($getPenggajian)) {
            $model->hapusPenggajian($kode_penggajian);
            echo '<script>
                    alert("Data berhasil terhapus.");
                    window.location="' . base_url('penggajian') . '"
                    </script>';

            // return redirect()->to(base_url('penggajian'))->with('status', 'Data Penggajian Berhasil di Hapus');
        } else {
            echo '<script>
                    alert("Gagal Menghapus !, ID penggajian ' . $kode_penggajian . ' Tidak ditemukan");
                    window.location="' . base_url('penggajian') . '"
                    </script>';
        }
    }
}