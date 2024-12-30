<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tunjangan_model;

class Tunjangan extends Controller
{
    public function index()
    {
        helper('currency');
        $model = new Tunjangan_model;
        $data['title']     = 'Data Tunjangan';
        $data['getTunjangan'] = $model->gettunjangan();
        echo view('konten/tunjangan/view', $data);
        
    }

    public function add()
    {
        $model = new Tunjangan_model;
        $data = array(
            'kode_tunjangan'       => $this->request->getPost('kode_tunjangan'),
            'nama_tunjangan'         => $this->request->getPost('nama_tunjangan'),
            'jumlah_tunjangan'          => $this->request->getPost('jumlah_tunjangan')
        );
        
        $model->saveTunjangan($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data tunjangan");
                window.location="' . base_url('tunjangan') . '"
            </script>';
    }
    public function edit($kode_tunjangan)
    {
        $model = new Tunjangan_model;
        $getTunjangan = $model->getTunjangan($kode_tunjangan)->getRow();
        if (isset($getTunjangan)) {
            $data['tunjangan'] = $getTunjangan;
            $data['title']  = 'rianasndv';

            
            echo view('konten/tunjangan/edit_view', $data);
            
        } else {

            echo '<script>
                    alert("kode_tunjangan  ' . $kode_tunjangan . ' Tidak ditemukan");
                    window.location="' . base_url('tunjangan') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new Tunjangan_model;
        $kode_tunjangan = $this->request->getPost('kode_tunjangan');
        $data = array(
            'kode_tunjangan'       => $this->request->getPost('kode_tunjangan'),
            'nama_tunjangan'         => $this->request->getPost('nama_tunjangan'),
            'jumlah_tunjangan'          => $this->request->getPost('jumlah_tunjangan')
        );
        
        $model->edittunjangan($data, $kode_tunjangan);
        echo '<script>
                alert("Selamat! Anda berhasil melakukan update data.");
                window.location="' . base_url('tunjangan') . '"
            </script>';
    }
    public function hapus($kode_tunjangan)
    {
        $model = new Tunjangan_model;
        $getTunjangan = $model->getTunjangan($kode_tunjangan)->getRow();
        if (isset($getTunjangan)) {
            $model->hapusTunjangan($kode_tunjangan);
            echo '<script>
                    alert("Selamat! Data berhasil terhapus.");
                    window.location="' . base_url('tunjangan') . '"
                </script>';
        } else {
            echo '<script>
                    alert("Gagal Menghapus !, ID tunjangan ' . $kode_tunjangan . ' Tidak ditemukan");
                    window.location="' . base_url('tunjangan') . '"
                </script>';
        }
    }
}